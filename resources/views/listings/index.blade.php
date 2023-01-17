@php
    // $listings = [];
@endphp

{{-- @if(empty($listings))
    <p>No listings found</p>
@endif --}}

{{-- @extends('layout') --}}

{{-- @section('content') --}}

<x-layout>

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless (empty($listings))

@foreach ($listings as $listing)
    <x-listing-card :listing="$listing" />
@endforeach
</div>

@else 
<p>No listings found</p>
@endunless

</x-layout>

{{-- @endsection --}}