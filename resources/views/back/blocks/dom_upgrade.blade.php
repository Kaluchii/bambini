@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="dom_upgrade"
                   class="input block_pre_field" value="{{$dom_upgrade->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Список программ
            </label>
            <table>
                <thead>
                <tr>
                    <td>Название</td>
                    <td></td>
                    {{--<td>Публикации</td>
                    <td>Сортировка</td>--}}
                    <td>Редактировать</td>
                    {{--<td>Удалить</td>--}}
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_upgrade" data-group="upgrade_programs"
                       data-owner-id="0">
                @foreach($dom_upgrade->upgrade_programs_group as $item_upgrade_programs )
                    @include('back.blocks.groupitems.dom_upgrade.upgrade_programs')
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    {{--<td></td>
                    <td></td>--}}
                    <td></td>
                    {{--<td>
                        <button class="any_create" data-block="dom_upgrade" data-group="upgrade_programs"
                                data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                        </button>
                    </td>--}}
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="dom_upgrade" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection