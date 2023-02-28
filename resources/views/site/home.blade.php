@extends('site.layout')

@section('title', 'Pag Home')
@section('conteudo')


    <div class="row container">

        @foreach ($produtos as $produto)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $produto->imagem }}">
                        <a href="{{route('site.details', $produto->slug)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ $produto->nome }}</span>
                        <p>{{ Str::limit($produto->descricao, 40)  }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row center">
        {{$produtos->links('custom.pagination')}}
    </div>
@endsection
