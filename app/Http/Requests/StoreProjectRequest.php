<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:200|min:5',
            'content' =>'nullable|min:8',
            'cover' =>'required|max:255|min:4',
            'link' =>'required|max:255|min:4',
            'source' =>'required|max:255|min:4',
        
    ];
    }
}
