@extends('../Navs/navProduct')
@section('content')

    <!-- Start Photo With Layer -->
    <div class="AboutLogo position-relative text-black d-flex justify-content-center align-items-center m-auto">
        <div class="text-center row text-white">
            <h1 class="Head">Collection</h1>

            <h3 class="fs-6">
                <a href="home " class="Hover">Home</a> / <a href="product" class="Hover">Product</a> /
                <a class="SecAll no-hover WD">All</a>
                @foreach ($Cats as $cat)
                    <a href="#" class="d-none no-hover  {{ 'Sec' . $cat->catname }} WD">{{ $cat->catname }}</a>
                @endforeach
            </h3>
        </div>
    </div>
    <!-- End Photo With Layer -->

    <!-- Start Menu -->
    <div class="container-fluid align-items-center justify-content-center mt-5 my-auto text-black pt-2 pb-4">
        <div class="row mx-auto justify-content-center">
            <div class="col-2 ProductLeft mx-4 align-items-start justify-content-start card pt-3 left h-100"
                style="border: 0px solid red;position: -webkit-sticky; /* Safari & IE */
                position: sticky;
                top: 0;";>
                <h6 style="" class="w-100 ps-2 mt-5" id=""> Category</h6>
                <h6 style="" class="w-100 ps-2" id="Underline"> </h6>
                <a role="button" class="text-decoration-none Cat-Prod-Left ps-2" id="All"
                    onclick="Display('All')">All</a>
                @foreach ($Cats as $cat)
                    <a role="button" class="text-decoration-none Cat-Prod-Left ps-2" id="{{ $cat->catname }}"
                        onclick="Display('{{ $cat->catname }}')">{{ $cat->catname }}</a>
                @endforeach
                <h6 style="" class="w-100 ps-2" id="Underline"> </h6>
                <h6 style="" class="w-100 ps-2 mt-1" id="">Price E£</h6>
                <h6 style="" class="w-100 ps-2 mt-1" id="">From :</h6>
                <input type="text" class="ms-3 mt-1 rounded-5 p-1 px-2 w-75 Fs-0" name="" id="From">
                <h6 style="" class="w-100 ps-2 mt-1 " id="">To :</h6>
                <input type="text" class="ms-3 mt-1 rounded-5 p-1 px-2 w-75 Fs-0" name="" id="To">
                <p class="row w-100 m-auto">
                    <a role="button" class="btn main-btn rounded-pill mt-3 w-35 ms-3 me-4" onclick="Clear()">Clear</a>
                    <a role="button" class="btn main-btn rounded-pill mt-3 w-35" onclick="Apply()">Apply</a>
                </p>

            </div>
            <div class="col-7 ProductRight right">
                <div class="row p-1 pt-3 justify-content-start ps-4 AllProd">
                    @foreach ($posts as $post)
                        <div class="card Grap text-center pt-4 m-2 AllEl border-1 {{ App\Models\Category::find($post->categories_id)?->catname }}"
                            style="width: 16rem">

                            <img src="/{{ $post->image }}" class="card-img Prod" alt="..." />

                            <div class="card-body mt-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <h6 class="mt-2">{{ App\Models\Category::find($post->categories_id)?->catname }}</h6>
                                <h5 class="card-def fw-bold mt-3" scope="row">
                                    {{ $post->title }}
                                </h5>
                                <h5 class="card-def my-0 PRICE" scope="row">
                                    <span>{{ $post->prize }}</span> E£
                                </h5>
                                <a role="button" role="button"
                                    class="btn btn-primary main-btn rounded-pill" style="border:0px solid black"
                                    onclick="AddToCart('{{ $post->id }}')">Add to cart</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Menu -->

@stop
