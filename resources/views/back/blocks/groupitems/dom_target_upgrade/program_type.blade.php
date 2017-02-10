<li class="group" data-group-id="{{$item_program_type->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Группа программ
        </label>
        {{--<button type="button" class="any_delete" data-block="dom_target_upgrade" data-group="program_type"
                data-entity="groupitem" data-item-id="{{$item_program_type->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>--}}
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Изображение
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="type_pict" data-group="program_type"
                               data-field-type="image" data-item-id="{{$item_program_type->id_field}}"
                               data-block="dom_target_upgrade" value="{{$item_program_type->type_pict_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="type_pict" data-group="program_type"
                               data-field-type="image" data-item-id="{{$item_program_type->id_field}}"
                               data-block="dom_target_upgrade" value="{{$item_program_type->type_pict_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="type_pict" data-group="program_type"
                               data-field-type="image" data-item-id="{{$item_program_type->id_field}}"
                               data-block="dom_target_upgrade"
                               value="{{$item_program_type->type_pict_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="type_pict" data-group="program_type"
                               data-field-type="image" data-item-id="{{$item_program_type->id_field}}"
                               data-block="dom_target_upgrade"
                               value="{{$item_program_type->type_pict_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="type_pict"
                               data-group="program_type" data-field-type="image"
                               data-item-id="{{$item_program_type->id_field}}" data-block="dom_target_upgrade"
                               value="{{$item_program_type->type_pict_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="type_pict" data-group="program_type"
                               data-field-type="image" data-item-id="{{$item_program_type->id_field}}"
                               data-block="dom_target_upgrade"
                               value="{{$item_program_type->type_pict_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_program_type->type_pict_image->preview_link}}" class="preview"
                             data-field-name="type_pict" data-block="dom_target_upgrade" data-group="program_type"
                             data-item-id="{{$item_program_type->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_program_type->type_pict_image->alt}}"
                               data-item-id="{{$item_program_type->id_field}}" data-field-name="type_pict"
                               data-block="dom_target_upgrade">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field"
                                   data-field-name="type_pict" data-field-type="image" data-block="dom_target_upgrade"
                                   data-group="program_type" data-item-id="{{$item_program_type->id_field}}"
                                   data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Название группы программ
            </label>
            <input type="text" data-field-type="string" data-field-name="type_name" data-block="dom_target_upgrade"
                   data-group="program_type" class="input group_field" value="{{$item_program_type->type_name_field}}"
                   data-item-id="{{$item_program_type->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Описание группы
            </label>
            <input type="text" data-field-type="string" data-field-name="type_descr" data-block="dom_target_upgrade"
                   data-group="program_type" class="input group_field" value="{{$item_program_type->type_descr_field}}"
                   data-item-id="{{$item_program_type->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Программы
            </label>
            <table>
                <thead>
                <tr>
                    <td>Название</td>
                    <td></td>
                    {{--<td>Публикации</td>
                    <td>Сортировка</td>--}}
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_target_upgrade" data-group="upgrade_program"
                       data-owner-id="{{$item_program_type->id_field}}">
                @foreach($item_program_type->upgrade_program_group as $item_upgrade_program )
                    @include('back.blocks.groupitems.dom_target_upgrade.upgrade_program')
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    {{--<td></td>
                    <td></td>--}}
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_target_upgrade" data-group="upgrade_program"
                                data-descr="Эл. первой группы" data-owner-id="{{$item_program_type->id_field}}"> Добавить
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="dom_target_upgrade" data-group="program_type"
                    data-entity="groupitem" data-item-id="{{$item_program_type->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>