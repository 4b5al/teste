@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crie sua publicação') }}</div>

                <div class="card-body">
                 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('home')}}" method="post" >
                        <input type="hidden" name="id" value="{{$publicacao->id ?? ''}}">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                            @csrf
                            <input type="text" value="{{$publicacao->titulo ?? old('titulo')}}" class="form-control" id="exampleFormControlInput1" placeholder="Titulo da sua publicaçao" name="titulo">
                            
                            {{$errors->has('titulo') ? $errors->first('titulo') : ''}}   
                        
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Data de publicação</label>
                            @csrf                            
                            <input type="date" value="{{ $publicacao->data ?? old('data')}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="data">
                            
                            {{$errors->has('data') ? $errors->first('data') : ''}} 
                        
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            @csrf
                            <textarea class="form-control" value="{{$publicacao->titulo ?? old('mensagem')}}" id="exampleFormControlTextarea1" rows="3" name="mensagem" placeholder="Digite aqui sua história"></textarea>
                            
                            {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}} 
                        
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Salvar publicação
                        </button>
                     
                    </form> 
                    <br>
                    @csrf
                    <a href="{{route('gerenciar')}}">
                        <button type="button" class="btn btn-info" >
                            Gerenciar publicações
                        </button>
                    </a>
                    <!--<br>
                    <br>
                    <a href="{{route('gerenciar')}}">
                        <button type="button" class="btn btn-danger" >
                            Deletar conta
                        </button>
                    </a>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection