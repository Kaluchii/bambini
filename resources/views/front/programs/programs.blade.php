@extends('front.layout')
<?php $title = 'Бамбини'?>
@section('content')
    @include('front.index.menu')
    @yield('menu')
    <section class="content">
        <div class="programs">
            <h2 class="program-title" id="program">{{$programs->title_field}}</h2>
            <div class="block">
                @foreach($programs->upgrade_programs_group as $item)
                    <div class="col-1-3">
                        <a href="/programs/{{$item->slug_field}}">
                            <div class="wrap">
                                <img src="images/{{$item->upgrade_program_image->primary_link}}" alt="" class="program-title">
                            </div>
                            <p class="title-1">{{$item->program_name_field}}</p>
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
                                <img src="images/{{$item->type_pict_image->primary_link}}" alt="" class="program-title">
                            </div>
                            <p class="title-2">{{$item->type_name_field}}</p>
                        </a>
                        <div class="about-program">{!! $item->type_descr_field< !!}/div>
                        <ul class="program-link-block">
                            @foreach($item->upgrade_program_group as $field)
                                <li class="item-links"><a href="/programs/{{$field->slug_field}}">{{$field->program_name_field}}</a> {{$field->program_name_descr_field}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('front.programs.footer')
    @yield('footer')
@endsection
