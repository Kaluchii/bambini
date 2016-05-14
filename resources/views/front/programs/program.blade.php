@extends('front.layout')
<?php $title = 'Бамбини';
        $i = 0?>
@section('content')
    @include('front.index.menu')
    @yield('menu')
    <section class="content">
        <div class="head-block">
            <h1 class="block-title">{{$item->program_name_field}}</h1>
            <div class="photo-wrap">
                @foreach($item->$gallery as $img)
                    <?php $i++ ?>
                        @if($i == 1)
                            <div class="col-1-2">
                                <img src="/..images/crops/{{$img->program_gallery_pict_image->big_crop->link}}" alt="">
                            </div>
                        @elseif($i == 2)
                            <div class="col-1-2">
                                <div class="row-1-2">
                                    <img src="/../images/crops/{{$img->program_gallery_pict_image->medium_crop->link}}" alt="">
                        @elseif($i == 3)
                                    <img src="/../images/crops/{{$img->program_gallery_pict_image->small_crop->link}}" alt="">
                                </div>
                        @elseif($i == 4)
                                <div class="row-1-2">
                                    <img src="/../images/crops/{{$img->program_gallery_pict_image->small_crop->link}}" alt="">
                        @elseif($i == 5)
                                    <img src="/../images/crops/{{$img->program_gallery_pict_image->medium_crop->link}}" alt="">
                                </div>
                            </div>
                        @endif
                @endforeach
            </div>
        </div>
        <div class="content-block">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $item->descr_field !!}
                </div>
                <div class="buttons-block">
                    <button class="ask">Задать вопрос</button>
                    <button class="join">Записаться на пробное занятие</button>
                </div>
            </div>
            <div class="col-1-2">
                <div class="teacher">
                    <h2>Программу ведут</h2>
                    <img src="images/prof.PNG" alt="">
                    <p class="name">ИМЯ</p>
                    <p class="prof">Психолог</p>
                </div>
                <div class="watch">
                    <p>Смотрите так же</p>
                    <ul class="program-link-block">
                        <li class="item-links"><a href="#">Субботняя группа</a></li>
                        <li class="item-links"><a href="#">Группа выходного дня</a></li>
                        <li class="item-links"><a href="#">Репетиторство начальных классов</a></li>
                        <li class="item-links"><a href="#">Ментальная арифметика</a> </li>
                        <li class="item-links"><a href="#">АРТ-терапия</a></li>
                        <li class="item-links"><a href="#">Юные художники</a></li>
                        <li class="item-links"><a href="#">Английския язык</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="center">
            <p class="text">{{$all_site->tell_everyone_field}}</p>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
        </div>
    </section>
    @include('front.programs.footer2')
    @yield('footer')
@endsection