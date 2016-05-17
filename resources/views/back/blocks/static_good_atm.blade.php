@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок галереи
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_good_atm"
                   class="input block_pre_field" value="{{$static_good_atm->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Галерея (В доброй атмосфере)</label>
                <ul class="group-block group_container" data-block="static_good_atm" data-group="good_atm_gallery"
                    data-owner-id="0">
                    @foreach($static_good_atm->good_atm_gallery_group as $item_good_atm_gallery )
                        @include('back.blocks.groupitems.static_good_atm.good_atm_gallery')
                    @endforeach
                </ul>
                <button class="any_create" data-block="static_good_atm" data-group="good_atm_gallery"
                        data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_good_atm" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection