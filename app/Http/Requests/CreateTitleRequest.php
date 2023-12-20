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
            'name' => 'required|string|min:2|max:191',
            'gender' => 'required|string|min:1|max:191',
            'session' => 'required|numeric|min:1|max:112',
            'title' => 'required|string|min:2|max:191',
            'city' => 'required|string|min:2|max:191',
            'birthday' => 'nullable',
            'area' => 'required|string|min:2|max:191',
            'cellphone' => 'required|numeric|min:0000000|max:99999999999999999',
            'address' => 'required|string|min:2|max:191',
            'website' => 'required|string|min:2|max:191',
            'tid' => 'required' 
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "民意代表名稱 為必填",
            "name.min" => "民意代表名稱 至少需2個字元",
            "gender.required" => "性別位置 為必填",
            "session.required" => "屆次位置 為必填",
            "session.min" => "屆次位置 範圍必須介於1~112之間",
            "session.max" => "屆次位置 範圍必須介於1~112之間",
            "title.required" => "民意代表位置 為必填",
            "title.min" => "民意代表位置 至少需2個字元",
            "city.required" => "城市位置 為必填",
            "area.required" => "選區位置 為必填",
            "cellphone.required" => "民意代表電話位置 為必填",
            "cellphone.numeric" => "民意代表電話 必須為數字",
            "cellphone.min" => "民意代表電話 至少輸入7個數字",
            "address.required" => "通訊處位置 為必填",
            "website.required" => "個人網站位置 為必填",
            "tid.required" => "政黨編號 為必填",
        ];
    }    
}
