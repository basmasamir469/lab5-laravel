<table border=2>
    <th>ID</th>
    <th>NAME</th>
    <th>TITLE</th>
    <th>BODY</th>

@foreach($posts as $post)
<tr>
<td>{{$post['id']}}</td>
<td>{{$post['name']}}</td>
<td>{{$post['title']}}</td>
<td>{{$post['body']}}</td>
<td><a href="/show">show</a></td>
<td><a href="/edit">edit</a></td>
<td><a href="/delete">delete</a></td>
</tr>
@endforeach

</table>