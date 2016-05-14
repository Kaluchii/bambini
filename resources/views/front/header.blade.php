@section('header')
    <header class="header">
        <div class="col-1-2">
            <img src="/images/{{$all_site->logo_image->primary_link}}" alt="" class="logo">
            <p class="text">{{$all_site->logo_descr_field}}</p>
        </div>
        <div class="col-1-2">
            <ul class="head-menu">
                <li class="item"><a href="{{$all_site->map_link_field}}">Карта проезда</a></li>
                <li class="item"><a href="#">Задать вопрос</a></li>
                <li class="item">{{$all_site->phone_field}}</li>
            </ul>
        </div>
    </header>
@endsection
