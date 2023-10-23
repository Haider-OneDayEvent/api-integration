@extends('layout.app')

@section('content')

<div class="content-wrapper">
<tr>
<h1>Property Details</h1>
    <table>
        <tr>
            <td>Address Line 1</td>
            <td>{{ $propertyData->addressLine1 }}</td>
        </tr>
        <tr>
            <td>City</td>
            <td>{{ $propertyData->city }}</td>
        </tr>
        <tr>
            <td>State</td>
            <td>{{ $propertyData->state }}</td>
        </tr>
        <tr>
            <td>Zip Code</td>
            <td>{{ $propertyData->zipCode }}</td>
        </tr>
        <tr>
            <td>Formatted Address</td>
            <td>{{ $propertyData->formattedAddress }}</td>
        </tr>
        <tr>
            <td>Assessor ID</td>
            <td>{{ $propertyData->assessorID }}</td>
        </tr>
        <tr>
            <td>Bedrooms</td>
            <td>{{ $propertyData->bedrooms }}</td>
        </tr>
        <tr>
            <td>County</td>
            <td>{{ $propertyData->county }}</td>
        </tr>
        <tr>
            <td>Legal Description</td>
            <td>{{ $propertyData->legalDescription }}</td>
        </tr>
        <tr>
            <td>Square Footage</td>
            <td>{{ $propertyData->squareFootage }}</td>
        </tr>
        <tr>
            <td>Subdivision</td>
            <td>{{ $propertyData->subdivision }}</td>
        </tr>
        <tr>
            <td>Year Built</td>
            <td>{{ $propertyData->yearBuilt }}</td>
        </tr>
        <tr>
            <td>Bathrooms</td>
            <td>{{ $propertyData->bathrooms }}</td>
        </tr>
        <tr>
            <td>Lot Size</td>
            <td>{{ $propertyData->lotSize }}</td>
        </tr>
        <tr>
            <td>Property Type</td>
            <td>{{ $propertyData->propertyType }}</td>
        </tr>
        <tr>
            <td>Last Sale Date</td>
            <td>{{ $propertyData->lastSaleDate }}</td>
        </tr>
        <tr>
            <td>Last Sale Price</td>
            <td>{{ $propertyData->lastSalePrice }}</td>
        </tr>
        <tr>
            <td>Owner Occupied</td>
            <td>{{ $propertyData->ownerOccupied ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>Zoning</td>
            <td>{{ $propertyData->zoning }}</td>
        </tr>
    </table>
</div>
@stop