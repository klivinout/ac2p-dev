<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname', 'email', 'password','worker','privileges'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function getPicture() {
        $picture = json_decode($this->picture);

        $file = Storage::disk('uploads')
                ->get('/documents_users/'.$this->id.'/picture/'.$picture->filename);

        return Response($file, 200 , ['Content-Type' => $picture->mime]);
    }

    public function getRole() {
        $role = 'administrateur';
        //DB::table('roles')->where('id',$this->role)->value('title');
        return $role;
    }

    public function checkTask($task) {
        $privilege = DB::table('privileges')
            ->where('role_id',$this->role_id)
            ->where('task_id',$task)
            ->first();

        dd($privilege);
    }
}
