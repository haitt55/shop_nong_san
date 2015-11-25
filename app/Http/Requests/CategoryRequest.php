<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
        $this->merge(['active' => $this->input('active', 0)]);

        $rules = [
            'name' => 'required|max:255',
        ];
        if ($this->route('categories')) {
            $optionalRules = [
                'name' => 'unique:categories,name,' . $this->route('categories'),
            ];
        } else {
            $optionalRules = [
                'name' => 'unique:categories',
            ];
        }

        return array_merge($rules, $optionalRules);
    }
}