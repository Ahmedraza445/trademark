@extends('layouts.master')

@section('page-content')
@include('web.design')
@include('web.design_cards')
@include('web.development')
<div class="content2 mt-30">
    <div class="container">
        <div class="text-center">
            <h3 class="fw-700">Choose your plan</h3>
            <p>We accommodate a variety of different payment options. You can book a free meeting to learn more</p>
        </div>
        @include('home.plans.web_design')
    </div>
</div>
@include('web.satisfaction')
@include('web.submitNow')
@include('web.registerNow')
@include('home.content8')

@include('home.content9')
@endsection
