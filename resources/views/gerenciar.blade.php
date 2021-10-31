@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-borderless">
                   <thead>
                       <tr>
                           <th>
                               Titulo
                           </th>
                           <th>
                               data
                           </th>
                           <th>
                               mensagem
                           </th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($publicacao as $publica )
                            <tr><td>
                                {{$publica->id}}
                                </td>
                                <td>
                                {{$publica->titulo}}
                                </td>
                                <td>
                                {{$publica->data}}
                                </td>            
                                <td>             
                                {{$publica->mensagem}}
                                </td>
                                <td>
                                   <a href="{{route('editar', $publica->id)}}">editar</a> 
                                </td>
                                <td>
                                   <a href="{{route('excluir', $publica->id)}}">excluir</a> 
                                </td>
                            </tr>
                       @endforeach
                   </tbody>
                </table> 
                <a href="{{route('home')}}">
                    <button type="button" class="btn btn-info" >
                        voltar
                    </button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection