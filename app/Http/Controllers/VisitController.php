<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitorRequest;
use App\Services\Visits\VisitsInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class VisitController extends Controller
{

    public function index(VisitsInterface $visits): JsonResponse
    {
        return \Response::json($visits->all());
    }

    public function store(VisitorRequest $request, VisitsInterface $visits): Response
    {
        $country = $request->post('code');
        $visits->increment($country);

        return \Response::noContent();
    }
}
