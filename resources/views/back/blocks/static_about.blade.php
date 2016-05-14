@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Титульное изображение
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="head" data-field-type="image"
                               data-block="static_about" value="{{$static_about->head_image->prefix}}">
                        <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image"
                               data-block="static_about" value="{{$static_about->head_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image"
                               data-block="static_about" value="{{$static_about->head_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image"
                               data-block="static_about" value="{{$static_about->head_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image"
                               data-block="static_about" value="{{$static_about->head_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_about->head_image->preview_link}}" class="preview"
                             data-field-name="head" data-block="static_about">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_about->head_image->alt}}" data-field-name="head"
                               data-block="static_about">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="head" data-field-type="image" data-block="static_about">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст в шапке
            </label>
            <input type="text" data-field-type="string" data-field-name="question" data-block="static_about"
                   class="input block_field" value="{{$static_about->question_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Фото директора
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="director_face" data-field-type="image"
                               data-block="static_about" value="{{$static_about->director_face_image->prefix}}">
                        <input type="hidden" class="preview_link" data-field-name="director_face"
                               data-field-type="image" data-block="static_about"
                               value="{{$static_about->director_face_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="director_face"
                               data-field-type="image" data-block="static_about"
                               value="{{$static_about->director_face_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="director_face"
                               data-field-type="image" data-block="static_about"
                               value="{{$static_about->director_face_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="director_face" data-field-type="image"
                               data-block="static_about" value="{{$static_about->director_face_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_about->director_face_image->preview_link}}" class="preview"
                             data-field-name="director_face" data-block="static_about">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_about->director_face_image->alt}}" data-field-name="director_face"
                               data-block="static_about">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="director_face" data-field-type="image" data-block="static_about">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Имя директора
            </label>
            <input type="text" data-field-type="string" data-field-name="director_name" data-block="static_about"
                   class="input block_field" value="{{$static_about->director_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Должность
            </label>
            <input type="text" data-field-type="string" data-field-name="director_prof" data-block="static_about"
                   class="input block_field" value="{{$static_about->director_prof_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Слова директора о Бамбини
            </label>
            <textarea data-field-type="text" data-field-name="director_descr" data-block="static_about"
                      class="input block_field" placeholder="Текст">{{$static_about->director_descr_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок списка особенностей
            </label>
            <input type="text" data-field-type="string" data-field-name="feature_title" data-block="static_about"
                   class="input block_field" value="{{$static_about->feature_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">Список особенностей Бамбини
                <ul class="group-block group_container" data-block="static_about" data-group="features"
                    data-owner-id="0">
                    @foreach($static_about->features_group as $item_features )
                        @include('back.blocks.groupitems.static_about.features')
                    @endforeach
                </ul>
                <button class="any_create" data-block="static_about" data-group="features"
                        data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                </button>
            </label>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_about" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection