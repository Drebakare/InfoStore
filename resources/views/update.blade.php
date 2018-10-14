@extends('inc.header')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 " style="margin-left: 300px; margin-top: 100px;">
      <form class="form-horizontal" method="post" action="{{url('/edit',$articles->id)}}">
        {{csrf_field()}}
          <br>
          <fieldset>
          
          <legend>Create A post</legend>
           @if(count($errors)>0)
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                   {{$error}}
                </div>
              @endforeach
           @endif
          <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" class="form-control" id="text" name="title" aria-describedby="Title" value="{{$articles->title}}" placeholder="Enter Title">
           
          </div>
          <div class="form-group">
            <label for="Description">Description</label>
            <textarea type="text" id="Description" name="description" value="{{$articles->description}} " class="form-control"></textarea>
          </div>
          
          
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{url('/')}}"><button type="button" class="btn btn-link">Back</button></a>
        </fieldset>
      </form>
    </div>
  </div>
</div>

@endsection