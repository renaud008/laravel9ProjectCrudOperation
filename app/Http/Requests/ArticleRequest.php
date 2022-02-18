<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required|min:2|max:70',
            'subtitle'=>'required|min:5|max:255',
            'content'=>'required|min:5|max:255'
        ];
    }

    public function messages(){
        return [
            'title.required'=>'Vous devez préciser le titre',
            'title.min'=>'Au moins 5 caractères requis',
            'title.max'=>'70 caractères maximums',

            'subtitle.required'=>'Vous devez préciser le subtitle',
            'subtitle.min'=>'Au moins 5 caractères requis',
            'subtitle.max'=>'255 caractères maximums',

            'content.required'=>'Vous devez préciser le contenu',
            'content.min'=>'Au moins 5 caractères requis',
            'content.max'=>'255 caractères maximums',
        ];
    }
}
