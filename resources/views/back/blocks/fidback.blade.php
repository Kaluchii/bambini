@extends('back.layout')
@section('content')
    <div class="block ">
        {{--<div class="field-wrap ">
            <label class="input-file">
                Email получателя писем
            </label>
            <input type="text" data-field-type="string" data-field-name="mail_rec" data-block="fidback"
                   class="input block_field" value="{{$fidback->mail_rec_field}}" placeholder="Строка">
        </div>--}}
        <div class="field-wrap ">
            <label class="input-file">
                Название сайта
            </label>
            <input type="text" data-field-type="string" data-field-name="site_name" data-block="fidback"
                   class="input block_field" value="{{$fidback->site_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="fidback" data-entity="block" data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection