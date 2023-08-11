@extends('layouts.main') @section('page-title', '234 Grand Ave - Smith Realty')

@section('content')
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg" alt="house">
        <div class="listing-top__form-wrapper">
            <div class="container">
            <form class="listing-top__form" action="">
                <span class="listing-top__form-title">Schedule A Tour</span>
                <div class="listing-top__form-group listing-top__form-group--horz">
                <div class="listing-top__form-option">In Person</div>
                <div class="listing-top__form-option">Video</div>
                </div>
            </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
