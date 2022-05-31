@section('title','| Katalog')
@section('cover','Katalog')
@extends('layout.v_utama')

@section('content')
    @include('layout.v_slider')
    @include('layout.v_carousel')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-primary">
                <!-- -->
                <div class="card-header border-primary">
                    <h1 class="card-title" style="float:left">Masterr List Helm G2 </h1>
                    <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                            </button>
                    </div>
                </div>
                <!-- -->
                <div class="card-body border-primary">
                    <table id="2" class="table table-bordered border border-primary table-hover table-responsive text-nowrap width-auto table-striped">
                        <thead class="bg-primary">
                            <tr>
                                <th>ID</th>
                                <th width="40%" style="vertical-align: middle; text-align: center;">Nama Helm</th>
                                <th width="30%" style="vertical-align: middle; text-align: center;">Stock In Warehouse</th>
                                <th width="20%" style="vertical-align: middle; text-align: center;">Las Update Stock</th>
                                <th width="10%" style="vertical-align: middle; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                            @foreach ($product as $data)
                                <tr onclick="top.location.href='/detail/{{ $data->id_helm }}'">
                                    <td>{{ $data->id_helm}}</td>
                                    <td style="text-align:left;">{{ $data->nama_helm}}</td>
                                    <td>{{ $data->qty}} .Pcs</td>
                                    <td>{{ $data->updated_at}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="/detail/{{ $data->id_helm }}">
                                            <span data-toggle="tooltip" data-placement="top" title="Detail Data">
                                                <i class="fa fa-indent" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                        <!-- -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
