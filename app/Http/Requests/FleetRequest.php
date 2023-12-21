<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FleetRequest extends FormRequest
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
            'name' => 'required|max:200|unique:fleets',
            'description' => 'required',
            'alt'=>'required|max:200',
            'photo'=>'required|mimes:png,jpg,jpeg,webp|max:2048',
            'url' => 'required|unique:seos|max:200',
            'title' => 'required|max:200',
            'seo_description' => 'required'
        ];

        if ($this->method() == 'PUT') {
            $role['url'] = 'required|max:200|unique:seos,url,' . $this->fleet->seo->id;
            $role['photo']='sometimes|mimes:png,jpg,jpeg,webp|max:2048';
            $role['name']='required|max:200|unique:fleets,name,'.$this->fleet->id;
        }
        return $role;
    }
}
