@extends('layout.app')

@section('body')
	<br>
	<a href="todo/create" class="btn btn-info">Add New</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h2 class="text-center">Todo list</h2>

	<ul class="list-group">

		@foreach($todos as $todo)
			<li class="list-group-item ">
		    	{{$todo->body}}
		    	<span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
		    	
		  	</li>

		@endforeach
		  
   </ul>
	</div>
@endsection