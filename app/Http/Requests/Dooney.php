<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Dooney extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'requered|max:12|string',
             'discreption'=>'requered|max:30|string',
              'status'=>'requered',
              'add_by' =>'requered|numirec',
               'content'=>'requered|max:500|string',

        ];
    }
}
