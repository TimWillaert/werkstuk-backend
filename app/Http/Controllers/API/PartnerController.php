<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Partner;
use App\Http\Resources\Partner as PartnerResource;
use Illuminate\Http\Request;

class PartnerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gold = Partner::where('level', 'Gold')->get();
        $silver = Partner::where('level', 'Silver')->get();
        $bronze = Partner::where('level', 'Bronze')->get();

        return $this->sendResponse(['Gold' => PartnerResource::collection($gold), 'Silver' => PartnerResource::collection($silver), 'Bronze' => PartnerResource::collection($bronze)], 'Partners retrieved successfully.');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {
        $partner = Partner::find($id);

        if (is_null($partner)) {
            return $this->sendError('Partner not found.');
        }

        return $this->sendResponse(new PartnerResource($partner), 'Partner retrieved successfully.');
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
