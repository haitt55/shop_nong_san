<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class IntroducePolicyRequest extends Request
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
        $this->merge(['published' => $this->input('published', 0)]);
        
        return [
            'title' => 'required|max:255',
        ];
    }
}
