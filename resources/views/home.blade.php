@extends('layouts.app')

@section('content')

    @auth
        <p>Instruções para usuários logados... </p>
        
    @endauth

    @guest
        <p>Clique em "Entrar" se você é aluno ou docente USP.</p>

        <p>Caso seja <b>APOSENTADO</b> ou <b>SEM VÍNCULO</b> com a Escola de Enfermagem da USP, <b><a href="{{ route('login.externo')}}">clique aqui</a></b> para fazer o login.</p>
    @endguest

@endsection