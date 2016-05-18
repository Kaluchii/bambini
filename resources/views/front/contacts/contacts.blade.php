@extends('front.layout')
<?php $title = 'Bambini — Контакты'?>
@section('content')
    @include('front.contacts.menu')
    @yield('menu')
    <section class="content">
        <div class="head-title">
            <h1>{{$contacts->title_field}}</h1>
        </div>
        <div class="text-block">
            {!! $contacts->contact_descr_field !!}
            <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/70000001017224049/center/76.900865,43.189465/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.900865,43.189465/zoom/16/routeTab/rsType/bus/to/76.900865,43.189465╎Bambini, детский центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Bambini, детский центр</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":800,"height":600,"borderColor":"#a3a3a3","pos":{"lat":43.189465,"lon":76.900865,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"70000001017224049"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
        <div class="center">
            <p class="text">{{$all_site->tell_everyone_field}}</p>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
        </div>
    </section>
    @include('front.contacts.footer')
    @yield('footer')
@endsection