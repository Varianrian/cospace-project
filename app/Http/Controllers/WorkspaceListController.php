<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkspaceSaveRequest;
use App\Http\Resources\WorkspaceCollection;
use App\Http\Resources\WorkspaceResource;
use App\Models\Workspace;
use App\QueryBuilders\WorkspaceBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Workspace Management
 *
 * API Endpoints for managing workspaces.
 */
class WorkspaceListController extends Controller
{
    /**
     * Resource Collection.
     * Display a collection of the workspace resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[workspaces] *string* - No-example
     * Comma-separated field/attribute names of the workspace resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `price`, `description`, `address`, `city`, `maps`, `rating_avg`, `rating_count`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `workspaceFacilities`, `workspaceRooms`, `facilities`, `workspaceCategories`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `name`, `price`, `description`, `address`, `city`, `maps`, `rating_avg`, `rating_count`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `name`, `price`, `description`, `address`, `city`, `maps`, `rating_avg`, `rating_count`, `created_at`, `updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\WorkspaceBuilder $query
     *
     * @return WorkspaceCollection
     */
    public function index(WorkspaceBuilder $query): WorkspaceCollection
    {
        return new WorkspaceCollection($query->paginate());
    }

    /**
     * Show Resource.
     * Display a specific workspace resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam workspace required *integer* - No-example
     * The identifier of a specific workspace resource.
     *
     * @queryParam fields[workspaces] *string* - No-example
     * Comma-separated field/attribute names of the workspace resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `price`, `description`, `address`, `city`, `maps`, `rating_avg`, `rating_count`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `workspaceFacilities`, `workspaceRooms`, `facilities`, `workspaceCategories`.
     *
     * @param \App\QueryBuilders\WorkspaceBuilder $query
     * @param \App\Models\Workspace $workspace
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return WorkspaceResource
     */
    public function show(WorkspaceBuilder $query, Workspace $workspace): WorkspaceResource
    {
        return new WorkspaceResource($query->find($workspace->getKey()));
    }
}
