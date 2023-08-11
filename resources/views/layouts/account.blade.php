<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
</head>

<body>
    @include('components/header')

    <div class="account-layout">
        <div class="listings-city">
            <img class="listings-city__img"
                src="@yield('page-bg')"
                alt="home">
            <h1 class="listings-city__title">@yield('title')</h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="account__menu">
                            <h1>Menu</h1>
                            <a href="/account/saved">Saved Listings</a>
                            <a href="/account/show-status">Listing Request Status</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>



    </div>
</body>

</html>