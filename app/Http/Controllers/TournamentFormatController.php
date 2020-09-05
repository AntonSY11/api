<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceListingRequest;
use App\Http\Resources\TournamentFormat as TournamentFormatResource;
use App\Models\TournamentFormat;
use App\Services\ResourceListingService;

class TournamentFormatController extends Controller
{
    /**
     * @api {get} tournament-formats List of tournament-formats
     * @apiGroup Tournament_Formats
     * @apiUse ResourceListingRequest
     * @apiSuccess {TournamentFormat[]} Array of the "TournamentFormat" object
     * @apiUse TournamentFormatResource
     * @param ResourceListingRequest $request
     * @param ResourceListingService $listingService
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(ResourceListingRequest $request, ResourceListingService $listingService)
    {
        $tournamentFormats = $listingService
            ->initQuery(new TournamentFormat)
            ->setRequest($request)
            ->getCollection();

        return response()->json([
            'data' => TournamentFormatResource::collection($tournamentFormats),
            'total' => $tournamentFormats->count()
        ]);
    }
}
