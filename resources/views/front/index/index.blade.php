@extends('front.layout')
<?php $title = 'Bambini — О клубе';
      $i = 0;
      $j = 0;
      $c = 0?>
@section('content')
    @include('front.index.menu')
    @yield('menu')
    <section class="content index">
        <div class="head">
            <div class="image-wrap">
                <img src="/images/{{$about->head_image->primary_link}}" alt="">
            </div>
            <h1 class="title">{{$about->question_field}}</h1>
            <ul class="facts">
                <li class="fact"><a href="program">Интересно, полезно и весело</a></li>
                <li class="fact"><a href="features">Особенности клуба</a></li>
                <li class="fact"><a href="photos">В доброй атмосфере</a></li>
            </ul>
        </div>
        <div class="about">
            <div class="col-1-2">
                <img src="/images/{{$about->director_face_image->primary_link}}" alt="" class="photo">
                <p class="dir-name">{{$about->director_name_field}}</p>
                <p class="prof">{{$about->director_prof_field}}</p>
            </div>
            <div class="col-1-2">
                {!! $about->director_descr_field !!}
            </div>
        </div>
        <div class="programs">
            <h2 class="program-title" id="program">{{$programs->title_field}}</h2>
            <div class="block">
                @foreach($programs->upgrade_programs_group as $item)
                    <?php $j++ ?>
                    <div class="col-1-3">
                        <a href="/programs/{{$item->slug_field}}">
                            <div class="wrap">
                                <img src="/images/{{$item->upgrade_program_image->primary_link}}" alt="" class="program-title">
                            </div>
                            <p class={{"title-".$j}}>{{$item->program_name_field}}</p>
                        </a>
                        <div class="about-program">{!! $item->preview_descr_field !!}</div>
                    </div>
                @endforeach
            </div>
            <div class="block">
                @foreach($target_programs->program_type_group as $item)
                    <div class="col-1-2">
                        <a href="#">
                            <div class="wrap">
                                <img src="/images/{{$item->type_pict_image->primary_link}}" alt="" class="program-title">
                            </div>
                            <p class="title-2">{{$item->type_name_field}}</p>
                        </a>
                        <div class="about-program">{!! $item->type_descr_field !!}</div>
                        <ul class="program-link-block">
                            @foreach($item->upgrade_program_group as $field)
                                <li class="item-links"><a href="/programs/{{$field->slug_field}}">{{$field->program_name_field}}</a> {{$field->program_name_descr_field}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="features" id="features">
            <h2 class="block-title">{{$about->feature_title_field}}</h2>
            <ul class="features-block">
                @foreach($about->features_group as $item)
                    <li class="feature"><img src="/images/{{$item->feature_pict_image->secondary_link}}" alt="">
                        <p class="bold">{{$item->feature_name_field}}</p>
                        <div class="text">{!! $item->feature_descr_field !!}</div>
                        <?php $c++ ?>
                        @if($c == 4)
                            <p><a href="/educators">Педагоги бамбини</a></p>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="photos" id="photos">
            <div class="block-title">В доброй атмосфере</div>
            @foreach($gallery->good_atm_gallery_group as $img)
                <?php $i++ ?>
                @if($i == 1)
                    <div class="row">
                        <div class="col-1-3">
                            <div class="row-1-2"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->medium_crop->link}}" alt=""></a></div>
                @elseif($i == 2)
                            <div class="row-1-2"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->small_crop->link}}" alt=""></a></div>
                        </div>
                @elseif($i == 3)
                        <div class="col-1-3">
                            <div class="row-1-1"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->big_crop->link}}" alt=""></a></div>
                        </div>
                @elseif($i == 4)
                        <div class="col-1-3">
                            <div class="row-1-2"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->small_crop->link}}" alt=""></a></div>
                @elseif($i == 5)
                            <div class="row-1-2"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->medium_crop->link}}" alt=""></a></div>
                        </div>
                    </div>
                @elseif($i == 6)
                    <div class="row two">
                        <div class="col-1-3"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->small_crop->link}}" alt=""></a></div>
                @elseif($i == 7)
                        <div class="col-1-3"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->small_crop->link}}" alt=""></a></div>
                @elseif($i == 8)
                        <div class="col-1-3"><a href="/images/{{$img->atm_pict_image->original_link}}"><img src="/images/{{$img->atm_pict_image->small_crop->link}}" alt=""></a></div>
                    </div>
                @endif
            @endforeach
            <div class="button-block">
                <button class="more-photo button">Еще фото</button>
            </div>
            <?php $i = 0 ?>
            <div class="hide-image-block">
            @foreach($gallery->good_atm_gallery_group as $img)
                    <?php $i++ ?>
                    @if($i > 8)
                        <a href="/images/{{$img->atm_pict_image->original_link}}"></a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @include('front.index.footer')
    @yield('footer')
@endsection