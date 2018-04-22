@extends('layouts.app')

@section('content')
  <pagina tamanho="10">
    <painel titulo="Dashboard">
      <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
      <div class="row">
        @can('autor')
        <div class="col-md-4">
          <caixa qtd="{{ $artigos }}" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
        </div>
        @endcan
        @can('eAdmin')
        <div class="col-md-4">
          <caixa qtd="{{ $usuarios }}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="blue" icone="ion ion-person-stalker"></caixa>
        </div>
        @endcan
        @can('eAdmin')
        <div class="col-md-4">
          <caixa qtd="{{ $autores }}" titulo="Autores" url="{{route('autores.index')}}" cor="red" icone="ion ion-person"></caixa>
        </div>
        @endcan
        @can('eAdmin')
        <div class="col-md-4">
          <caixa qtd="{{ $admin }}" titulo="Admin" url="{{route('adm.index')}}" cor="green" icone="ion ion-person"></caixa>
        </div>
      </div>
      @endcan
    </painel>
  </pagina>
@endsection
