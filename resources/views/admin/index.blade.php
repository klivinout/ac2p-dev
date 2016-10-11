@include('template.phpFunctions')

    	@include('template.header')

        
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Ajout d'utilisateurs</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Section</a>
                    </li>
                    <li class="active">
                        <strong>Sous section</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="" class="btn btn-primary">Action comme liste</a>
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

	<!-- Custom a{{asset('assets/nd plugin jav')}}ascript -->
	<script src="{{asset('assets/js/inspinia.js')}}"></script>
	<script src="{{asset('assets/js/plugins/pace/pace.min.js')}}"></script>
</body>
</html>