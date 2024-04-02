<?php

namespace App\Http\Requests\EnterpriseController;

use App\Models\Enterprise;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class EnterpriseControllerStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
        ];
    }

    /**
     * messages
     * @author PlantUmlGen
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required.',
            'max' => 'The :attribute is very long.',
            'unique' => 'The :attribute has already been taken.',
            'exists' => 'Could not find :attribute',
            'string' => 'EL atributo debe ser una cadena de texto.'
        ];
    }

    /**
     * response
     * @author PlantUmlGen
     * @return JsonResponse
     */
    public function response(): JsonResponse
    {
        $params = $this->input();
        $enterprise = Enterprise::create($params);

        return response()->json($enterprise);
    }
}
