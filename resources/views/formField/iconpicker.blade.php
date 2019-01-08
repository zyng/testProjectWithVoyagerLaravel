<div class="input-group">
    {{--<input data-placement="bottomRight" class="form-control icp icp-auto c-iconpicker" value="fas fa-archive" --}} {{--type="text"
    />--}}

    <input autocomplete="off" type="text" class="form-control icp icp-auto c-iconpicker" name="{{ $row->field }}" data-name="{{ $row->display_name }}"
        @if($row->required == 1) required @endif step="any" placeholder="{{ isset($options->placeholder)? old($row->field,
    $options->placeholder): $row->display_name }}" value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field,
    $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif">
    <span class="input-group-addon"></span>
</div>