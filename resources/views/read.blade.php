@extends('inc.header')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-8" style="margin-left: 200px; margin-top: 100px;">

			   <div class="alert alert-dismissible alert-warning">
		  			<a href="{{ url('/delete/'.$articles->id) }}"> <button type="button" class="close" data-dismiss="alert">&times;</button></a>
		  			<h4 class="alert-heading">{{$articles->title}}</h4>
		  			<p class="mb-0">{{$articles->description}}.</p>
          		</div>		

			</div>			
		</div>
	</div>
@endsection