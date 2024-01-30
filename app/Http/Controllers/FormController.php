<?php
namespace App\Http\Controllers;

use App\Factories\FormFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request, FormFactory $dataFactory): JsonResponse
    {
        // Получение данных с фронта
        $requestData = $request->all();

        // Определение места сохранения
        $destination = 'email'; // Может быть 'database' или 'email'

        // Сохранение данных через фабрику
        $result = $dataFactory->save($requestData, $destination);

        return response()->json(['data' => $requestData, 'message' => $result]);
    }
}
