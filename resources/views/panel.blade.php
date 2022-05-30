@extends('layout.v_utama')

@section('content')
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card border-primary">
                <!-- -->
                <div class="card-header border-primary">
                      <h1 class="card-title" style="float:left">Master List Helm G2 </h1>
                      <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                            </button>
                            <a href="/" class="btn btn-primary" ><i class="fas fa-arrow-left fa-lg"></i> Back To Home</a>
                      </div>   
                  </div> 
                <!-- --> 
                <div class="card-body border-dark">
                    <table id="1" class="table table-bordered border border-primary table-hover table-striped table-responsive text-nowrap width-auto">
                        <thead class="bg-dark">
                            <tr >
                                <th>ID</th>
                                <th style="vertical-align: middle; text-align: center;">Nama Helm</th>
                                <th style="vertical-align: middle; text-align: center;">Qty</th>
                                <th style="vertical-align: middle; text-align: center;">Updated</th>
                                <th style="vertical-align: middle; text-align: center;">Kategori</th>
                                <th style="vertical-align: middle; text-align: center;">Type</th>
                                <th style="vertical-align: middle; text-align: center;">Warna</th>
                                <th style="vertical-align: middle; text-align: center;">Type Warna</th>
                                <th style="vertical-align: middle; text-align: center;">Visor</th>
                                <th style="vertical-align: middle; text-align: center;">Type Visor</th>
                                <th width="10%" style="vertical-align: middle; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                            @foreach ($product as $data)
                                <tr onclick="top.location.href='/panel/detail/{{ $data->id_helm }}'">
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
                                        <a class="btn btn-primary btn-sm" href="/panel/detail/{{ $data->id_helm }}">
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
</section>
@endsection