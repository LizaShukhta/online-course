@extends('layouts.base')
@section('content')
 <!-- Masthead-->
        <header class="py-2 bg-image-full" style="background-image: url('https://7themes.su/_ph/36/409418902.jpg');">
		<div style="height: 150px;"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Начни вести здоровый образ жизни прямо сейчас!</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Тренировки на все группы мышц, программа питания,</br>развитие выносливости и силы</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Узнать больше</a>
                    </div>
                </div>
            </div>
        </header>
  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Тренировки</h1>
      <p class="lead">На сайте представлены 3 вида курсов, разработанные под разные цели.</p>
      <p>Каждый из курсов содержит актуальную информацию по тренировкам и питанию.</p>
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://images.wallpaperscraft.ru/image/trenazhernyj_zal_diski_ves_bodibilding_118105_1920x1080.jpg')">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 300px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Питание</h1>
      <p class="lead">Под каждую цель разработана программа питания.</p>
      <p>Ежедневный рацион состоит из 3 основных приемов пищи, а также 2 перекусов.</p>
    </div>
  </section>
   <!-- About-->
        <section class="page-section bg-primary" id="about" style="background-image: url('https://images.wallpaperscraft.ru/image/sport_beg_dorozhka_79980_1920x1080.jpg')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">У нас есть то, что вам надо!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Чтобы начать вести здоровый образ жизни, вам потребуется всего лишь 20 минут в день и коврик для фитнеса!</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="{{asset('courses')}}">Начать!</a>
                    </div>
                </div>
            </div>
        </section>
		
		
@endsection