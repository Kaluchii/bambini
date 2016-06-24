@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Логотип
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="logo" data-field-type="image"
                               data-block="static_all_site" value="{{$static_all_site->logo_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="logo" data-field-type="image"
                               data-block="static_all_site" value="{{$static_all_site->logo_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="logo" data-field-type="image"
                               data-block="static_all_site" value="{{$static_all_site->logo_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="logo" data-field-type="image"
                               data-block="static_all_site" value="{{$static_all_site->logo_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="logo" data-field-type="image"
                               data-block="static_all_site" value="{{$static_all_site->logo_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="logo" data-field-type="image"
                               data-block="static_all_site" value="{{$static_all_site->logo_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_all_site->logo_image->preview_link}}" class="preview"
                             data-field-name="logo" data-block="static_all_site">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_all_site->logo_image->alt}}" data-field-name="logo"
                               data-block="static_all_site">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="logo" data-field-type="image" data-block="static_all_site">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Девиз
            </label>
            <input type="text" data-field-type="string" data-field-name="logo_descr" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->logo_descr_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Городской телефон
            </label>
            <input type="text" data-field-type="string" data-field-name="landline_phone" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->landline_phone_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Сотовый телефон
            </label>
            <input type="text" data-field-type="string" data-field-name="phone" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->phone_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Ссылка на карту
            </label>
            <input type="text" data-field-type="string" data-field-name="map_link" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->map_link_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Copyright
            </label>
            <input type="text" data-field-type="string" data-field-name="copy" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->copy_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст в футере
            </label>
            <input type="text" data-field-type="string" data-field-name="tell_everyone" data-block="static_all_site"
                   class="input block_field" value="{{$static_all_site->tell_everyone_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_all_site" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection