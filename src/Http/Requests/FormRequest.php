<?php
namespace TypiCMS\Modules\Tags\Http\Requests;

use TypiCMS\Http\Requests\AbstractFormRequest;

class FormRequest extends AbstractFormRequest {

    public function rules()
    {
        $rules = [
            'tag'  => 'required',
            'slug' => 'required|alpha_dash',
        ];
        return $rules;
    }
}