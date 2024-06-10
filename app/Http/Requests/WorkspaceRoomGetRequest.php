<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkspaceRoomGetRequest extends FormRequest
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
            'filter.workspace_id' => 'integer|between:0,18446744073709551615',
            'filter.name' => 'string|min:2|max:255',
            'filter.price' => 'integer|between:-2147483647,2147483647',
            'filter.capacity' => 'integer|between:-2147483647,2147483647',
            'filter.workspace_category_id' => 'integer|between:0,18446744073709551615',
            'filter.created_at' => 'date',
            'filter.updated_at' => 'date',
            'filter.workspace_rooms\.id' => 'integer|between:0,18446744073709551615',
            'filter.workspace_rooms\.workspace_id' => 'integer|between:0,18446744073709551615',
            'filter.workspace_rooms\.name' => 'string|min:2|max:255',
            'filter.workspace_rooms\.price' => 'integer|between:-2147483647,2147483647',
            'filter.workspace_rooms\.capacity' => 'integer|between:-2147483647,2147483647',
            'filter.workspace_rooms\.workspace_category_id' => 'integer|between:0,18446744073709551615',
            'filter.workspace_rooms\.created_at' => 'date',
            'filter.workspace_rooms\.updated_at' => 'date',
            'filter.workspace\.id' => 'integer|between:0,18446744073709551615',
            'filter.workspace\.name' => 'string|min:2|max:255',
            'filter.workspace\.price' => 'integer|between:-2147483647,2147483647',
            'filter.workspace\.description' => 'string|min:2|max:65535',
            'filter.workspace\.address' => 'string|min:2|max:255',
            'filter.workspace\.city' => 'string|min:2|max:255',
            'filter.workspace\.maps' => 'string|min:2|max:65535',
            'filter.workspace\.rating_avg' => 'integer|between:-2147483647,2147483647',
            'filter.workspace\.rating_count' => 'integer|between:-2147483647,2147483647',
            'filter.workspace\.created_at' => 'date',
            'filter.workspace\.updated_at' => 'date',
            'filter.workspaceCategory\.id' => 'integer|between:0,18446744073709551615',
            'filter.workspaceCategory\.name' => 'string|min:2|max:255',
            'filter.workspaceCategory\.description' => 'string|min:2|max:65535',
            'filter.workspaceCategory\.created_at' => 'date',
            'filter.workspaceCategory\.updated_at' => 'date',
            'page.number' => 'integer|min:1',
            'page.size' => 'integer|between:1,100',
            'search' => 'nullable|string|min:3|max:60',
        ];
    }
}
