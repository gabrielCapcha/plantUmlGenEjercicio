<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ProviderController as ProviderControllerRequest;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param ProviderControllerRequest\ProviderControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(ProviderControllerRequest\ProviderControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param ProviderControllerRequest\ProviderControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(ProviderControllerRequest\ProviderControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param ProviderControllerRequest\ProviderControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(ProviderControllerRequest\ProviderControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param ProviderControllerRequest\ProviderControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(ProviderControllerRequest\ProviderControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param ProviderControllerRequest\ProviderControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(ProviderControllerRequest\ProviderControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
