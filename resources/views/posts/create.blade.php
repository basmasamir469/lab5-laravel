@extends('site_layouts.app')
@section('content')
 <form action="/posts" method="post">
     
     @csrf

 
  <div class="mb-3">
    <label  class="form-label" >TITLE</label>
    <input type="text" class="form-control" value="{{ old('title') }}" name="title" >
  </div>
  <div class="mb-3">
    <label class="form-label" >DESCRIPTION</label>
    <input type="text" class="form-control" value="{{ old('description') }}" name="description" >

  </div>

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>


@include('shared.errors')
@endsection
