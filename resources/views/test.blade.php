<ul>
@foreach ($AdminMenu AS $value)

<li>{{$value->title}}
@if ( $value->childs != NULL )

@include('test', array('AdminMenu'=>$value->childs))

@endif
</li>
@endforeach
</ul>

