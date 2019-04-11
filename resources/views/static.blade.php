@extends('layouts.base')
@section('content')

    
        <div class='container'>
            <div class='row'>
                <div class='headline_price'>
                    <h2>{{$obj->name}}</h2>
						{!!$obj->body!!}
                </div>
                
            </div>
        </div>

   
@endsection