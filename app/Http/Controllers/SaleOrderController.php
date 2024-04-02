<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\SaleOrderController as SaleOrderControllerRequest;

class SaleOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param SaleOrderControllerRequest\SaleOrderControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(SaleOrderControllerRequest\SaleOrderControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param SaleOrderControllerRequest\SaleOrderControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(SaleOrderControllerRequest\SaleOrderControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param SaleOrderControllerRequest\SaleOrderControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(SaleOrderControllerRequest\SaleOrderControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param SaleOrderControllerRequest\SaleOrderControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(SaleOrderControllerRequest\SaleOrderControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param SaleOrderControllerRequest\SaleOrderControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(SaleOrderControllerRequest\SaleOrderControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
    public function removeStock()
    {
        //your code here
    }
}
