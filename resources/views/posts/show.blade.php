 @extends('site_layouts.app')
 @section('content')
 <ul style="list-style-type: circle">
<li>{{$id}}</li>
<li>{{$title}}</li>
<li>{{$description}}</li>
<li>{{$updated_at}}</li>
<li>{{$created_at}}</li>
</ul>
@endsection


