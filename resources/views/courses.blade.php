@extends('layouts.base')
@section('content')
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="css/style.css" rel="stylesheet">
 </head>
<header class="py-2 bg-image-full" style="background-image: url('https://7themes.su/_ph/36/409418902.jpg');">
		<div style="height: 150px;"></div>
        </header>
		@foreach($objs as $one)
		<!-- Service box start -->
<section style="background-image: url('files/{{$one->id}}.jpg');">
<div style="height: 250px;"></div>
	<div class="container" >
		<div class="row">
			<div class="col-md-12 col-sm-12 wow fadeInDown" >
				<div class="service-content text-center" >
					<p><a href='course/{{$one->id}}' class="btn btn-primary white cd-btn"><img src="{{asset('files/'.$one->picture)}}" width="100" height="100" class="mypic" /></br>{{$one->name}}</a></p>
					</br>
					<p></br></br></br></br></br></p>
				</div>
			</div>
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
@endforeach
<!--/ Service box end -->
</div>
@endsection

<!--@each('components.course',$objs,'one')--!>