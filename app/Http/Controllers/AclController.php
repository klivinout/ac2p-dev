<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Auth;

class AclController extends Controller
{
    
    /**
     * show detailed list of possible Tasks
     * @return helpers::view 
     */
    public function getTasks() {
        $tasks = DB::table('tasks')->get();

        return view('admin.acl.listtasks',['tasks' => $tasks]);
    }

    /**
     * creating new role
     * @return helpers::view
     */
    public function newRole() {
        $tasks = DB::table('tasks')->get();

        return view('admin.acl.newrole',['tasks' => $tasks]);
    }

    public function postNewRole(Request $request) {
        /*$validator = Validator::make($request->all(), [
            'role_title' => 'required|unique:roles.title',
            'task' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }*/
        DB::beginTransaction();
        try{
            $role = [
                'title' => $request->role_title,
                'created_by' => Auth::User()->id,
                'created_at' => date('Y-m-d H:i:s')
            ];

            $role_id = DB::table('roles')->insertGetId($role);

            foreach($request->task as $task) {
                DB::table('privileges')->insert([
                    'role_id' => $role_id,
                    'task_id' => $task,
                    'created_by' => Auth::User()->id,
                    'created_at' => date('Y-m-d H:i:s')
                ]);
            }


        } catch(Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('danger','Erreur inconnu est survenue');
        }

        DB::commit();
        return redirect()->back()->with('success','Role ajouter avec succés');
    }
}
