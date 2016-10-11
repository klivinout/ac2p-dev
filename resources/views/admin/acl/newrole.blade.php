@include('template.phpFunctions')

    	@include('template.header')

        
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Ajout de rôle</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Droits d'accés</a>
                    </li>
                    <li>
                        <a href="index.html">Rôles</a>
                    </li>
                    <li class="active">
                        <strong>Ajouter</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{route('getroles')}}" class="btn btn-primary">Gérer les roles</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row">
                        @if (Session::has('danger'))
                        <div class="col-md-4 alert alert-danger alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                           {{ Session::get('danger') }}
                           @if(count($errors)>0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        @endif
            
                        <form method="post" class="form-horizontal">
                            <div class="col-lg-12 animated fadeInUp">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="role_title">Nom du rôle : </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="role_title" name="role_title" alue="{{ Request::old('role_title') ? old('role_title') : '' }}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="role_title">Tâches attribuer : </label>
                                    <div class="col-sm-6">
                                        @foreach($tasks as $task)
                                        <div class="col-sm-4{{ $errors->has('task['.$task->id.']') ? ' has-error' : '' }}">
                                            <label><input type="checkbox" name="task[{{$task->id}}]" id="task{{$task->id}}" value="{{$task->id}}" {{ Request::old('task['.$task->id.']') ? 'checked' : '' }}>{{$task->title}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-8">
                                        <button class="btn btn-white" type="reset">Annuler</button>
                                        <button class="btn btn-primary" type="submit">Enregister</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
        @include('template.footer')

    </div>
</div>
	<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
	<script src="{{asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

	<script src="{{asset('assets/js/inspinia.js')}}"></script>
	<script src="{{asset('assets/js/plugins/pace/pace.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/toastr/toastr.min.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            @if (Session::has('success'))
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Succés', '{{Session::get('success')}}');

            }, 1300);
            @endif
        });
    </script>
</body>
</html>