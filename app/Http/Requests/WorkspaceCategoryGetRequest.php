<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkspaceCategoryGetRequest extends FormRequest
{
    /**
     * Determine if the current user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
//        return (auth()->guard('api')->check() || auth()->guard('cms-api')->check());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'filter.id' => 'integer|between:0,18446744073709551615',
            'filter.name' => 'string|min:2|max:255',
            'filter.description' => 'string|min:2|max:65535',
            'filter.created_at' => 'date',
            'filter.updated_at' => 'date',
            'filter.workspace_categories\.id' => 'integer|between:0,18446744073709551615',
            'filter.workspace_categories\.name' => 'string|min:2|max:255',
            'filter.workspace_categories\.description' => 'string|min:2|max:65535',
            'filter.workspace_categories\.created_at' => 'date',
            'filter.workspace_categories\.updated_at' => 'date',
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:1,100',
            'search' => 'nullable|string|min:3|max:60',
        ];
    }
}
