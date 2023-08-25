@extends('layouts.admin') @section('page-title', 'Create a Listing')
@section('content')
<div id="main-content">
    <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
            <h1>Create a Listing</h1>
            <h6 class="c-grey-900">Complex Form Layout</h6>
            <div class="mT-30">
                <form method="POST" action="{{ route('admin.listings.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                            value="{{old('address')}}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address2">Address 2</label>
                        <input type="text" class="form-control" id="address2" name="address2"
                            placeholder="Apartment, studio, or floor" value="{{old('address2')}}" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city"
                            placeholder="San Jose" value="{{old('city')}}" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="state">
                                State
                            </label>
                            <select name="state" id="state" class="form-control">
                                <option value="CA" @selected(old('version')=="CA" )>California</option>
                                <option value="HI" @selected(old('version')=="HI" )>Hawaii</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="zipcode">Zip</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode"
                                value="{{old('zipcode')}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="bedrooms">Bedrooms</label>
                            <input type="text" class="form-control" name="bedrooms" id="bedrooms" placeholder="4"
                                value="{{old('bedrooms')}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="bathroom">Bathrooms</label>
                            <input type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="2"
                                value="{{old('bathroom')}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="squarefootage">SQFT</label>
                            <input type="text" class="form-control" name="squarefootage" id="squarefootage"
                                placeholder="3000" value="{{old('squarefootage')}}" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-color">
                        Create Listing
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection