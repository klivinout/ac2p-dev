<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AC2P | Login</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen{{Session::has('danger') ? '' : ' animated fadeInDown'}}">
        <div>
            <div>

                <h3 class="logo-name" style="font-size: 100px;">AC2P</h3>

            </div>
            <h3>Bienvenue</h3>
            <p>
                une petite description de l'entreprise
            </p>
            @if (Session::has('danger'))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('danger') }}
            </div>
            @else
            <p>Authentifiez vous</p>
            @endif
            <form class="m-t" role="form" action="#" method="post">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email : " value="{{ Request::old('email') ? old('email') : '' }}" required>
                </div>
                <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe : " required>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <p><a href="#"><small>Mot de passe oublié ?</small></a></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Espace Client</a>
            </form>
            <p class="m-t"> <small>AC2P &copy; {{date('Y')}}</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>
