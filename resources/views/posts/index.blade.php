
@extends('site_layouts.app')

@section('content')
 <a href="/posts/create">Add New Post</a>

 <table class="table">
    <th>ID</th>
    <th>UserName</th>
    <th>UserEmail</th>
   <th>TITLE</th>
  <th>Description</th>
  <th>Created_AT</th>
  <th>Updated_AT</th>
   

@foreach($posts as $post)
<tr>
<td>{{$post['id']}}</td>
<td>{{ $post->user->name??null}}</td>
<td>{{ $post->user->email??null}}</td>
<td>{{$post['title']}}</td>
<td>{{$post['description']}}</td>
<td>{{$post['created_at']}}</td>
<td>{{$post['updated_at']}}</td>

<td><button><a href="/posts/{{ $post['id']}}">show</a></button></td>
<td><button><a href="/posts/{{ $post['id']}}/edit">edit</a></button></td>
<td><form action="/posts/{{ $post['id']}}" method="post">
    @csrf
    @method('delete')
<input style="color:blue" type="submit" value="delete" name="delete">

</form></td>
</tr>
@endforeach

</table>
{!! $posts->links() !!}
@endsection
