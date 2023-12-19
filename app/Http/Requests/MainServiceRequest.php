<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {


        $role = [
            'name' => 'required|unique:main_services|max:200',
            'description' => 'required',
            'url' => 'required|unique:seos|max:200',
            'title' => 'required|max:200',
            'seo_description' => 'required'
        ];

        if ($this->method() == 'PUT') {
            $role['name'] = 'required|max:200|unique:main_services,id,'. $this->main_service->id;
            $role['url'] = 'required|max:200|unique:seos,url,' . $this->main_service->seo->id;
        }
        return $role;
    }
}
