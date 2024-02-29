@extends('layouts.master')

@section('page-content')
@include('formation.formation')
@include('formation.compForm')
@include('formation.llc')
@include('formation.c-corp')
@include('formation.s-corp')
@include('formation.non-profit')

<div class="content2">
    <div class="container">
        <div class="text-center">
        <h3 class="fw-700">Choose your plan</h3>
            <p>We accommodate a variety of different payment options. You can book a free meeting to learn more</p>
        </div>
        @include('home.plans.formation')
    </div>
</div>


@include('formation.operate')
@include('home.content9')
@endsection
