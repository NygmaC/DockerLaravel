@extends('templates.meulayout')

@section('minha_sessaoprodutos')
	@if(isset($palavra))
		Palavra: {{$palavra}}
	@endif
@endsection