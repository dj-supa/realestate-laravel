@extends('layouts.main')

@section('content')
<div class="listings-page">
    <div class="listings-city">
        <img class="listings-city__img" src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
            alt="home">
        <h1 class="listings-city__title">North San Francisco</h1>
    </div>
    <div class="listings-filter">
        <div class="listings-filter__wrapper">
            <div class="listings-filter__option">
                Any Price <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                All Beds <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                Hometype <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                More <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__button">
                Search
            </div>
        </div>
    </div>
</div>
@endsection