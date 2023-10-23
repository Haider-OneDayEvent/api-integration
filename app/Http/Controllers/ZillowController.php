<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Zillow;
use App\Models\Lead;


class ZillowController extends Controller
{
    public function checkOnZillow($leadId){
        $lead = Lead::find($leadId);
    
        // Get the street address from the lead
        $address = $lead->street_address;
        
        
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'zillow56.p.rapidapi.com',
            'X-RapidAPI-Key' => $apikey,
        ])->get("https://zillow56.p.rapidapi.com/search_address?address=$address");
        
        $responseJson = json_encode($response->json());
        
        $zillowData = new Zillow;
        $zillowData->address = $address;
        $zillowData->response = $responseJson;
        $zillowData->save();
        
        return redirect()->back();
    }
}
