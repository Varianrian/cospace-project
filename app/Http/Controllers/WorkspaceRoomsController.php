<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkspaceRoomSaveRequest;
use App\Http\Resources\WorkspaceRoomCollection;
use App\Http\Resources\WorkspaceRoomResource;
use App\Models\WorkspaceRoom;
use App\QueryBuilders\WorkspaceRoomBuilder;
use Illuminate\Http\JsonResponse;

/**
 * @group Workspace Room Management
 *
 * API Endpoints for managing workspace rooms.
 */
class WorkspaceRoomsController extends Controller
{
    /**
     * Resource Collection.
     * Display a collection of the workspace room resources in paginated document format.
     *
     * @authenticated
     *
     * @queryParam fields[workspace_rooms] *string* - No-example
     * Comma-separated field/attribute names of the workspace_room resource to include in the response document.
     * The available fields for current endpoint are: `id`, `workspace_id`, `name`, `price`, `capacity`, `workspace_category_id`, `created_at`, `updated_at`.
     * @queryParam fields[workspace] *string* - No-example
     * Comma-separated field/attribute names of the workspace resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `price`, `description`, `address`, `city`, `maps`, `rating_avg`, `rating_count`, `created_at`, `updated_at`.
     * @queryParam fields[workspaceCategory] *string* - No-example
     * Comma-separated field/attribute names of the workspace_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `description`, `created_at`, `updated_at`.
     * @queryParam page[size] *integer* - No-example
     * Describe how many records to display in a collection.
     * @queryParam page[number] *integer* - No-example
     * Describe the number of current page to display.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `workspace`, `workspaceCategory`, `reviews`, `users`.
     * @queryParam sort *string* - No-example
     * Field/attribute to sort the resources in response document by.
     * The available fields for sorting operation in current endpoint are: `id`, `workspace_id`, `name`, `price`, `capacity`, `workspace_category_id`, `created_at`, `updated_at`.
     * @queryParam filter[`filterName`] *string* - No-example
     * Filter the resources by specifying *attribute name* or *query scope name*.
     * The available filters for current endpoint are: `id`, `workspace_id`, `name`, `price`, `capacity`, `workspace_category_id`, `created_at`, `updated_at`, `workspace.id`, `workspace.name`, `workspace.price`, `workspace.description`, `workspace.address`, `workspace.city`, `workspace.maps`, `workspace.rating_avg`, `workspace.rating_count`, `workspace.created_at`, `workspace.updated_at`, `workspaceCategory.id`, `workspaceCategory.name`, `workspaceCategory.description`, `workspaceCategory.created_at`, `workspaceCategory.updated_at`.
     * @qeuryParam search *string* - No-example
     * Filter the resources by specifying any keyword to search.
     *
     * @param \App\QueryBuilders\WorkspaceRoomBuilder $query
     *
     * @return WorkspaceRoomCollection
     */
    public function index(WorkspaceRoomBuilder $query): WorkspaceRoomCollection
    {
        return new WorkspaceRoomCollection($query->paginate());
    }

    /**
     * Show Resource.
     * Display a specific workspace room resource identified by the given id/key.
     *
     * @authenticated
     *
     * @urlParam workspaceRoom required *integer* - No-example
     * The identifier of a specific workspace room resource.
     *
     * @queryParam fields[workspace_rooms] *string* - No-example
     * Comma-separated field/attribute names of the workspace_room resource to include in the response document.
     * The available fields for current endpoint are: `id`, `workspace_id`, `name`, `price`, `capacity`, `workspace_category_id`, `created_at`, `updated_at`.
     * @queryParam fields[workspace] *string* - No-example
     * Comma-separated field/attribute names of the workspace resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `price`, `description`, `address`, `city`, `maps`, `rating_avg`, `rating_count`, `created_at`, `updated_at`.
     * @queryParam fields[workspaceCategory] *string* - No-example
     * Comma-separated field/attribute names of the workspace_category resource to include in the response document.
     * The available fields for current endpoint are: `id`, `name`, `description`, `created_at`, `updated_at`.
     * @queryParam include *string* - No-example
     * Comma-separated relationship names to include in the response document.
     * The available relationships for current endpoint are: `workspace`, `workspaceCategory`, `reviews`, `users`.
     *
     * @param \App\QueryBuilders\WorkspaceRoomBuilder $query
     * @param \App\Models\WorkspaceRoom $workspaceRoom
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return WorkspaceRoomResource
     */
    public function show(WorkspaceRoomBuilder $query, WorkspaceRoom $workspaceRoom): WorkspaceRoomResource
    {
        return new WorkspaceRoomResource($query->find($workspaceRoom->getKey()));
    }
}
