@section('header')
    <header class="header">
        <div class="col-1-2">
            <a href="/"><img src="/images/{{$all_site->logo_image->primary_link}}" alt=""></a>
            <p class="text">{{$all_site->logo_descr_field}}</p>
        </div>
        <div class="col-1-2">
            <div class="item">{{$all_site->landline_phone_field}}</div>
            <div class="item">{{$all_site->phone_field}}</div>
            <div class="item"><a class="ask" href="#ask">Задать вопрос</a></div>
        </div>
    </header>
@endsection
