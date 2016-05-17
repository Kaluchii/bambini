@section('lesson')
    <div class="white-popup " id="lesson">
        <h3 class="popup_title">Записаться на обучение</h3>
        <div class="row">
            <p class="row-name">Имя</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="fio">
        </div>
        <div class="row">
            <p class="row-name">Почта</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="email">
        </div>
        <div class="row">
            <p class="row-name">Телефон</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="phone">
        </div>
        <div class="row">
            <p class="row-name">Комментарий</p>
               <textarea class="input popup_field" cols="30" rows="10" data-field-type="text"
                         data-field-name="comment"></textarea>
        </div>
        <div class="row">
            <button class="button send-mail" data-popup-id="lesson" data-type-name="lesson">Записаться</button>
        </div>
    </div>
@endsection