@extends('layouts.base')

@section('content')
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    </head>
<header class="py-2 bg-image-full" style="background-image: url('https://7themes.su/_ph/36/409418902.jpg');">
		<div style="height: 150px;"></div>
        </header>
		<header class="py-2 bg-image-full" >
		<div style="height: 100px;"></div>
        </header>
<body id="page-top">
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item">
            <a class="nav-link" href="{{asset('')}}">Домой</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="{{asset('courses')}}">Курсы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('contacts')}}">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('company')}}">О компании</a>
          </li>
          
		  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/home">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
								<li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}</a>
          </li>
									
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="container">
<p class="lead" align="center">Введите ваши данный для отслеживания прогресса.</br></br></p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
				<table class="table table-bordered table-stripped">
				<tr><th>weight</th><th>height</th></tr>
				@foreach($objs as $one)
				<tr>
				<td>{{$one->weight}}</td>
				<td>{{$one->height}}</td>
				<td>
				<a href="{{asset('home/delete/'.$one->id)}}" class="btn btn-link">Удалить</a>
				</td>
				</tr>
				@endforeach
				</table>
				<p align="center">{!!$objs->links()!!}</p> 
                   <form action="{{asset('/home')}}" method="post">
					@csrf
					<div class="form-group">
    <label for="weignt">Вес</label>
    <input type="text" class="form-control" id="weight" aria-describedby="emailHelp" name="weight">
	@error('weight')
	<div style="color:red">{{$message}}</div> 
	@enderror
  </div>
  <div class="form-group">
    <label for="height">Рост</label>
    <input type="text" class="form-control" id="height" aria-describedby="emailHelp" name="height">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
