<?php

namespace App\Services;

use App\Models\ZipCode;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ZipcodeService
{
    protected $apiEndpoint;

    public function __construct()
    {
        $this->apiEndpoint = 'https://home.everquote.com/api/zip_codes/';
    }

    public function getZipcodeInfo($zipCode)
    {
        $existingZipCode = ZipCode::where('zipcode', $zipCode)->first();

        if ($existingZipCode) {
            return ['zipCodeInfo' => $existingZipCode];
        }

        try {
            $response = Http::get($this->apiEndpoint . '?zip_code=' . $zipCode);
            $data = $response->json();

            if (isset($data['info'])) {
                $newZipCode = new ZipCode();
                $newZipCode->fill($data['info']);
                $newZipCode->save();

                return ['zipCodeInfo' => $newZipCode];
            } else {
                return ['error' => 'City not found'];
            }
        } catch (\Exception $e) {
            Log::error('An error occurred: ' . $e->getMessage());
            return ['error' => 'An error occurred: ' . $e->getMessage()];
        }
    }
}
