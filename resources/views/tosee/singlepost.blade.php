

@extends('layout.master')



@section('content')




	<div style="margin: 5% 4% 5% 5%">

		<h1>{{ $post->title }} </h1> <h2> URL:"{{ $post->url }} "</h2>

		<hr>
		<hr>

		<h1> Extract: </h1>
 	
		<p>{{json_decode(json_encode($post->body),true) }}</p>

		</div>		




		


@endsection