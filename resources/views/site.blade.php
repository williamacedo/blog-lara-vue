@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Artigos">

        <p>
            <form class="form-inline text-center" action="{{route('site')}}" method="get">
                <input class="form-control" name="busca" placeholder="Buscar" type="search" value="{{isset($busca) ? $busca: ""}}"></input>
                <button class="btn btn-info">Buscar</button>
            </form>

        </p>

        <div class="row">
            @foreach($lista as $key => $value)
                <artigo-card 
                titulo="{{$value->titulo}}"
                descricao="{{str_limit($value->descricao,40,"...")}}"
                link="{{route('artigo',[$value->id,str_slug($value->titulo)])}}"
                imagem="http://stopdesign.cn/demo/wp-content/uploads/2014/10/apple-gear-looking-pretty.jpg"
                data="{{$value->data}}"
                autor="{{$value->autor}}"
                sm="6"
                md="4"
                ></artigo-card>
            @endforeach
        </div>

        <div align="center">{{$lista}}</div>
    </painel>
  </pagina>
@endsection
