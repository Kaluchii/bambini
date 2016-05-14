@extends('back.layout')
@section('content')
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                    Название страницы
                </label>
                <input type="text" data-field-type="string" data-field-name="name" data-block="dom_upgrade"
                       data-group="upgrade_programs" class="input group_field"
                       value="{{$item_upgrade_programs->name_field}}"
                       data-item-id="{{$item_upgrade_programs->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Вид ссылки в адресной строке
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_upgrade"
                       data-group="upgrade_programs" class="input group_pre_field"
                       value="{{$item_upgrade_programs->slug_field}}"
                       data-item-id="{{$item_upgrade_programs->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Титульное изображение
                </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="upgrade_program"
                                   data-group="upgrade_programs" data-field-type="image"
                                   data-item-id="{{$item_upgrade_programs->id_field}}" data-block="dom_upgrade"
                                   value="{{$item_upgrade_programs->upgrade_program_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="upgrade_program"
                                   data-group="upgrade_programs" data-field-type="image"
                                   data-item-id="{{$item_upgrade_programs->id_field}}" data-block="dom_upgrade"
                                   value="{{$item_upgrade_programs->upgrade_program_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="upgrade_program"
                                   data-group="upgrade_programs" data-field-type="image"
                                   data-item-id="{{$item_upgrade_programs->id_field}}" data-block="dom_upgrade"
                                   value="{{$item_upgrade_programs->upgrade_program_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="upgrade_program"
                                   data-group="upgrade_programs" data-field-type="image"
                                   data-item-id="{{$item_upgrade_programs->id_field}}" data-block="dom_upgrade"
                                   value="{{$item_upgrade_programs->upgrade_program_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="upgrade_program"
                                   data-group="upgrade_programs" data-field-type="image"
                                   data-item-id="{{$item_upgrade_programs->id_field}}" data-block="dom_upgrade"
                                   value="{{$item_upgrade_programs->upgrade_program_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="upgrade_program"
                                   data-group="upgrade_programs" data-field-type="image"
                                   data-item-id="{{$item_upgrade_programs->id_field}}" data-block="dom_upgrade"
                                   value="{{$item_upgrade_programs->upgrade_program_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_upgrade_programs->upgrade_program_image->preview_link}}"
                                 class="preview" data-field-name="upgrade_program" data-block="dom_upgrade"
                                 data-group="upgrade_programs" data-item-id="{{$item_upgrade_programs->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_upgrade_programs->upgrade_program_image->alt}}"
                                   data-item-id="{{$item_upgrade_programs->id_field}}" data-field-name="upgrade_program"
                                   data-block="dom_upgrade">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="upgrade_program" data-field-type="image"
                                       data-block="dom_upgrade" data-group="upgrade_programs"
                                       data-item-id="{{$item_upgrade_programs->id_field}}" data-entity="groupitem">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Название программы
                </label>
                <input type="text" data-field-type="string" data-field-name="program_name" data-block="dom_upgrade"
                       data-group="upgrade_programs" class="input group_field"
                       value="{{$item_upgrade_programs->program_name_field}}"
                       data-item-id="{{$item_upgrade_programs->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Описание
                </label>
                <textarea data-field-type="text" data-field-name="descr" data-block="dom_upgrade"
                          data-group="upgrade_programs" class="input group_field"
                          data-item-id="{{$item_upgrade_programs->id_field}}"
                          placeholder="Текст">{{$item_upgrade_programs->descr_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Описание программы на главной странице
                </label>
                <textarea data-field-type="text" data-field-name="preview_descr" data-block="dom_upgrade"
                          data-group="upgrade_programs" class="input group_field"
                          data-item-id="{{$item_upgrade_programs->id_field}}"
                          placeholder="Текст">{{$item_upgrade_programs->preview_descr_field}}</textarea>
            </div>
            <ul class="group-block group_container" data-block="dom_upgrade" data-group="upgrade_programs"
                data-owner-id="{{$item_upgrade_programs->id_field}}">
                @foreach($item_upgrade_programs->program_gallery_group as $item_program_gallery )
                    @include('back.blocks.groupitems.dom_upgrade.program_gallery')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_upgrade" data-group="program_gallery"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_upgrade_programs->id_field}}"> Добавить
            </button>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="dom_upgrade" data-group="upgrade_programs"
                        data-entity="groupitem" data-item-id="{{$item_upgrade_programs->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
@endsection