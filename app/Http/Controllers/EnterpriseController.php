<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EnterpriseController as EnterpriseControllerRequest;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EnterpriseControllerRequest\EnterpriseControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EnterpriseControllerRequest\EnterpriseControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EnterpriseControllerRequest\EnterpriseControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EnterpriseControllerRequest\EnterpriseControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EnterpriseControllerRequest\EnterpriseControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EnterpriseControllerRequest\EnterpriseControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EnterpriseControllerRequest\EnterpriseControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EnterpriseControllerRequest\EnterpriseControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EnterpriseControllerRequest\EnterpriseControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EnterpriseControllerRequest\EnterpriseControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
    public function asignRuc()
    {
        //your code here
    }
}
