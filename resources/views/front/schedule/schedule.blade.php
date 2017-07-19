@extends('front.layout')
<?php $title = 'Bambini — Расписание'?>
@section('content')
    @include('front.schedule.menu')
    @yield('menu')
    <section class="content schedule">
        <div class="head-title">
            <h1>Расписание занятий</h1>
        </div>
        <div class="block">
            <div class="table-head">
                <div class="col-1-2">Программы</div>
                <div class="col-1-2">Дни<span class="delimiter"> • </span>Время</div>
            </div>
            <ul class="table-body">
                @foreach($programs->upgrade_programs_group as $program_item)
                    <li class="schedule-row">
                        <div class="col-1-2"><a href="/{{$program_item->slug_field}}" class="link">{{$program_item->program_name_field}}</a></div>
                        <div class="col-1-2">
                            @foreach($program_item->program_schedule_group as $schedule_item)
                                <p class="schedule_date-row"><span class="day">{{$schedule_item->day_field}} </span><span class="hour">{{$schedule_item->hour_field}}</span></p>
                            @endforeach
                        </div>
                    </li>
                @endforeach
                @foreach($target_programs->program_type_group as $program_type)
                    @foreach($program_type->upgrade_program_group as $target_program_item)
                        <li class="schedule-row">
                            <div class="col-1-2"><a href="/{{$target_program_item->slug_field}}" class="link">{{$target_program_item->program_name_field}}</a></div>
                            <div class="col-1-2">
                                @foreach($target_program_item->target_program_schedule_group as $target_schedule_item)
                                    <p class="schedule_date-row"><span class="day">{{$target_schedule_item->day_field}} </span><span class="hour">{{$target_schedule_item->hour_field}}</span></p>
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="center">
            <p class="text">{{$all_site->tell_everyone_field}}</p>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
        </div>
    </section>
    @include('front.footer')
    @yield('footer')
@endsection