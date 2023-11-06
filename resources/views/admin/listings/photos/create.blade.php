@extends('layouts.admin') @section('page-title', 'Create a Listing')
@section('content')
<div id="main-content">
    <div class="masonry-item col-md-6">
        <div class="bgc-white p-20 bd">
            <h1>Create a Photo</h1>
            <h6 class="c-grey-900">Complex Form Layout</h6>
            <div class="mT-30">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.listings.photos.store', ['slug' => $slug, 'id' => $id]) }}">
                    @csrf
                    <div class="mb-3"><label class="form-label" 
                    for="address">Address</label>
                    <input type="file" name="image">
                    <button type="submit" class="btn btn-primary btn-color">
                        Save Image
                    </button>
                    @error('status')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                            @enderror
                </form>
            </div>
        </div>
    </div>
</div>
@endsection