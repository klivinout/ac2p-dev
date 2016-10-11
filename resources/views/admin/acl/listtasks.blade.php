@include('template.phpFunctions')

    	@include('template.header')

        
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Liste des Tâches disponible</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Droits d'accés</a>
                    </li>
                    <li class="active">
                        <strong>Tâches</strong>
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
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-md-1" align="center"></th>
                                <th class="col-md-2">Label</th>
                                <th class="col-md-7">Description </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($tasks))
                            @foreach($tasks as $task)
                            <tr>
                                <td class="col-md-1" align="center">#</td>
                                <td class="col-md-2">{{$task->title}}</td>
                                <td class="col-md-7">{{$task->description}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="col-md-4" align="center">PAS</td>
                                <td class="col-md-4" align="center">DE</td>
                                <td class="col-md-4" align="center">DONNEES</td>
                            </tr>
                            @endif
                            </tbody>
                        </table>
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
</body>
</html>