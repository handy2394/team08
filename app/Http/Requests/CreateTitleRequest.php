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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:1|max:100',
            'gender' => 'required|string|min:1|max:2',
            'session' => 'required|numeric|min:1|max:100',
            'title' => 'required|string|min:2|max:2',
            'city' => 'required|string|min:3|max:3',
            'birthday' => 'required',
            'area' => 'required|string|min:2|max:3',
            'cellphone' =>'required|numeric',
            'address' => 'required',
            'website' => 'required',
            'tid' => 'required'
        ];
    }

    public function messages()
    {
      return
      [ 
             "name.required" => "議員名稱(必填)",
             "name.min" => "議員名稱 至少需1個字元",
             "gender.required" => "性別(必填)",
             "gender.min" => "性別 範圍介於1~2字元",
             "gender.max" => "性別 範圍介於1~2字元",
             "seassion.required" => "屆(必填)",
             "seassion.min" => "屆 至少1個字元",
             "title.required" => "職務(必填)",
             "title.min" => "職務 為2字元",
             "title.max" => "職務 為2字元",
             "city.required" => "縣市(必填)",
             "city.min" => "縣市 範圍介於2~3之間",
             "city.max" => "縣市 範圍介於2~3之間",
             "birthday" => "生日(必填)",
             "area.required" => "選區(必填)",
             "area.min" => '選區 範圍介於2~3之間',
             "area.max" => '選區 範圍介於2~3之間',
             "cellphone.required" => "電話(必填)",
             "address.required" => "通訊處地址(必填)",
             "website.required" => "個人網站(必填)",
             "tid.required"=>'政黨(必填)'
      ];
    }
}
