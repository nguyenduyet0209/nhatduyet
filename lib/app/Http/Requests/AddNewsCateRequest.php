<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewsCateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            //
            'name'=>'unique:vp_newscategories,newscate_name'
        ];
    }
    public function message(){
        return [
            'name.unique'=> 'Tên danh mục đã tồn tại'
        ];
    }
}
