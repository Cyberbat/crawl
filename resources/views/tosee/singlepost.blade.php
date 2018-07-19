@extends('layout.master')



@section('content')




	<div style="margin: 5% 4% 5% 5%">

		<h1>{{ $post->title }} </h1> <h2>with the URL:"{{ $post->url }} "</h2>

		<hr>
		
		<timeme post="{{$post}}" > </timeme>




@endsection