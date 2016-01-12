@extends('../master')

@section('titre')
    Ajout d'une tâche
@endsection

@section('titrePage')
    <h1>Ajouter une tâche</h1>
@endsection

@section('contenu')
    <!--<form method="post" action="{{route('accueil')}}">
        <p>
            <label for="name">Nom : </label>
            <input type="text" name="name" id="name" placeholder="Tapez votre nom"/>
            <br/>
            <label for="date">Date d'échéance : </label>
            <input type="date" name="date" id="date" placeholder="Tapez votre lien"/>
            <br>
            <label for="description">Description : </label>
            <textarea name="description" id="description" placeholder="Tapez votre description"></textarea>
            <br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Ajouter" />
        </p>
    </form>-->
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter une tâche</h3>
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
                    {!!  Form::open() !!}
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::text('nameTask', null, array('class'=>'form-control input-sm','placeholder'=>'Nom')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::date('dateTask', null, array('class'=>'form-control input-sm','placeholder'=>'jj/mm/aaaa')) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::text('description', null, array('class'=>'form-control input-sm','placeholder'=>'Description')) !!}
                    </div>

                    {!! Form::submit('Ajouter', array('class'=>'btn btn-info btn-block')) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection