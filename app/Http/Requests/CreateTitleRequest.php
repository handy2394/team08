<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTitleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:191',
            'gender' => 'required|string|min:1|max:2',
            'session' => 'nullable|numeric|min:1|max:999',
            'title' => 'required|string|min:2|max:191',
            'city' => 'required|string|min:2|max:191',
            'birthday' => 'required',
            'area' => 'required|string|min:2|max:191',
            'cellphone' => 'required|string|min:9|max:191',
            'address' => 'required|string|min:8|max:191',
            'website' => 'required|string|min:8|max:191',
            'tid' => 'required' 
            //
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "性名 為必填",
            "name.min" => "性名 至少需2個姓名",

            "gender.required" => "性別 為必填",
            "gender.min" => "性別 至少1個字",
            
            "session.required" => "屆 為必填",
            "session.min" => "屆 最小1屆",
            "session.max" => "屆 最大999屆",

            "title.required" => "民意代表 為必填",
            "title.min" => "民意代表 至少需2個姓名",

            "city.required" => "縣市 必須為數字",
            "city.min" => "縣市 至少2個字",

            "birthday.required" => "生日 為必填",

            "area.numeric" => "選區 為必填",
            "area.min" => "選區 至少2個字",
            
            "cellphone.required" => "電話 為必填",
            "cellphone.min" => "電話 至少9個字不含-",

            "address.required" => "通訊處 為必填",
            "address.min" => "通訊處 至少8個字不含-",

            "website.required" => "個人網站 為必填",

            "tid.required" => "黨派 為必填"
        ];
    }    
}
