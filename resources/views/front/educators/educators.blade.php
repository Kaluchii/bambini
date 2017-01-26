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
                <div class="col-1-2">
                    <img src="/images/{{$edu->face_image->primary_link}}" alt="" class="photo">
                </div>
                <div class="col-1-2">
                    <h2 class="name">{{$edu->name_field}}</h2>
                    <p class="prof">{{$edu->dolzhnost_field}}</p>
                    <p class="content-title">Профессиональное резюме</p>
                    <div class="text-block">{!! $edu->descr_field !!}</div>
                    @foreach($upgrade->upgrade_programs_group as $program)
                        @foreach($program->program_educators_group as $program_id)
                            @if($program_id->educator_id_field == $edu->id_field)
                                @if($b)
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
                    @endforeach
                    @if(!$b)
                        </ul>
                    @endif
                </div>
            </div>
        @endforeach
        <div class="center">
            <p class="text">{{$all_site->tell_everyone_field}}</p>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
        </div>
    </section>
    @include('front.footer')
    @yield('footer')
@endsection