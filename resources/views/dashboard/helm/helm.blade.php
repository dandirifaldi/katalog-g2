@extends('dashboard.utama')
@section('item1','menu-open')
@section('link1','active')
@section('title','Panel')

@section('link_table')
   @include('dashboard.helm.link_table')
@endsection

@include('dashboard.helm.add')
@include('dashboard.helm.edit')
@include('dashboard.helm.delete')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card border-primary">
                <!-- -->
                <div class="card-header border-dark">
                      <h1 class="card-title" style="float:left">Master List Helm G2 </h1>
                      <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                            </button>
                            <a class="btn btn-success" href=""  data-toggle="modal" data-target="#modal-add">
                                <span data-toggle="tooltip" data-placement="top" title="Tambah Data">
                                    <i class="fas fa-plus" aria-hidden="true"></i>
                                </span>
                            </a>
                      </div>   
                  </div> 
                <!-- --> 
                <div class="card-body border-dark">
                    <table id="1" class="table table-bordered border-dark table-hover table-responsive text-nowrap width-auto">
                        <thead class="bg-dark">
                            <tr>
                                <th>ID</th>
                                <th width="40%" style="vertical-align: middle; text-align: center;">Nama Helm</th>
                                <th style="vertical-align: middle; text-align: center;">Qty</th>
                                <th style="vertical-align: middle; text-align: center;">Updated</th>
                                <th style="vertical-align: middle; text-align: center;">Kategori</th>
                                <th style="vertical-align: middle; text-align: center;">Type</th>
                                <th style="vertical-align: middle; text-align: center;">Warna</th>
                                <th style="vertical-align: middle; text-align: center;">Type Warna</th>
                                <th style="vertical-align: middle; text-align: center;">Visor</th>
                                <th style="vertical-align: middle; text-align: center;">Type Visor</th>
                                <th style="vertical-align: middle; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                            @foreach ($product as $data)
                                <tr onclick="top.location.href='/helm/detail/{{ $data->id_helm }}">
                                    <td>{{ $data->id_helm}}</td>
                                    <td style="text-align:left;">{{ $data->nama_helm}}</td>
                                    <td>{{ $data->qty}} .Pcs</td>
                                    <td>{{ $data->updated_at}}</td>
                                    <td>{{ $data->kategori}}</td>
                                    <td>{{ $data->type}}</td>
                                    <td>{{ $data->warna}}</td>
                                    <td>{{ $data->type_warna}}</td>
                                    <td>{{ $data->visor}}</td>
                                    <td>{{ $data->type_visor}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/helm/detail/{{ $data->id_helm }}">
                                            <span data-toggle="tooltip" data-placement="top" title="Detail Data">
                                                <i class="fa fa-indent" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                        <!-- -->
                                        <a class="btn btn-warning" href=""  data-toggle="modal"  data-target="#modal-edit{{ $data->id_helm }}">
                                            <span data-toggle="tooltip" data-placement="top" title="Edit Data">
                                                <i class="fas fa-pencil-alt" style="color:#FFFFFF;" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                        <!-- -->
                                        <a class="btn btn-danger" href="" data-toggle="modal" data-target="#modal-delete{{ $data->id_helm }}">
                                            <span data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('add')
@yield('edit')
@yield('delete')
@include('sweetalert::alert')
@endsection

@section('script_table')
   @include('dashboard.helm.script_table')
@endsection