<?php

namespace App\Services;

use App\Services\Traits\Requestable;
use Illuminate\Database\Eloquent\Model;

class ResourceListingService
{
    use Requestable;

    const DEFAULT_LIMIT = 100;

    private $model;

    private $query;

    private $pagination = true;

    private $relations = [];

    private $filtrationFields = [];

    private $searchFields = [];

    /**
     * Method which init empty query
     * @param Model $model
     * @return $this
     */
    public function initQuery(Model $model)
    {
        $this->query = $model::query();

        return $this;
    }

    /**
     * Method which add relation to query
     * @param array $relations
     * @return $this
     */
    public function withRelations(array $relations)
    {
        $this->relations = $relations;

        return $this;
    }

    /**
     * This method turn off pagination
     * @return $this
     */
    public function withoutPagination()
    {
        $this->pagination = false;

        return $this;
    }

    /**
     * Method which paginate
     * @return $this
     */
    private function paginate()
    {
        $limit = (int) ($this->request->limit ?? self::DEFAULT_LIMIT);

        $page = (int) $this->request->page;
        $offset = $page * $limit - $limit;

        $this->query = $this->query->limit($limit)->skip($offset);

        return $this;
    }

    /**
     * Setter of the filtration fields
     * @param array $fields
     * @return $this
     */
    public function setFiltrationFields(array $fields)
    {
        $this->filtrationFields = $fields;

        return $this;
    }

    /**
     * Method which filtrate
     * @return $this
     */
    private function filtrate()
    {
        foreach ($this->request->filters as $key => $values) {
            if (in_array($key, $this->filtrationFields)) {
                if (is_array($values) && count($values) > 1) {
                    $this->query = $this->query->whereIn($key, $values);
                } else {
                    $this->query = $this->query->where($key, $values[0]);
                }
            }

        }

        return $this;
    }

    /**
     * Setter of the search fields
     * @param array $fields
     * @return $this
     */
    public function setSearchFields(array $fields)
    {
        $this->searchFields = $fields;

        return $this;
    }

    /**
     * Method which create search by provided filters
     * @return $this
     */
    private function search()
    {
        foreach ($this->searchFields as $field) {
            $value = "%" . $this->request->search . "%";
            $this->query = $this->query->orWhere($field, 'like', $value);
        }

        return $this;
    }

    /**
     * Reset query
     * @return $this
     */
    private function resetQuery()
    {
        $this->query = $this->query->newQuery();

        return $this;
    }

    /**
     * Method which create request to DB with all filtration, search, pagination, etc
     * @return mixed
     */
    public function getCollection()
    {
        if ($this->pagination) {
            $this->paginate();
        }

        if (!empty($this->relations)) {
            $this->query->with($this->relations);
        }

        if (!empty($this->filtrationFields) && $this->request->has('filters')) {
            $this->filtrate();
        }

        if (!empty($this->searchFields) && $this->request->has('search')) {
            $this->search();
        }

        $this->resetQuery();

        return $this->query->get();
    }
}
