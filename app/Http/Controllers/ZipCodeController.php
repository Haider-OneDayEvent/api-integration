<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ZipcodeService;


class ZipCodeController extends Controller
{
    protected $zipcodeService;

    public function __construct(ZipcodeService $zipcodeService)
    {
        $this->zipcodeService = $zipcodeService;
    }

    public function getZipCodeInfo(Request $request, $zipcode)
    {
        $result = $this->zipcodeService->getZipcodeInfo($zipcode);

        if (isset($result['error'])) {
            return response()->json(['error' => $result['error']], 400);
        }

        return response()->json(['zipCodeInfo' => $result['zipCodeInfo']]);
    }
}
