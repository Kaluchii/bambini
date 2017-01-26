@section('footer')
    <footer class="footer">
        <div class="social-block">
            <p class="text">{{$all_site->tell_everyone_field}}</p>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
        </div>
        <div class="row">
            <div class="wrap">
                <div class="col-1-2">
                    <p>{{$all_site->copy_field}}</p>
                </div>
                <div class="col-1-2">
                    <p>Сделано в <a href="http://interpro.kz">ИнтерПро</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wrap">
                <div class="col-1-2">
                    <p>Мы в <a href="https://www.instagram.com/bambini.club/">Инстаграме</a>, <a href="https://vk.com/club82363318">ВКонтакте</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection