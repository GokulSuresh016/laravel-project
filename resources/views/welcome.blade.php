@extends('template.header')
@extends('theme.index')
@section('post')
@foreach($articles as $article)
<header>
	<h2>{{$article->title}}</h2>
</header>
	<p>{{$article->details}}</p>
	@endforeach
@endsection