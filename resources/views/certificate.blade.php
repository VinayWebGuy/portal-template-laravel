@extends('layouts.main')
@section('title', 'Certificate')
@section('certificate', 'active')
@section('content')

<div class="data">
    <h2 class="page-heading">Certifcate</h2>

    <div class="certificate-container">
        <div class="single-certificate current">
            <img src="{{asset('assets/certificates/1.png')}}" alt="">
            <span class="select">Selected</span>
        </div>
        <div class="single-certificate">
            <img src="{{asset('assets/certificates/2.png')}}" alt="">
             <span class="select">Select</span>
        </div>
        <div class="single-certificate">
            <img src="{{asset('assets/certificates/3.png')}}" alt="">
             <span class="select">Select</span>
        </div>
        <div class="single-certificate">
            <img src="{{asset('assets/certificates/4.png')}}" alt="">
             <span class="select">Select</span>
        </div>
        <div class="single-certificate">
            <img src="{{asset('assets/certificates/5.png')}}" alt="">
             <span class="select">Select</span>
        </div>
        <div class="single-certificate">
            <img src="{{asset('assets/certificates/6.png')}}" alt="">
             <span class="select">Select</span>
        </div>
    </div>
</div>
@endsection