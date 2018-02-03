@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h2 class="text-center">Create New Item</h2>
			<form action="/todo" method="post">
			{{csrf_field()}}
			  	<fieldset>

				    <div class="form-group">
				    
				      <textarea class="form-control" id="exampleTextarea" name="body" rows="5"></textarea><br>
				       <button type="submit" class="btn btn-success">Submit</button>
				    </div>
			    
			   </fieldset>
			   
			  
			</form>

			@if(count($errors)>0)
			  <div class="alert alert-danger">
				@foreach($errors->all() as $error)
					{{$error}}
				@endforeach
			  </div>
			@endif

	</div>
@endsection