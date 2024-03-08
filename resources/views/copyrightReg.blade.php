@extends('layouts.master')

@section('page-content')
@include('copyright.copyright')
@include('copyright.card')
@include('copyright.whyReg')
<div class="content2">
    <div class="container">
        <div class="text-center cont2">
            <h1>Choose your plan</h1>
            <p>We accommodate a variety of different payment options. You can book a free meeting to learn more</p>
        </div>
        @include('home.plans.copyrightReg')
    </div>
</div>
@include('copyright.creativeLegacy')
@include('copyright.quickProcess')

@include('home.content9')
@endsection
