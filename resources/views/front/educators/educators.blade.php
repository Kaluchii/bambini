@extends('front.layout')
<?php $title = 'Bambini — Педагоги'?>
@section('content')
    @include('front.educators.menu')
    @yield('menu')
    <section class="content">
        <div class="head-title">
            <h1>{{$educators->title_field}}</h1>
        </div>
        @foreach($educators->staff_list_group as $edu)
            <?php $b = true ?>
            <div class="teacher-block">
                <div class="row-1-2">
                    <div class="col-1-2">
                        <img src="/images/{{$edu->face_image->primary_link}}" alt="" class="photo">
                        {{--<img src="/img/placeholder.jpg" alt="" class="photo">--}}
                    </div>
                    <div class="col-1-2">
                        {{--<h2 class="name">{{$edu->name_field}}</h2>
                        <p class="prof">{{$edu->dolzhnost_field}}</p>--}}
                        <h2 class="name">{{$edu->name_field}}</h2>
                        <p class="prof">{{$edu->dolzhnost_field}}</p>
                        <div class="text-block">{!! $edu->preview_descr_field !!}</div>
                        <div class="text-block more-text">{!! $edu->descr_field !!}</div>
                        <div class="more"><a class="expand">Подробнее</a></div>
                    </div>
                </div>
                <div class="row-1-2">
                    <div class="col-1-2">
                        <div class="overlay">
                            <div class="certs_gallery">
                                @foreach($edu->staff_certs_group as $item)
                                    <a href="/images/{{$edu->face_image->primary_link}}"></a>
                                @endforeach
                                    <a href="/img/1gg.jpg">Open image 1</a>
                                    <a href="/img/2gg.jpg">Open image 2</a>
                                    <a href="/img/3gg.jpg">Open image 3</a>
                            </div>
                        </div>
                        <a href="/img/1gg.jpg" class="sert-img call_certs"><img src="/img/sert-place.png" alt=""></a>
                        {{--<a href="" class="sert-img"><img src="/images/{{$edu->cert_preview_image->primary_link}}" alt=""></a>--}}
                        <div class="sert-row"><a href="/img/1gg.jpg" class="serts call_certs">Сертификаты и дипломы</a></div>
                    </div>
                    <div class="col-1-2">
                        @foreach($upgrade->upgrade_programs_group as $program)
                            @foreach($program->program_educators_group as $program_id)
                                @if($program_id->educator_id_field == $edu->id_field)
                                    @if($b)
                                        <div class="programs-wrap">
                                            <p class="content-title">Развивающие программы</p>
                                            <ul class="programs">
                                                <?php $b = false ?>
                                                @endif
                                                <li class="item"><a
                                                            href="/{{$program->slug_field}}">{{$program->program_name_field}}</a>
                                                </li>
                                                @endif
                                                @endforeach
                                                @endforeach

                                                @foreach($target_upgrade->program_type_group as $program_item)
                                                    @foreach($program_item->upgrade_program_group as $program)
                                                        @foreach($program->target_program_educators_group as $program_id)
                                                            @if($program_id->educator_id_field == $edu->id_field)
                                                                @if($b)
                                                                    <div class="programs-wrap">
                                                                        <p class="content-title">Развивающие
                                                                            программы</p>
                                                                        <ul class="programs">
                                                                            <?php $b = false ?>
                                                                            @endif
                                                                            <li class="item"><a
                                                                                        href="/{{$program->slug_field}}">{{$program->program_name_field}}</a>
                                                                            </li>
                                                                            @endif
                                                                            @endforeach
                                                                            @endforeach
                                                                            @endforeach
                                                                            @if(!$b)
                                                                        </ul>
                                                                    </div>
                                            @endif
                                        </div>
                    </div>
                </div>
                @endforeach
                <div class="center">
                    <p class="text">{{$all_site->tell_everyone_field}}</p>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir"
                         data-counter=""></div>
                </div>
    </section>
    @include('front.footer')
    @yield('footer')
@endsection