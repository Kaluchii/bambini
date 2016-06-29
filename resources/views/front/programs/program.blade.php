@extends('front.layout')
<?php $title = 'Bambini — ' . $item->name_field;
$i = 0;
$b = true?>
@section('content')
    @include('front.programs.menu')
    @yield('menu')
    <section class="content">
        <div class="head-block">
            <h1 class="block-title">{{$item->program_name_field}}</h1>
            <div class="photo-wrap">
                @foreach($item->$gallery as $img)
                    <?php $i++ ?>
                    @if($i == 1)
                        <div class="col-1-2">
                            <img src="/images/{{$img->program_gallery_pict_image->big_crop->link}}" alt="">
                        </div>
                    @elseif($i == 2)
                        <div class="col-1-2">
                            <div class="row-1-2">
                                <img src="/images/{{$img->program_gallery_pict_image->medium_crop->link}}"
                                     alt="">
                                @elseif($i == 3)
                                    <img src="/images/{{$img->program_gallery_pict_image->small_crop->link}}"
                                         alt="">
                            </div>
                            @elseif($i == 4)
                                <div class="row-1-2">
                                    <img src="/images/{{$img->program_gallery_pict_image->small_crop->link}}"
                                         alt="">
                                    @elseif($i == 5)
                                        <img src="/images/{{$img->program_gallery_pict_image->medium_crop->link}}"
                                             alt="">
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
                    <button  class="ask" href="#ask">Задать вопрос</button>
                    <button  class="join lesson" href="#lesson">Записаться на пробное занятие</button>
                </div>
            </div>
            <div class="col-1-2">
                <div class="teacher">
                    @foreach($educators->staff_list_group as $edu)
                        @foreach($item->$educator_id as $educ_id)
                            @if($edu->id_field == $educ_id->educator_id_field)
                                @if($b)
                                    <h2>Программу ведут</h2>
                                    <?php $b = false; ?>
                                @endif
                                <img src="/images/{{$edu->face_image->secondary_link}}" alt="">
                                <p class="name">{{$edu->name_field}}</p>
                                <p class="prof">{{$edu->dolzhnost_field}}</p>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <div class="watch">
                    <p>Смотрите так же</p>
                    <ul class="program-link-block">
                        @foreach($programs->upgrade_program_group as $program)
                            <li class="item-links"><a href="{{$program->slug_field}}">{{$program->name_field}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="center">
            <p class="text">{{$all_site->tell_everyone_field}}</p>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
        </div>
    </section>
    @include('front.programs.footer')
    @yield('footer')
@endsection