<tr data-sorter="{{$item_upgrade_program->sorter_field}}" data-id="{{$item_upgrade_program->id_field}}">
    <td><a href="">{{$item_upgrade_program->name_field}}</a></td>
    <td></td>
    <td>
        <select class="publicated">
            @if( $item_upgrade_program->show_field)
                <option value="true" selected> Опубликовано</option>
                <option value="false">Не опубликовано</option>
            @else
                <option value="true"> Опубликовано</option>
                <option value="false" selected>Не опубликовано</option>
            @endif
        </select>
    </td>
    <td>
        <div class="sort_buttons">
            <div class="up-button"></div>
            <div class="down-button"></div>
        </div>
    </td>
    <td><a href="/adm/edit/upgrade_program/{{$item_upgrade_program->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_target_upgrade" data-group="upgrade_program"
                data-entity="groupitem" data-item-id="{{$item_upgrade_program->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
