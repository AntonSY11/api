<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourceListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * Boolean values of the filters provide as 1, 0
     * @return array
     */
    public function rules()
    {
        return [
            'search' => 'string',
            'filters' => 'array',
            'page' => 'integer',
            'limit' => 'integer'
        ];
    }
}

/**
 * @apiDefine ResourceListingRequest
 * @apiParam {String} [search] Search param
 * @apiParam {Array} [filters] Filters param
 * @apiParam {Integer} [page] Page param
 * @apiParam {Integer} [limit] Limit param
 */
