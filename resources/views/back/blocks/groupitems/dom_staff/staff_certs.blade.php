<li class="group" data-group-id="{{$item_staff_certs->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Сертификат
        </label>
        <button type="button" class="any_delete" data-block="dom_staff" data-group="staff_certs" data-entity="groupitem"
                data-item-id="{{$item_staff_certs->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
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
                        <input type="hidden" class="prefix" data-field-name="cert" data-group="staff_certs"
                               data-field-type="image" data-item-id="{{$item_staff_certs->id_field}}"
                               data-block="dom_staff" value="{{$item_staff_certs->cert_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="cert" data-group="staff_certs"
                               data-field-type="image" data-item-id="{{$item_staff_certs->id_field}}"
                               data-block="dom_staff" value="{{$item_staff_certs->cert_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="cert" data-group="staff_certs"
                               data-field-type="image" data-item-id="{{$item_staff_certs->id_field}}"
                               data-block="dom_staff" value="{{$item_staff_certs->cert_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="cert" data-group="staff_certs"
                               data-field-type="image" data-item-id="{{$item_staff_certs->id_field}}"
                               data-block="dom_staff" value="{{$item_staff_certs->cert_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="cert" data-group="staff_certs"
                               data-field-type="image" data-item-id="{{$item_staff_certs->id_field}}"
                               data-block="dom_staff" value="{{$item_staff_certs->cert_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="cert" data-group="staff_certs"
                               data-field-type="image" data-item-id="{{$item_staff_certs->id_field}}"
                               data-block="dom_staff" value="{{$item_staff_certs->cert_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_staff_certs->cert_image->preview_link}}" class="preview"
                             data-field-name="cert" data-block="dom_staff" data-group="staff_certs"
                             data-item-id="{{$item_staff_certs->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_staff_certs->cert_image->alt}}"
                               data-item-id="{{$item_staff_certs->id_field}}" data-field-name="cert"
                               data-block="dom_staff">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field" data-field-name="cert"
                                   data-field-type="image" data-block="dom_staff" data-group="staff_certs"
                                   data-item-id="{{$item_staff_certs->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="dom_staff" data-group="staff_certs"
                    data-entity="groupitem" data-item-id="{{$item_staff_certs->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>