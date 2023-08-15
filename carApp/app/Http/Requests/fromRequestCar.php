<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class fromRequestCar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'marque'=>['required','min:2'],
            'modele'=>['required'],
            'couleur'=>['required','min:2'],
            'slug'=>['required','min:8','regex:/^[0-9a-z\-]+$/',Rule::unique('cars')->ignore($this->route()->parameter('car'))]

        ];
    }
    public function prepareForValidation(){
        $slug = Str::slug(
            $this->input('marque') . '-' .
            $this->input('modele') . '-' .
            $this->input('couleur')
        );

        $this->merge([
            'slug' => $this->input('slug') ?: $slug
        ]);
    }


}
