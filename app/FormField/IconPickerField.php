<?php

namespace App\FormField;

use TCG\Voyager\FormFields\AbstractHandler;

class IconPickerField extends AbstractHandler
{
    protected $codename = 'Icon Picker';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formField.iconpicker', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}