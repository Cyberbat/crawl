@extends('layout.master')



@section('content')


	<div style="margin: 5% 4% 5% 5%">

		<h1>{{ $domain->name }} "{{ $domain->url }} "</h1>

		<hr>
		
		<div style="margin: 5%; padding-left: 20%" >


			<div class="article"> 


		@foreach($domain->posts as $post)
		
	<div>
		<article style="margin-left: -5%; font-size: 30px;">


			<ul class="list-group">
			<li> <a href="/singlepost/{{ $post->id }}">{{ $post->title }} </a> "<strong> created {{ $post->created_at->diffForHumans() }}</strong>" and last visited at {{ $post->lastvisitdisplay }}  Post accessed every:{{ $post->frequency }} min The next time you are going to access this post is at {{ $post->nextvisit }} min</li>
			</ul>

		</article>
		</div>
	<hr>
		@endforeach

		<pagecreate domain="{{$domain}}"></pagecreate>

	 </div>
	
</div>

@endsection