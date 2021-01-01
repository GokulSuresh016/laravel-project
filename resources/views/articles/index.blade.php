@extends('template.header')
@extends('theme.index')
@section('post')
@foreach($article as $articles)
<header>
	<h2>{{$articles->title}}</h2>
</header>
	<p>{{$articles->data}}</p>
	@endforeach
@endsection