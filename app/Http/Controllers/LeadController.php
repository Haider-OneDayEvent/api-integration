<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LeadService;
use App\Models\Lead;

class LeadController extends Controller
{

    protected $leadService;

    public function __construct(LeadService $leadService)
    {
        $this->leadService = $leadService;
    }

    public function showInputForm()
    {
        return view('leads.test-lead');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'home' => 'required|in:own,rent',
            'property_type' => 'required|in:primary,landlord',
            'existing_insurer' => 'required|in:yes,no',
            'date_of_birth' => 'required|date',
            'current_insurer' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $this->leadService->createLead($validatedData);

        return redirect()->back();
    }

    public function index()
    {
        $leads = Lead::all();

        return view('leads.display-lead', compact('leads'));
    }

    public function edit(Lead $lead)
    {
        return view('leads.edit-lead', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'home' => 'required|in:own,rent',
            'property_type' => 'required|in:primary,landlord',
            'existing_insurer' => 'required|in:yes,no',
            'date_of_birth' => 'required|date',
            'current_insurer' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $this->leadService->updateLead($lead, $validatedData);

        return redirect()->route('leads.index')->with('success', 'Lead updated successfully');
    }

}
