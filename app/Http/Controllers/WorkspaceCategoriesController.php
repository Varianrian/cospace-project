<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkspaceCategorySaveRequest;
use App\Http\Resources\WorkspaceCategoryCollection;
use App\Http\Resources\WorkspaceCategoryResource;
use App\Models\WorkspaceCategory;
use App\QueryBuilders\WorkspaceCategoryBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Workspace Category Management
 *
 * API Endpoints for managing workspace categories.
 */
class WorkspaceCategoriesController extends Controller
{
    /**
     * Resource Collection.
     * Display a collection of the workspace category resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[workspace_categories] *string* - No-example
     * Comma-separated field/attribute names of the workspace_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `description`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `workspaceRooms`, `workspaces`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `name`, `description`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `name`, `description`, `created_at`, `updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\WorkspaceCategoryBuilder $query
     *
     * @return WorkspaceCategoryCollection
     */
    public function index(WorkspaceCategoryBuilder $query): WorkspaceCategoryCollection
    {
        return new WorkspaceCategoryCollection($query->paginate());
    }

    /**
     * Show Resource.
     * Display a specific workspace category resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam workspaceCategory required *integer* - No-example
     * The identifier of a specific workspace category resource.
     *
     * @queryParam fields[workspace_categories] *string* - No-example
     * Comma-separated field/attribute names of the workspace_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `description`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `workspaceRooms`, `workspaces`.
     *
     * @param \App\QueryBuilders\WorkspaceCategoryBuilder $query
     * @param \App\Models\WorkspaceCategory $workspaceCategory
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return WorkspaceCategoryResource
     */
    public function show(WorkspaceCategoryBuilder $query, WorkspaceCategory $workspaceCategory): WorkspaceCategoryResource
    {
        return new WorkspaceCategoryResource($query->find($workspaceCategory->getKey()));
    }
}
