<?php

namespace App\QueryBuilders;

use App\Http\Requests\WorkspaceGetRequest;
use App\Models\Workspace;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class WorkspaceBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var WorkspaceGetRequest
     */
    protected $request;

    /**
     * WorkspaceBuilder constructor.
     *
     * @param WorkspaceGetRequest $request
     */
    public function __construct(WorkspaceGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(Workspace::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'workspaces.id',
            'workspaces.name',
            'workspaces.price',
            'workspaces.description',
            'workspaces.address',
            'workspaces.city',
            'workspaces.maps',
            'workspaces.rating_avg',
            'workspaces.rating_count',
            'workspaces.created_at',
            'workspaces.updated_at',
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
            'name',
            AllowedFilter::exact('price'),
            'description',
            'address',
            'city',
            'maps',
            AllowedFilter::exact('rating_avg'),
            AllowedFilter::exact('rating_count'),
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('workspaces.id'),
            'workspaces.name',
            AllowedFilter::exact('workspaces.price'),
            'workspaces.description',
            'workspaces.address',
            'workspaces.city',
            'workspaces.maps',
            AllowedFilter::exact('workspaces.rating_avg'),
            AllowedFilter::exact('workspaces.rating_count'),
            AllowedFilter::exact('workspaces.created_at'),
            AllowedFilter::exact('workspaces.updated_at'),
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
            'rooms',
            'facilities',
            'categories',
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
            'description',
            'address',
            'city',
            'maps',
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
            'name',
            'price',
            'description',
            'address',
            'city',
            'maps',
            'rating_avg',
            'rating_count',
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
