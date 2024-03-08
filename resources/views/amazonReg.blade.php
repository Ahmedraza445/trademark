@extends('layouts.master')

@section('page-content')
@include('amazon.amazon')
@include('amazon.methodology')
<div class="content2">
    <div class="container">
        <div class="text-center cont2 mt-50">
            <h1>Choose your plan</h1>
            <p>We accommodate a variety of different payment options. You can book a free meeting to learn more</p>
        </div>
        @include('home.plans.amazonReg')
    </div>
</div>
@include('amazon.regBrands')
@include('amazon.pick')
@include('amazon.register')



@include('home.content9')
@endsection
