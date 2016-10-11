<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="{{route('imageprofile')}}" style="width: 70px;height: 70px;"/>
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::User()->fullname}}</strong>
                         </span> <span class="text-muted text-xs block">{{Auth::User()->getRole()}} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu  m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}">Déconnection</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    AC2P
                </div>
            </li>
            <li{{activeGroup('nomDuGroup')}}>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li{{active('nomDuRoute')}}><a href="index.html">Dashboard v.1</a></li>
                    <li{{active('nomDuRoute')}}><a href="dashboard_2.html">Dashboard v.2</a></li>
                    <li{{active('nomDuRoute')}}><a href="dashboard_3.html">Dashboard v.3</a></li>
                    <li{{active('nomDuRoute')}}><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                </ul>
            </li>
            <li>
                <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span> <span class="label label-primary pull-right">NEW</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="graph_flot.html">Flot Charts</a></li>
                    <li><a href="graph_morris.html">Morris.js Charts</a></li>
                    <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                    <li><a href="graph_chartjs.html">Chart.js</a></li>
                    <li><a href="graph_peity.html">Peity Charts</a></li>
                    <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>