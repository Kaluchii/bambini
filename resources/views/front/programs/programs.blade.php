@extends('front.layout')
<?php $title = 'Bambini — Развивающие программы';
        $j = 0;?>
@section('content')
    @include('front.programs.menu')
    @yield('menu')
    <section class="content">
        <div class="programs">
            <h2 class="program-title" id="program">{{$programs->title_field}}</h2>
            <div class="block">
                @foreach($programs->upgrade_programs_group as $item)
                    <?php $j++ ?>
                    <div class="col-1-3">
                        <a href="/{{$item->slug_field}}">
                            <div class="wrap">
                                <img src="images/{{$item->upgrade_program_image->primary_link}}" alt="" class="program-title">
                            </div>
                            <p class={{"title-".$j}}>{!! $item->program_name_field !!}</p>
                        </a>
                        <div class="about-program">{!! $item->preview_descr_field !!}</div>

                    </div>
                @endforeach
            </div>
            <div class="block">
                @foreach($target_programs->program_type_group as $item)
                    <div class="col-1-2">
                        <div class="a-wrap">
                            <div class="wrap">
                                <img src="images/{{$item->type_pict_image->primary_link}}" alt="" class="program-title">
                            </div>
                            <p class="title-2">{{$item->type_name_field}}</p>
                        </div>
                        <div class="about-program">{!! $item->type_descr_field !!}</div>
                        <ul class="program-link-block">
                            @foreach($item->upgrade_program_group as $field)
                                <li class="item-links"><a href="/{{$field->slug_field}}">{{$field->program_name_field}}</a> {{$field->program_name_descr_field}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('front.footer')
    @yield('footer')
@endsection
