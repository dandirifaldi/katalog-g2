@section('slider')    
    <div class="px-1 py-1 my-1 text-center">
        <img class="d-block mx-auto img-fluid" src="logo/q.png" alt="" width="700" height="300">
        <h1 class="display-3 fw-bold"></h1>
        <div class="col-md-6 mx-auto">
            <p class="lead mb-4"></p>
            <div class="d-grid gap-1 d-sm-flex justify-content-sm-center">
                <a href="/panel" class="btn btn-outline-danger btn-lg px-4 me-md-2" >Our List Product</a>
                <a href="/panel" class="btn btn-outline-danger btn-lg px-4 me-md-2" >About Us</a>
            </div>
        </div>
    </div>
    <div class="b-example-divider"></div>

    <!-- exterminator -->
    @include('layout.ext')
    <!-- endexterminator -->

    <!-- Optimax -->
    @include('layout.opt')
    <!-- endOptimax -->
   
    <!-- Centrino -->
    @include('layout.ctr')
    <!-- End Centrino -->

    <!-- Bogo -->
    @include('layout.bogo')
    <!-- End Bogo -->
@endsection