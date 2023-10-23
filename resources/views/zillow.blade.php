@extends('layout.app')

@section('content')

<div class="content-wrapper">
<h1>Zillow Data</h1>
    <ul>
        <li>City: {{ $zillowData['city'] }}</li>
        <li>Community: {{ $zillowData['community'] }}</li>
        <li>Neighborhood: {{ $zillowData['neighborhood'] }}</li>
        <li>State: {{ $zillowData['state'] }}</li>
        <li>Street Address: {{ $zillowData['streetAddress'] }}</li>
        <li>Subdivision: {{ $zillowData['subdivision'] }}</li>
        <li>Zipcode: {{ $zillowData['zipcode'] }}</li>
    </ul>
</div>
@stop