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
						  <label class="label" for="Title">Title</label>
						  <div class="control">
						    <input
						    class="input @error('Title') is-danger @enderror "
						    type="text"
						    placeholder="Title"
						    name="Title"
						    id="Title"
						    value="{{old('Title')}}">
						  </div>
						  @error('Title')
						  	<p class="help is-danger">{{$errors->first('Title')}}</p>
						  @enderror
						</div>

						<div class="field">
						  <label class="label" for="Excerpt">Excerpt</label>
						  <div class="control">
						    <textarea
						    class="textarea @error('Excerpt') is-danger @enderror"
						    name="Excerpt"
						    id="Excerpt">
							{{old('Excerpt')}}
							</textarea>
						    @error('Excerpt')
						  	<p class="help is-danger">{{$errors->first('Excerpt')}}</p>
						  @enderror
						  </div>
						</div>

						<div class="field">
						  <label class="label" for="Body">Body</label>
						  <div class="control">
						    <textarea
						    class="textarea @error('Body') is-danger @enderror"
						    placeholder="Body"
						    name="Body"
						    id="Body">
						    {{old('Body')}}
						    </textarea>
						    @error('Body')
						  	<p class="help is-danger">{{$errors->first('Body')}}</p>
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