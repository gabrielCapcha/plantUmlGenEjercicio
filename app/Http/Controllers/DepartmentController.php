<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\DepartmentController as DepartmentControllerRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param DepartmentControllerRequest\DepartmentControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(DepartmentControllerRequest\DepartmentControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param DepartmentControllerRequest\DepartmentControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(DepartmentControllerRequest\DepartmentControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param DepartmentControllerRequest\DepartmentControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(DepartmentControllerRequest\DepartmentControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param DepartmentControllerRequest\DepartmentControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(DepartmentControllerRequest\DepartmentControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param DepartmentControllerRequest\DepartmentControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(DepartmentControllerRequest\DepartmentControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
