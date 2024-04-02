<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EmployeeController as EmployeeControllerRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EmployeeControllerRequest\EmployeeControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EmployeeControllerRequest\EmployeeControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EmployeeControllerRequest\EmployeeControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EmployeeControllerRequest\EmployeeControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EmployeeControllerRequest\EmployeeControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EmployeeControllerRequest\EmployeeControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EmployeeControllerRequest\EmployeeControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EmployeeControllerRequest\EmployeeControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EmployeeControllerRequest\EmployeeControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EmployeeControllerRequest\EmployeeControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
