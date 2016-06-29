<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
            "title" => "required|min:5|max:255",
            "body" => "required|min:5",
            "published_at" => "required|date"
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Masukkan :attributenya dongs',
            'min' => ':attribute minimal :min huruf'
        ];
    }
}
