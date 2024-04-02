<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ProductController as ProductControllerRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param ProductControllerRequest\ProductControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(ProductControllerRequest\ProductControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param ProductControllerRequest\ProductControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(ProductControllerRequest\ProductControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param ProductControllerRequest\ProductControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(ProductControllerRequest\ProductControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param ProductControllerRequest\ProductControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(ProductControllerRequest\ProductControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param ProductControllerRequest\ProductControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(ProductControllerRequest\ProductControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
