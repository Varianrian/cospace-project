<?php

namespace App\QueryBuilders;

use App\Http\Requests\WorkspaceRoomGetRequest;
use App\Models\WorkspaceRoom;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class WorkspaceRoomBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var WorkspaceRoomGetRequest
     */
    protected $request;

    /**
     * WorkspaceRoomBuilder constructor.
     *
     * @param WorkspaceRoomGetRequest $request
     */
    public function __construct(WorkspaceRoomGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(WorkspaceRoom::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'workspace_rooms.id',
            'workspace_rooms.workspace_id',
            'workspace_rooms.name',
            'workspace_rooms.price',
            'workspace_rooms.capacity',
            'workspace_rooms.workspace_category_id',
            'workspace_rooms.created_at',
            'workspace_rooms.updated_at',
            'workspace.id',
            'workspace.name',
            'workspace.price',
            'workspace.description',
            'workspace.address',
            'workspace.city',
            'workspace.maps',
            'workspace.rating_avg',
            'workspace.rating_count',
            'workspace.created_at',
            'workspace.updated_at',
            'workspaceCategory.id',
            'workspaceCategory.name',
            'workspaceCategory.description',
            'workspaceCategory.created_at',
            'workspaceCategory.updated_at',
        ];
    }

    /**
     * Get a list of allowed columns that can be used in any filter operations.
     *
     * @return array
     */
    protected function getAllowedFilters(): array
    {
        return [
            AllowedFilter::exact('id'),
            AllowedFilter::exact('workspace_id'),
            'name',
            AllowedFilter::exact('price'),
            AllowedFilter::exact('capacity'),
            AllowedFilter::exact('workspace_category_id'),
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('workspace_rooms.id'),
            AllowedFilter::exact('workspace_rooms.workspace_id'),
            'workspace_rooms.name',
            AllowedFilter::exact('workspace_rooms.price'),
            AllowedFilter::exact('workspace_rooms.capacity'),
            AllowedFilter::exact('workspace_rooms.workspace_category_id'),
            AllowedFilter::exact('workspace_rooms.created_at'),
            AllowedFilter::exact('workspace_rooms.updated_at'),
            AllowedFilter::exact('workspace.id'),
            'workspace.name',
            AllowedFilter::exact('workspace.price'),
            'workspace.description',
            'workspace.address',
            'workspace.city',
            'workspace.maps',
            AllowedFilter::exact('workspace.rating_avg'),
            AllowedFilter::exact('workspace.rating_count'),
            AllowedFilter::exact('workspace.created_at'),
            AllowedFilter::exact('workspace.updated_at'),
            AllowedFilter::exact('workspaceCategory.id'),
            'workspaceCategory.name',
            'workspaceCategory.description',
            AllowedFilter::exact('workspaceCategory.created_at'),
            AllowedFilter::exact('workspaceCategory.updated_at'),
        ];
    }

    /**
     * Get a list of allowed relationships that can be used in any include operations.
     *
     * @return string[]
     */
    protected function getAllowedIncludes(): array
    {
        return [
            'workspace',
            'workspaceCategory',
            'reviews',
            'users',
        ];
    }

    /**
     * Get a list of allowed searchable columns which can be used in any search operations.
     *
     * @return string[]
     */
    protected function getAllowedSearch(): array
    {
        return [
            'name',
            'workspace.name',
            'workspace.description',
            'workspace.address',
            'workspace.city',
            'workspace.maps',
            'workspaceCategory.name',
            'workspaceCategory.description',
        ];
    }

    /**
     * Get a list of allowed columns that can be used in any sort operations.
     *
     * @return string[]
     */
    protected function getAllowedSorts(): array
    {
        return [
            'id',
            'workspace_id',
            'name',
            'price',
            'capacity',
            'workspace_category_id',
            'created_at',
            'updated_at',
        ];
    }

    /**
     * Get the default sort column that will be used in any sort operation.
     *
     * @return string
     */
    protected function getDefaultSort(): string
    {
        return 'id';
    }
}
