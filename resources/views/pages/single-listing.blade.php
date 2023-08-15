@extends('layouts.main') @section('page-title', '234 Grand Ave - Smith Realty')
@section('content')
<div class="single-listing-page">
    <div class="listing-top">
        <img
            class="listing-top__img"
            src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
            alt="house"
        />
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form class="listing-top__form" action="">
                    <label class="listing-top__form-label"
                        >Schedule A Tour</label
                    >
                    <div
                        class="listing-top__form-group listing-top__form-group--horz"
                    >
                        <div class="listing-top__form-option">In Person</div>
                        <div class="listing-top__form-option">Video</div>
                    </div>
                    <label class="listing-top__form-label">Date</label>
                    <div
                        class="listing-top__form-group listing-top__form-group--horz"
                    >
                        <div class="listing-top__form-option">
                            September 23, 2023
                        </div>
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
                        <button type="submit" class="listing-top__form-button">
                            Schedule A Tour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="listing-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>
                        23 Grand Ave <br />
                        San Francisco, CA 95484
                    </h1>
                    <div class="listing-info__details">
                        <span class="listing-info__details-text"
                            ><i class="fa-solid fa-bed"></i> 4</span
                        >
                        <span class="listing-info__details-text"
                            ><i class="fa-solid fa-bath"></i> 3</span
                        >
                        <span class="listing-info__details-text"
                            ><i class="fa-solid fa-ruler-combined"></i> 3545
                            SQFT</span
                        >
                    </div>
                </div>
                <div class="col-md-5">
                    <span class="listing-info__agent-title">Agent</span>
                    <span class="listing-info__agent-name">John Smith</span>
                    <p class="listing-info__agent-profile">
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Temporibus soluta illo labore impedit tempore.
                        Error fuga illo modi, neque sed accusamus quam minima
                        necessitatibus similique maxime dignissimos velit
                        voluptatum praesentium!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="listing-extras">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="listing-extras__details">
                        <h2>More Info</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A inventore accusamus sed, molestias quaerat recusandae aperiam sequi esse doloribus dolorem eos, ipsum itaque quisquam molestiae aliquam sit. Reprehenderit, sunt amet. Lorem ipsum, dolor sit amet consectetur adipisicing elit. A inventore accusamus sed, molestias quaerat recusandae aperiam sequi esse doloribus dolorem eos, ipsum itaque quisquam molestiae aliquam sit. Reprehenderit, sunt amet. Lorem ipsum, dolor sit amet consectetur adipisicing elit. A inventore accusamus sed, molestias quaerat recusandae aperiam sequi esse doloribus dolorem eos, ipsum itaque quisquam molestiae aliquam sit. Reprehenderit, sunt amet.</p>
                        <h3>Details</h3>
                        <ul>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="listing-extras__gallery">
                        <h2>Images</h2>
                        <img
                            src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
                            alt=""
                        />
                        <img
                            src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
                            alt=""
                        />
                        <img
                            src="https://toptenrealestatedeals.com/wp-content/uploads/2019/09/1-1.jpg"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
