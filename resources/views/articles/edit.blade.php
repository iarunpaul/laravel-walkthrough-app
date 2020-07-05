@extends ('layout')

	@section ('head')
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
   	@endsection

    @section ('content')

	    <div id="wrapper">
	        <div id="page" class="container">
	            <div id="content">
					<h1 class="has-text-weight-bold has-text-centered">Edit Article</h1>


					<form method="POST" action="/articles/{{$article->id}}">
						@csrf
						@method('PUT')
						<div class="field">
						  <label class="label" for="Title">Title</label>
						  <div class="control">
						    <input class="input" type="text" placeholder="Title" name="Title" value="{{$article->title}}">
						  </div>
						</div>

						<div class="field">
						  <label class="label" for="Excerpt">Excerpt</label>
						  <div class="control">
						    <textarea class="textarea"  name="Excerpt">{{$article->excerpt}}</textarea>
						  </div>
						</div>

						<div class="field">
						  <label class="label" for="Body">Body</label>
						  <div class="control">
						    <textarea class="textarea" name="Body">{{$article->body}}</textarea>
						  </div>
						</div>


						<div class="field is-grouped">
						  <div class="control">
						    <button class="button is-link" type="submit">Update</button>
						  </div>
						</div>
					</form>
					</div>
	            </div>
	        </div>
	    </div>


    @endsection