
@extends ('layout')

	@section ('content')

	<div id="wrapper">
		<div id="page" class="container">
			<div id="content">
			    <ul class="style1">
			        @foreach ($articles as $article)
			            <li class="first">
			                <a href="{{$article->path()}}"><h3>{{$article->title}}</h3></a>
			                <p><a href="{{route('articles.show', $article)}}">{{$article->excerpt}}</a></p>
			            </li>
			        @endforeach

			    </ul>

			</div>
		</div>
	</div>
	@endsection