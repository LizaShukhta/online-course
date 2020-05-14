<div>
<a href="{{asset('course/'.$one->id)}}">
{{$one->name}}
</a>
<br />
@if($one->picture)
	<img src="{{asset('files/'.$one->picture)}}" class="mypic" />
	@else <img src="{{asset('files/default.jpg')}}" class="mypic" />
		@endif
{!! $one->body !!}
</div>