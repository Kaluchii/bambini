<li class="group" data-group-id="{{$educators->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Преподаватель
        </label>
        <button type="button" class="any_delete" data-block="dom_upgrade" data-group="program_educators"
                data-entity="groupitem" data-item-id="{{$educators->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
    <div class="block">
        <div class="field-wrap">
            <select data-field-name="educator_id"
                    data-field-type="numb"
                    data-block="dom_upgrade" data-group="program_educators" class="input group_field"
                    data-item-id="{{$educators->id_field}}">
                @foreach($staff->staff_list_group as $item)
                    @if($item->id_field  == $educators->educator_id_field)
                        <option value="{{$item->id_field}}" selected>
                            {{$item->name_field}}
                        </option>
                    @else
                        <option value="{{$item->id_field}}">
                            {{$item->name_field}}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="field-wrap buttons">
            <button type="button" class="any_save" data-block="dom_upgrade" data-group="program_educators"
                    data-entity="groupitem" data-item-id="{{$educators->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>