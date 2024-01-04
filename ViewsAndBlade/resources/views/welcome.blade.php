@extends('layouts.main')

@section('title', 'Titulo')

@section('content')
<h1>Teste H1</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consectetur aut ex, tempore vitae totam illum? Aliquid possimus modi laborum nemo maxime, repellat eius molestias dolore commodi animi distinctio inventore.</p>

@if (15 > 20) 
{{-- se trocar 20 para 10 aparecerá o p na tela  --}}
    <p>A condição é certa</p>
@endif