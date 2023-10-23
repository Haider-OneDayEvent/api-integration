<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\PropertyData;


class PropertyDataController extends Controller
{
    public function propertyApi($leadId){
        $lead = Lead::find($leadId);
    
        // Get the street address from the lead
        $address = $lead->street_address;
        
        
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'realty-mole-property-api.p.rapidapi.com',
            'X-RapidAPI-Key' => $apikey ,
        ])->get("https://realty-mole-property-api.p.rapidapi.com/properties?$address");
        
        $responseJson =json_encode($response->json());

        $propertyData = new PropertyData;
        $propertyData->address = $address;
        $propertyData->response = $responseJson;
        $propertyData->save();

        return redirect()->back();

    }
}
