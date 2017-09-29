<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class AdminPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //sometimes  添加此函数表示有此表单就进行验证，没有就不进行验证
        return [
            'password'=>'sometimes|required',
            'confirm_password'=>'sometimes|required',
            'original_password'=>'sometimes|required',
        ];
    }
    public function messages()
    {
       return [
           'original_password.required'=>'原密码不能为空！',
           'password.required'=>'新密码不能为空',
           'confirm_password.required'=>'两次密码不一致！',
       ];
    }
}
