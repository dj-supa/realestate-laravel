@extends('layouts.admin')

@section('page-title', 'Show All Photos')

@section('content')
<div id="mainContent">
    <h1>Show All Photos </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($photos as $photo)
                        <tr>
                            <th scope="row">{{$photo->id}}</th>
                            <td>
                                <img src="/img/{{$photo->name}}" style="width: 300px;">
                            </td>
                            <td>
                                {{$photo->name}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$photos->links()}}
            </div>
        </div>
    </div>
</div>

@endsection