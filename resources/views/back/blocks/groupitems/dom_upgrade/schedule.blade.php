<li class="group" data-group-id="{{$schedule_item->id_field}}">
    <div class="title-block">
        <label class="group-title">
            День недели и время проведения
        </label>
        <button type="button" class="any_delete" data-block="dom_upgrade" data-group="program_schedule"
                data-entity="groupitem" data-item-id="{{$schedule_item->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
    <div class="block">
        <div class="field-wrap ">
            <label class="input-file">Пояснение</label>
            <input type="text" data-field-type="string" data-field-name="day" data-block="dom_upgrade"
                   data-group="program_schedule" class="input group_field"
                   value="{{$schedule_item->day_field}}"
                   data-item-id="{{$schedule_item->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">День недели и время (д.н. • с чч:мм до чч:мм)</label>
            <input type="text" data-field-type="string" data-field-name="hour" data-block="dom_upgrade"
                   data-group="program_schedule" class="input group_field"
                   value="{{$schedule_item->hour_field}}"
                   data-item-id="{{$schedule_item->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons">
            <button type="button" class="any_save" data-block="dom_upgrade" data-group="program_schedule"
                    data-entity="groupitem" data-item-id="{{$schedule_item->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>