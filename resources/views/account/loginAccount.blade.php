@extends('../master')

@section('titre')
    Login
@endsection

@section('titrePage')
    <h1>Connexion</h1>


@endsection

@section('contenu')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Connectez-vous</h3>
                </div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/loginAccount') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-sm" value="{{ old('email') }}" placeholder="Adresse Email">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-sm" placeholder="Mot de passe">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Se souvenir de moi
                            </label>
                            <a href="{{ url('/password/email') }}" class="pull-right"> Mot de passe oublié ?</a>
                        </div>

                        <input type="submit" value="Se connecter" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
            <div class="text-center">
                <a href="{!! route('createAccount') !!}" >Vous n'avez pas encore de compte ? Enregistrez-vous !</a>
            </div>
        </div>
    </div>
@endsection