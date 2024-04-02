<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\PurchaseOrderController as PurchaseOrderControllerRequest;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param PurchaseOrderControllerRequest\PurchaseOrderControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(PurchaseOrderControllerRequest\PurchaseOrderControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param PurchaseOrderControllerRequest\PurchaseOrderControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(PurchaseOrderControllerRequest\PurchaseOrderControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param PurchaseOrderControllerRequest\PurchaseOrderControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(PurchaseOrderControllerRequest\PurchaseOrderControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param PurchaseOrderControllerRequest\PurchaseOrderControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(PurchaseOrderControllerRequest\PurchaseOrderControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param PurchaseOrderControllerRequest\PurchaseOrderControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(PurchaseOrderControllerRequest\PurchaseOrderControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
    public function addStock()
    {
        //your code here
    }
}
