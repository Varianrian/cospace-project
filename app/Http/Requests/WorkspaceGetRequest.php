<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkspaceGetRequest extends FormRequest
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
            'filter.price' => 'integer|between:-2147483647,2147483647',
            'filter.description' => 'string|min:2|max:65535',
            'filter.address' => 'string|min:2|max:255',
            'filter.city' => 'string|min:2|max:255',
            'filter.maps' => 'string|min:2|max:65535',
            'filter.rating_avg' => 'integer|between:-2147483647,2147483647',
            'filter.rating_count' => 'integer|between:-2147483647,2147483647',
            'filter.created_at' => 'date',
            'filter.updated_at' => 'date',
            'filter.workspaces\.id' => 'integer|between:0,18446744073709551615',
            'filter.workspaces\.name' => 'string|min:2|max:255',
            'filter.workspaces\.price' => 'integer|between:-2147483647,2147483647',
            'filter.workspaces\.description' => 'string|min:2|max:65535',
            'filter.workspaces\.address' => 'string|min:2|max:255',
            'filter.workspaces\.city' => 'string|min:2|max:255',
            'filter.workspaces\.maps' => 'string|min:2|max:65535',
            'filter.workspaces\.rating_avg' => 'integer|between:-2147483647,2147483647',
            'filter.workspaces\.rating_count' => 'integer|between:-2147483647,2147483647',
            'filter.workspaces\.created_at' => 'date',
            'filter.workspaces\.updated_at' => 'date',
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:1,100',
            'search' => 'nullable|string|min:3|max:60',
        ];
    }
}
