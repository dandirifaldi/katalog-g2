@extends('layout.v_utama')
@section('content')
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-solid">
                    <!-- card-body -->
                    @foreach($product as $data)
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h3 class="d-inline-block d-sm-none">{{$data->id_helm}} . {{$data->nama_helm}}</h3>
                                    <div class="col-12">
                                    <img src="{{url('img_helm/1/'.$data->image1)}}"  type="png" class="product-image" alt="Product Image">
                                    </div>
                                        <div class="col-12 product-image-thumbs">
                                        <div class="product-image-thumb active"><img src="{{url('img_helm/1/'.$data->image1)}}" alt="Product Image"></div>
                                        <div class="product-image-thumb" ><img src="{{url('img_helm/2/'.$data->image2)}}" alt="Product Image"></div>
                                        <div class="product-image-thumb" ><img src="{{url('img_helm/3/'.$data->image3)}}" alt="Product Image"></div>
                                        <div class="product-image-thumb" ><img src="{{url('img_helm/4/'.$data->image4)}}" alt="Product Image"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h3 class="my-3">{{$data->id_helm}} . {{$data->nama_helm}}</h3>
                                    <hr>
                                    <h3 class="my-3">
                                    Product
                                    <small>Detail</small>
                                    </h3>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ul">
                                                    <li><label>Kategori :   <label class="btn btn-default text-center">{{$data->kategori}}</label></label></li>
                                                    <li><label>Type :   <label class="btn btn-default text-center">{{$data->type}}</label></label></li>
                                                    <li> <label>Warna :   <label class="btn btn-default text-center">{{$data->warna}}</label></label></li>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ul">
                                                    <li><label>Type Warna :   <label class="btn btn-default text-center">{{$data->type_warna}}</label></label></li>
                                                    <li><label>Visor :   <label class="btn btn-default text-center">{{$data->visor}}</label></label></li>
                                                    <li> <label>Type Visor :   <label class="btn btn-default text-center">{{$data->type_visor}}</label></label></li>
                                                </div>
                                            </div>
                                        </div>
                                    <hr>
                                    <h4 class="mt-3">Size <small>Helmet</small></h4>
                                    <div class="btn-group btn-group-toggle">
                                        <label class="btn btn-default text-center">
                                            <span class="text-xl">L</span>
                                            <br>
                                            Large
                                        </label>
                                        <label class="btn btn-default text-center">
                                            <span class="text-xl">XL</span>
                                            <br>
                                            Xtra-Large
                                        </label>
                                    </div>

                                    <div class="bg-primary py-2 px-3 mt-4">
                                        <h2 class="mb-0">{{$data->qty}}<small>  Pcs</small></h2>
                                        <h4 class="mt-0"><small>Avaliable In Stock </small></h4>
                                    </div>

                                    <h3 class="my-3">
                                        Navigation
                                        <small>Menu</small>
                                        </h3>
                                    <hr>
                                    <div class="mt-4">
                                        <a href="/" class="btn btn-primary btn-lg" ><i class="fas fa-arrow-left fa-lg"></i> Back</a>
                                    </div>
                                    <div class="mt-4">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Exterminator</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                              <a class="dropdown-item" href="/detail/1">1</a>
                                              <a class="dropdown-item" href="/detail/2">2</a>
                                              <a class="dropdown-item" href="/detail/3">3</a>
                                              <a class="dropdown-item" href="/detail/4">4</a>
                                              <a class="dropdown-item" href="/detail/5">5</a>
                                              <a class="dropdown-item" href="/detail/6">6</a>
                                              <a class="dropdown-item" href="/detail/7">7</a>
                                              <a class="dropdown-item" href="/detail/8">8</a>
                                              <a class="dropdown-item" href="/detail/9">9</a>
                                              <a class="dropdown-item" href="/detail/10">10</a>
                                              <a class="dropdown-item" href="/detail/11">11</a>
                                              <a class="dropdown-item" href="/detail/12">12</a>
                                              <a class="dropdown-item" href="/detail/13">13</a>
                                              <a class="dropdown-item" href="/detail/14">14</a>
                                              <a class="dropdown-item" href="/detail/15">16</a>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Centrino</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="/detail/17">17</a>
                                                <a class="dropdown-item" href="/detail/18">18</a>
                                                <a class="dropdown-item" href="/detail/19">19</a>
                                                <a class="dropdown-item" href="/detail/20">20</a>
                                                <a class="dropdown-item" href="/detail/21">21</a>
                                                <a class="dropdown-item" href="/detail/22">22</a>
                                                <a class="dropdown-item" href="/detail/23">23</a>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Optimax</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="/detail/24">24</a>
                                                <a class="dropdown-item" href="/detail/25">25</a>
                                                <a class="dropdown-item" href="/detail/26">26</a>
                                                <a class="dropdown-item" href="/detail/27">27</a>
                                                <a class="dropdown-item" href="/detail/28">28</a>
                                                <a class="dropdown-item" href="/detail/29">29</a>
                                                <a class="dropdown-item" href="/detail/30">30</a>
                                                <a class="dropdown-item" href="/detail/31">31</a>
                                                <a class="dropdown-item" href="/detail/32">32</a>
                                                <a class="dropdown-item" href="/detail/34">34</a>
                                                <a class="dropdown-item" href="/detail/35">35</a>
                                                <a class="dropdown-item" href="/detail/36">36</a>
                                                <a class="dropdown-item" href="/detail/37">37</a>
                                                <a class="dropdown-item" href="/detail/38">38</a>
                                                <a class="dropdown-item" href="/detail/39">39</a>
                                                <a class="dropdown-item" href="/detail/40">40</a>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success">Vintage</button>
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="/detail/41">41</a>
                                                <a class="dropdown-item" href="/detail/42">42</a>
                                                <a class="dropdown-item" href="/detail/43">43</a>
                                                <a class="dropdown-item" href="/detail/44">44</a>
                                                <a class="dropdown-item" href="/detail/45">45</a>
                                                <a class="dropdown-item" href="/detail/46">46</a>
                                                <a class="dropdown-item" href="/detail/47">47</a>
                                                <a class="dropdown-item" href="/detail/48">48</a>
                                                <a class="dropdown-item" href="/detail/49">49</a>
                                                <a class="dropdown-item" href="/detail/50">50</a>
                                                <a class="dropdown-item" href="/detail/51">51</a>
                                                <a class="dropdown-item" href="/detail/52">52</a>
                                                <a class="dropdown-item" href="/detail/53">53</a>
                                                <a class="dropdown-item" href="/detail/54">54</a>
                                                <a class="dropdown-item" href="/detail/55">55</a>
                                                <a class="dropdown-item" href="/detail/56">56</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="my-3">
                                    Main Features
                                    <small>Helmet</small>
                                    </h3>
                                    <hr>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="fa-ul">
                                                    <li><i class="fa-li fa fa-check-square"></i>100% ABS Matrial</li>
                                                    <li><i class="fa-li fa fa-check-square"></i>Anti Scratch</li>
                                                    <li><i class="fa-li fa fa-check-square"></i>Anti UV</li>
                                                    <li><i class="fa-li fa fa-check-square"></i>Automatic Double Visor</li>
                                                </ul>
                                            </div>

                                            <div class="col-6">
                                                <ul class="fa-ul">
                                                    <li><i class="fa-li fa fa-check-square"></i>Unbreakable Visor</li>
                                                    <li><i class="fa-li fa fa-check-square"></i>Comfrotable Padding</li>
                                                    <li><i class="fa-li fa fa-check-square"></i>Removable & Washable</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 product-share">
                                        <a href="#" class="text-gray">
                                            <i class="fab fa-facebook-square fa-2x"></i>
                                        </a>
                                        <a href="#" class="text-gray">
                                            <i class="fab fa-twitter-square fa-2x"></i>
                                        </a>
                                        <a href="#" class="text-gray">
                                            <i class="fas fa-envelope-square fa-2x"></i>
                                        </a>
                                        <a href="#" class="text-gray">
                                            <i class="fas fa-rss-square fa-2x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <nav class="w-100">
                                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                                        <a class="nav-item nav-link" id="product-1-tab" data-toggle="tab" href="#product-1" role="tab" aria-controls="product-1" aria-selected="false">Atas</a>
                                        <a class="nav-item nav-link" id="product-2-tab" data-toggle="tab" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">Dalam</a>
                                        <a class="nav-item nav-link" id="product-3-tab" data-toggle="tab" href="#product-3" role="tab" aria-controls="product-3" aria-selected="false">Terbuka</a>
                                        <a class="nav-item nav-link" id="product-4-tab" data-toggle="tab" href="#product-4" role="tab" aria-controls="product-4" aria-selected="false">Double Visor</a>
                                    </div>
                                </nav>
                                <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                        <div>
                                            <img src="{{url('img_helm/5/'.$data->image5)}}" width="400" height="300" class="img-fluid mx-auto d-block" alt="Product Image">
                                            <br>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-primary btn-block btn-lg" type="button">Tampak Atas</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                        <div>
                                            <img src="{{url('img_helm/6/'.$data->image6)}}" width="400" height="300" class="img-fluid mx-auto d-block" alt="Product Image">
                                            <br>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-primary btn-block btn-lg" type="button">Tampak Dalam</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                        <div>
                                            <img src="{{url('img_helm/7/'.$data->image7)}}" width="400" height="300" class="img-fluid mx-auto d-block" alt="Product Image">
                                            <br>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-primary btn-block btn-lg" type="button">Tampak Terbuka</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-3-tab">
                                        <div>
                                            <img src="{{url('img_helm/8/'.$data->image8)}}" width="400" height="300" class="img-fluid mx-auto d-block" alt="Product Image">
                                            <br>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button class="btn btn-primary btn-block btn-lg" type="button">Double Visor</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script_detail')
    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function () {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
            })
        })
    </script>
@endsection
