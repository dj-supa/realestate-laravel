@extends('layouts.main') @section('page-title', 'All Properties - Smith Realty')
@section('content')
<div class="listings-page">
    <div class="listings-city">
        <img
            class="listings-city__img"
            src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
            alt="home"
        />
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
            <div class="listings-filter__button">Search</div>
        </div>
    </div>
    <div class="listings-properties">
        <div class="container">
            <div class="row">
                @for ($i = 1; $i <= 12; $i++) <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="listings-properties__item">
                        <img src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg" alt="">
                        <div class="listings-properties__saved">
                            <i class="fa-solid fa-heart"></i>

                        </div>
                        <span class="listings-properties__item-price">$250,000</span>
                        <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i
                                class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler-combined"></i> 3545
                            SQFT</span>
                        <span class="listings-properties__item-address">2345 Valencia St, <br>
                            San Francisco, CA 94102</span>
                        <div class="listings-properties__item-line"></div>
                        <span class="listings-properties__item-owner">Perez Realty</span>
                    </div>
                </div> @endfor
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="listings-properties__item">
                        <img
                            src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
                            alt=""
                        />
                        <div class="listings-properties__saved">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <span class="listings-properties__item-price"
                            >$250,000</span
                        >
                        <span class="listings-properties__item-details"
                            ><i class="fa-solid fa-bed"></i> 4
                            <i class="fa-solid fa-bath"></i> 3
                            <i class="fa-solid fa-ruler-combined"></i> 3545
                            SQFT</span
                        >
                        <span class="listings-properties__item-address"
                            >2345 Valencia St, <br />
                            San Francisco, CA 94102</span
                        >
                        <div class="listings-properties__item-line"></div>
                        <span class="listings-properties__item-owner"
                            >Perez Realty</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
