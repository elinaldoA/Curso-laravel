@extends('Layouts.site')

@section('titulo','Cursos')


@section('conteudo')
<div class="container">
    <h3 class="center">Adicionar cursos</h3>
    <div class="row">
        <form class="" action="{{route('admin.cursos.salvar')}}" method="post">
        {{ csrf_field() }}
        @include('admin.cursos._form')
        <button type="" class="btn deep-orange">Salvar</button>
        </form>
    </div>
</div>
@endsection