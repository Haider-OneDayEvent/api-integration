@extends('layout.app')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Edit Lead Information</h1>
            <form method="POST" action="{{ route('leads.update', ['lead' => $lead->id]) }}">
                @csrf
                @method('PUT') 

                <div class="row mb-3">
                    <div class="form-group col">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $lead->first_name }}" required>
                    </div>

                    <div class="form-group col">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $lead->last_name }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group col">
                        <label for="street_address">Street Address</label>
                        <input type="text" class="form-control" id="street_address" name="street_address" value="{{ $lead->street_address }}" required>
                    </div>

                    <div class="form-group col">
                        <label for="home">Home (Own or Rent)</label>
                        <select class="form-control" id="home" name="home" required>
                            <option value="own" {{ $lead->home === 'own' ? 'selected' : '' }}>Own</option>
                            <option value="rent" {{ $lead->home === 'rent' ? 'selected' : '' }}>Rent</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group col">
                        <label for="property_type">Property Type (Primary or Landlord)</label>
                        <select class="form-control" id="property_type" name="property_type" required>
                            <option value="primary" {{ $lead->property_type === 'primary' ? 'selected' : '' }}>Primary</option>
                            <option value="landlord" {{ $lead->property_type === 'landlord' ? 'selected' : '' }}>Landlord</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <label for="existing_insurer">Existing Insurer (Yes or No)</label>
                        <select class="form-control" id="existing_insurer" name="existing_insurer" required>
                            <option value="yes" {{ $lead->existing_insurer === 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no" {{ $lead->existing_insurer === 'no' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group col">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $lead->date_of_birth }}" required>
                    </div>

                    <div class="form-group col">
                        <label for="current_insurer">Current Insurer</label>
                        <input type="text" class="form-control" id="current_insurer" name="current_insurer" value="{{ $lead->current_insurer }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-group col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}" required>
                    </div>

                    <div class="form-group col">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ $lead->phone }}" required>
                    </div>
                </div>

                <div class="d-flex justify-content-around">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('leads.checkOnZillow', $lead->id) }}" class="btn btn-info">Check on Zillow</a>
                <a href="{{ route('propertyApi', $lead->id) }}" class="btn btn-secondary">Check on Realty Mole Property</a>
                </div>
            </form>
        </div>
    </div>
@stop