@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_contacts"
                   class="input block_pre_field" value="{{$static_contacts->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Контактная информация
            </label>
            <textarea data-field-type="text" data-field-name="contact_descr" data-block="static_contacts"
                      class="input block_field" placeholder="Текст">{{$static_contacts->contact_descr_field}}</textarea>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_contacts" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection