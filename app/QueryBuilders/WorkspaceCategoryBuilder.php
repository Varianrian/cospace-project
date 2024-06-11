<?php

namespace App\QueryBuilders;

use App\Http\Requests\WorkspaceCategoryGetRequest;
use App\Models\WorkspaceCategory;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class WorkspaceCategoryBuilder extends Builder
{
    /**
     * Current HTTP Request object.
     *
     * @var WorkspaceCategoryGetRequest
     */
    protected $request;

    /**
     * WorkspaceCategoryBuilder constructor.
     *
     * @param WorkspaceCategoryGetRequest $request
     */
    public function __construct(WorkspaceCategoryGetRequest $request)
    {
        $this->request = $request;
        $this->builder = QueryBuilder::for(WorkspaceCategory::class, $request);
    }

    /**
     * Get a list of allowed columns that can be selected.
     *
     * @return string[]
     */
    protected function getAllowedFields(): array
    {
        return [
            'workspace_categories.id',
            'workspace_categories.name',
            'workspace_categories.description',
            'workspace_categories.created_at',
            'workspace_categories.updated_at',
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
            'description',
            AllowedFilter::exact('created_at'),
            AllowedFilter::exact('updated_at'),
            AllowedFilter::exact('workspace_categories.id'),
            'workspace_categories.name',
            'workspace_categories.description',
            AllowedFilter::exact('workspace_categories.created_at'),
            AllowedFilter::exact('workspace_categories.updated_at'),
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
            'workspaces',
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
            'description',
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
