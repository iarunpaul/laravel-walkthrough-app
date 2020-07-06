@extends ('layout')

	@section ('head')
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
   	@endsection

    @section ('content')

	    <div id="wrapper">
	        <div id="page" class="container">
	            <div id="content">
					<h1 class="has-text-weight-bold has-text-centered">New Article</h1>


					<form method="POST" action="/articles">
						@csrf
						<div class="field">
						  <label class="label" for="title">Title</label>
						  <div class="control">
						    <input
						    class="input @error('title') is-danger @enderror "
						    type="text"
						    placeholder="title"
						    name="title"
						    id="title"
						    value="{{old('title')}}">
						  </div>
						  @error('title')
						  	<p class="help is-danger">{{$errors->first('title')}}</p>
						  @enderror
						</div>

						<div class="field">
						  <label class="label" for="excerpt">Excerpt</label>
						  <div class="control">
						    <textarea
						    class="textarea @error('excerpt') is-danger @enderror"
						    name="excerpt"
						    id="excerpt">
							{{old('excerpt')}}
							</textarea>
						    @error('excerpt')
						  	<p class="help is-danger">{{$errors->first('excerpt')}}</p>
						  @enderror
						  </div>
						</div>

						<div class="field">
						  <label class="label" for="body">Body</label>
						  <div class="control">
						    <textarea
						    class="textarea @error('body') is-danger @enderror"
						    name="body"
						    id="body">
						    {{old('body')}}
						    </textarea>
						    @error('body')
						  	<p class="help is-danger">{{$errors->first('body')}}</p>
						  @enderror
						  </div>
						</div>


						<div class="field">
						  <div class="control">
						    <button class="button is-link">Submit</button>
						  </div>
						</div>
					</form>
					</div>
	            </div>
	        </div>
	    </div>


    @endsection