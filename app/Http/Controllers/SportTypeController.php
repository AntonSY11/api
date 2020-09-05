<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceListingRequest;
use App\Models\SportType;
use App\Services\ResourceListingService;
use App\Http\Resources\SportType as SportTypeResource;

class SportTypeController extends Controller
{
    /**
     * @api {get} sport-types List of sport-types
     * @apiGroup Sport_Types
     * @apiUse ResourceListingRequest
     * @apiSuccess {SportType[]} Array of the "SportType" object
     * @apiUse SportTypeResource
     * @param ResourceListingRequest $request
     * @param ResourceListingService $listingService
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(ResourceListingRequest $request, ResourceListingService $listingService)
    {
        $sportTypes = $listingService
            ->initQuery(new SportType())
            ->setRequest($request)
            ->getCollection();

        return response()->json([
            'data' => SportTypeResource::collection($sportTypes),
            'total' => $sportTypes->count()
        ]);
    }
}
