<?php

namespace App\Http\Controllers;

use App\Models\PMUserResourcesConnections;
use App\Models\PMUserRoleConnections;
use Illuminate\Http\Request;

class PMGameController extends Controller
{
    /**
     * Show the form for uploading an image.
     * GET /pmcheese/admincreate
     *
     * @return Response
     */
    public function create()
    {
        return view('front-end.game');
    }
    /**
     * Store the uploaded image.
     * POST /pmcheese
     *
     * @return Response
     */
    public function store()
    {
        $resources = request()->file('image');
        $resourcesController = new PMResourceController();
        $record = $resourcesController->upload($resources);

        PMUserResourcesConnections::create([
            "user_id" => auth()->user()->id,
            "resource_id" => $record->id
        ]);

    }
}
