@extends('back.layout')
@section('content')
<div class="block ">
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="title" data-block="dom_staff" class="input block_pre_field" value="{{$dom_staff->title_field}}" placeholder="Заголовок">
</div>
<div class="field-wrap ">
<label class="input-file">
<ul class="group-block group_container" data-block="dom_staff" data-group="staff_list" data-owner-id="0">
@foreach($dom_staff->staff_list_group as $item_staff_list )
@include('back.blocks.groupitems.dom_staff.staff_list')
@endforeach
</ul>
  <button class="any_create" data-block="dom_staff" data-group="staff_list"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
</label>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="dom_staff" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection