@section('header')
    <header class="header">
        <div class="col-1-2">
            <a href="/"><img src="/images/{{$all_site->logo_image->primary_link}}" alt="" class="logo"></a>
            <p class="text">{{$all_site->logo_descr_field}}</p>
        </div>
        <div class="col-1-2">
            <ul class="head-menu">
                <li class="item"><a href="{{$all_site->map_link_field}}">Карта проезда</a></li>
                <li class="item"><a class="ask" href="#ask">Задать вопрос</a></li>
                <ul class="phones">
                    <li class="item">{{$all_site->phone_field}}</li>
                    <li class="item">{{$all_site->landline_phone_field}}</li>
                </ul>
            </ul>
        </div>
    </header>
@endsection