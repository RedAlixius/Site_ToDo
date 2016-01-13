@extends('../master')

@section('titre')
    Créer un compte
@endsection

@section('titrePage')
    <div class="">
        <h1>Création de votre compte</h1>
    </div>
@endsection

@section('contenu')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Enregistrez-vous ! <small> C'est gratuit !</small></h3>
                </div>
                <div class="panel-body">
                    @if(Session::get('errors'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <h5>Il y a eu des erreurs durant l'enregistration:</h5>
                            @foreach($errors->all('<li>:message</li>') as $message)
                                {!! $message !!}
                            @endforeach
                        </div>
                    @endif
                    {!!  Form::open(['url' => '/createAccount/form']) !!}
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::text('first_name', null, array('class'=>'form-control input-sm','placeholder'=>'Prénom')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::text('last_name', null, array('class'=>'form-control input-sm','placeholder'=>'Nom')) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::email('email', null, array('class'=>'form-control input-sm','placeholder'=>'Adresse Email')) !!}
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::password('password', array('class'=>'form-control input-sm','placeholder'=>'Mot de passe')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::password('password_confirmation', array('class'=>'form-control input-sm','placeholder'=>'Confirmation du mot de passe')) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::submit('S\'enregistrer', array('class'=>'btn btn-info btn-block')) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection