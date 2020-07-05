@extends ('layout')

    @section ('content')

	    <div id="wrapper">
	        <div id="page" class="container">
	            <div id="content">
	            	<h1 class="has-text-weight-bold has-text-centered">New Article</h1>
	            	<form method="POST" action="/articles">
	            		@csrf
		                <div class="field">
						  <p class="control has-icons-left">
						  	<label class="label">Title</label>
						    <input class="input" type="text" placeholder="Title">

						  </p>
						</div>
						<div class="field">
						  <p class="control has-icons-left">
						  	<label class="label">Excerpt</label>
						    <textarea class="textarea" name="body" placeholder="Body">

						  	</textarea>

						  </p>
						</div>
						<div class="field">
						  <p class="control has-icons-left">
						  	<label class="label">Body</label>
						    <textarea class="textarea" name="body" placeholder="Body">

						  	</textarea>
						</div>
						<div class="field">
						  <p class="control">
						    <button class="button is-success">
						      Post
						    </button>
						  </p>
						</div>
					</form>
	            </div>
	        </div>
	    </div>


    @endsection