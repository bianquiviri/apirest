@extends('layout.main')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Listado </h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'foo/bar']) !!}
                    {!!Form::label ('textbuscar','Buscar')  !!}
                    {!!Form::text ('textbuscar',null,['class'=>'form-control'])  !!}
                    {!! Form::close() !!}

                    <ul class="list-group">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>
               <div class="panel-footer">
                   <div class="btn-group">
                       <button type="button" class="btn btn-default">Left</button>
                       <button type="button" class="btn btn-default">Middle</button>
                       <button type="button" class="btn btn-default">Right</button>
                   </div>

               </div>
                </div>
            </div>
        </div>
    </div>

@endsection
