@extends('layouts/mi-layout')

@section('contenido')
    <div class="contenido">
        <h1> CONTACTO</h1>
        
    <ul> 
        @for($i = 0; $i <= 5; $i++)
            <li>Elemento {{$i}}</li>
        @endfor
           
    
    </div>
@endsection
