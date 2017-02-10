@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">Список групп программ</label>
                <ul class="group-block group_container" data-block="dom_target_upgrade" data-group="program_type"
                    data-owner-id="0">
                    @foreach($dom_target_upgrade->program_type_group as $item_program_type )
                        @include('back.blocks.groupitems.dom_target_upgrade.program_type')
                    @endforeach
                </ul>
                {{--<button class="any_create" data-block="dom_target_upgrade" data-group="program_type"
                        data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                </button>--}}
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="dom_target_upgrade" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection