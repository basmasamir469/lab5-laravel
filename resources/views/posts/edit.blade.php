@extends('site_layouts.app')
@section('content')
 <form action="/posts/{{$id}}" method="post">

     @csrf
     @method('patch')

  <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text" class="form-control"  name="title" value={{$title}}>
  </div>
  <div class="mb-3">
    <label class="form-label" >Description</label>
    <input type="text" class="form-control"  name="description" value={{$description}}>
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>

@include('shared.errors')

 @endsection