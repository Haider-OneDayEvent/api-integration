<?php
namespace App\Services;
use App\Models\Lead;
use Illuminate\Support\Facades\Validator;

class LeadService
{
    public function createLead($data)
    {
        $validator = Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'home' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'existing_insurer' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'current_insurer' => 'required|string|max:255',
            'email' => 'required|email|unique:leads',
            'phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return ['error' => $validator->errors()->first()];
        }

        $lead = Lead::create($data);

        return ['message' => 'Lead saved successfully', 'lead' => $lead];
    }
    
}