@extends('layouts.master')

@section('page-content')
@include('search.tr-search')

<div class="p-5 mt-4">
    <div class="container text-center">
        <h1>The Value of a Trademark Search</h1>
        <p>Ensure uniqueness before official filing. Save time and money with our thorough trademark investigation. We
            pre-check your trademark to avoid non-refundable USPTO fees.</p>
    </div>
</div>

@include('search.search-report')

<div class="content2">
    <div class="container">
        <div class="text-center">
            <h3 class="fw-700">Choose your plan</h3>
            <p>We accommodate a variety of different payment options. You can book a free meeting to learn more</p>
        </div>
        @include('home.plans.trademarkSearchPlan')
    </div>
</div>

@include('search.trademarkIssues')
@include('search.howWork')
@include('home.content9')
@endsection
