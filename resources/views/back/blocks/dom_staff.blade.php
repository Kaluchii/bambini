@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="dom_staff"
                   class="input block_pre_field" value="{{$dom_staff->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <table>
                <thead>
                <tr>
                    <td>Название</td>
                    <td></td>
                    <td>Публикации</td>
                    <td>Сортировка</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_staff" data-group="staff_list"
                       data-owner-id="0">
                @foreach($dom_staff->staff_list_group as $item_staff_list )
                    @include('back.blocks.groupitems.dom_staff.staff_list')
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_staff" data-group="staff_list"
                                data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="dom_staff" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection