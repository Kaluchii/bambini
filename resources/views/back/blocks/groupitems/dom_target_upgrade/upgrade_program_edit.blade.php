@extends('back.layout')
@section('content')
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                    Название страницы
                </label>
                <input type="text" data-field-type="string" data-field-name="name" data-block="dom_target_upgrade"
                       data-group="upgrade_program" class="input group_field"
                       value="{{$item_upgrade_program->name_field}}" data-item-id="{{$item_upgrade_program->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Вид ссылки в адресной строке
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_target_upgrade"
                       data-group="upgrade_program" class="input group_pre_field"
                       value="{{$item_upgrade_program->slug_field}}" data-item-id="{{$item_upgrade_program->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Название программы
                </label>
                <input type="text" data-field-type="string" data-field-name="program_name"
                       data-block="dom_target_upgrade" data-group="upgrade_program" class="input group_field"
                       value="{{$item_upgrade_program->program_name_field}}"
                       data-item-id="{{$item_upgrade_program->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Краткое пояснение
                </label>
                <input type="text" data-field-type="string" data-field-name="program_name_descr"
                       data-block="dom_target_upgrade" data-group="upgrade_program" class="input group_field"
                       value="{{$item_upgrade_program->program_name_descr_field}}"
                       data-item-id="{{$item_upgrade_program->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">Время проведения занятия (отображается в расписании)</label>
                <ul class="group-block group_container" data-block="dom_target_upgrade" data-group="target_program_schedule"
                    data-owner-id="{{$item_upgrade_program->id_field}}">
                    @foreach($item_upgrade_program->target_program_schedule_group as $schedule_item)
                        @include('back.blocks.groupitems.dom_target_upgrade.schedule')
                    @endforeach
                </ul>
                <button class="any_create" data-block="dom_target_upgrade" data-group="target_program_schedule"
                        data-descr="Эл. первой группы" data-owner-id="{{$item_upgrade_program->id_field}}"> Добавить
                </button>
            </div>
            <div class="field-wrap ">
                <label class="input-file">Преподаватели программы</label>
                    <ul class="group-block group_container" data-block="dom_target_upgrade" data-group="target_program_educators"
                        data-owner-id="{{$item_upgrade_program->id_field}}">
                        @foreach($item_upgrade_program->target_program_educators_group as $educators)
                            @include('back.blocks.groupitems.dom_target_upgrade.educators')
                        @endforeach
                    </ul>
                    <button class="any_create" data-block="dom_target_upgrade" data-group="target_program_educators"
                            data-descr="Эл. первой группы" data-owner-id="{{$item_upgrade_program->id_field}}"> Добавить
                    </button>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Описание программы
                </label>
                <textarea data-field-type="text" data-field-name="descr" data-block="dom_target_upgrade"
                          data-group="upgrade_program" class="input group_field"
                          data-item-id="{{$item_upgrade_program->id_field}}"
                          placeholder="Текст">{{$item_upgrade_program->descr_field}}</textarea>
            </div>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="dom_target_upgrade" data-group="upgrade_program"
                        data-entity="groupitem" data-item-id="{{$item_upgrade_program->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
            <ul class="group-block group_container" data-block="dom_target_upgrade" data-group="upgrade_program"
                data-owner-id="{{$item_upgrade_program->id_field}}">
                @foreach($item_upgrade_program->program_gall_group as $item_program_gall )
                    @include('back.blocks.groupitems.dom_target_upgrade.program_gall')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_target_upgrade" data-group="program_gall"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_upgrade_program->id_field}}"> Добавить
            </button>
        </div>
@endsection