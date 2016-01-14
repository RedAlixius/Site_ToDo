@extends('../master')

@section('titre')
    Reset Password
@endsection

@section('titrePage')
    <h1>Réinitialisaion de votre mot de passe</h1>
@endsection

@section('contenu')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Réinitialisé votre mot de passe</h3>
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-sm" value="{{ old('email') }}" placeholder="Adresse Email">
                        </div>

                        <input type="submit" value="Envoyer un mail" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection