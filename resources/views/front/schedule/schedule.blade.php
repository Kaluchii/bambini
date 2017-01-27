@extends('front.layout')
<?php $title = 'Bambini — Расписание'?>
@section('content')
    @include('front.schedule.menu')
    @yield('menu')
    <section class="content">
        <div class="head-title">
            <h1>Расписание занятий</h1>
        </div>
        <div class="block">
            <div class="table-head">
                <div class="col-1-2"><p>Программы</p></div>
                <div class="col-1-2">Дни • Время</div>
            </div>
            <div class="table-body"></div>
        </div>
        <div class="center">
            <p class="text">{{$all_site->tell_everyone_field}}</p>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
        </div>
    </section>
    @include('front.footer')
    @yield('footer')
@endsection