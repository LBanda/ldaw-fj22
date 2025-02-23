@extends('layouts.main')

@section('pageTitle', "Autores")
  
@section('mainContent')
    
    <h1 class="text-center mb-4">Autores</h1>

    <ul class="list-group">
        
        {{--
        blade cuenta con directivas para realizar ciclos, condicionales y
        otras funcionalidades comunes de PHP.
        @forelse es una directiva especial de blade que simula un "foreach"
        combinado con un "if/else", en caso de que la estructura a recorrer
        no tenga elementos se ejecuta lo que se encuentra dentro de la 
        directiva @empty
        --}}
        @forelse($authors as $author)

            <li class="list-group-item">
                {{ $author["first_name"] . " " . $author["last_name"] }}
            </li>

        @empty

            <div class="alert alert-warning">
                No se encontraron autores.
            </div>

        @endforelse

    </ul>

@endsection
