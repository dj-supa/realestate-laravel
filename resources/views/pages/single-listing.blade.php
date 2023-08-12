@extends('layouts.main') @section('page-title', '234 Grand Ave - Smith Realty')

@section('content')
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
            alt="house">
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form class="listing-top__form" action="">
                    <label class="listing-top__form-label">Schedule A Tour</label>
                    <div class="listing-top__form-group listing-top__form-group--horz">
                        <div class="listing-top__form-option">In Person</div>
                        <div class="listing-top__form-option">Video</div>
                    </div>
                    <label class="listing-top__form-label">Date</label>
                    <div class="listing-top__form-group listing-top__form-group--horz">
                        <div class="listing-top__form-option">September 23, 2023</div>
                    </div>
                    <label class="listing-top__form-label">Time</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">9 AM</div>
                    </div>
                    <label class="listing-top__form-label">Personal Info</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Enter Phone</div>
                    </div>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Enter Email</div>
                    </div>
                    <div class="listing-top__form-group">
                        <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection