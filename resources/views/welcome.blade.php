@extends('inc.header')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-8" style="margin-left: 200px; margin-top: 100px;">
      <legend>Posts</legend>
        
           @if(session('success'))
              <div class="alert alert-success" style=" margin-left: 10px;">
               {{session('success')}}
              </div>
           @endif
          
<table class="table table-hover">
  <thead>
    <tr >
      <th scope="col " >ID</th>
      <th scope="col" >Title</th> 
      <th scope="col" >Action</th>
    </tr>
  </thead>
  <tbody>
  @if(count($articles)>0)
      @foreach($articles as $article) 
      <tr class="table-active">
      <th>{{$article->id}}</th>
      <td>{{$article->title}}</td>   
      <td><a href="{{ url('/read/'.$article->id) }}"><span class="badge badge-pill badge-info">Read</span></a>
          <a href="{{ url('/update/'.$article->id) }}"><span class="badge badge-pill badge-warning">Update</span></a>
          <a href="{{ url('/delete/'.$article->id) }}"><span class="badge badge-pill badge-danger">Delete</span></a>
      </td>
    </tr>
      @endforeach

  @endif
    
   
    
  </tbody>
   {{$articles->links()}}
</table> 

    </div>
  </div>
</div>

@endsection