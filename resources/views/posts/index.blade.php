 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
 </head>
 <body>
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
 </body>
 </html>