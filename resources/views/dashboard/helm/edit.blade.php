@section('edit')
<!-- Modal Edit-->
@foreach($product as $data)
<div class="modal fade" id="modal-edit{{ $data->id_helm }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-warning">
        <div class="modal-header border-warning">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Helm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- -->
        <form action="/helm/update/{{$data->id_helm}}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label" for="inputSuccess">Id Helm</label>
                            <input name="id_helm" class="form-control" value="{{ $data->id_helm}}" readonly> 
                        </div>
                    
                        <div class="form-group">
                            <label  class="col-form-label" for="inputSuccess">Nama Helm</label>
                            <input name="nama_helm" class="form-control @error('nama_helm') is-invalid @enderror @error('nama_helm') is-valid @enderror"  value="{{ $data->nama_helm }}">
                            <div class="text-danger">
                                @error('nama_helm')
                                        {{ $message }}
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label  class="col-form-label" for="inputSuccess">Qty</label>
                            <input name="qty" class="form-control @error('qty') is-invalid @enderror @error('qty') is-valid @enderror" value="{{ $data->qty }}">
                            <div class="text-danger">
                                @error('qty')
                                        {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-outline-warning btn-lg btn-block">  Update</button>
                                </div>        
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endforeach
<!-- End Modal EdIT-->
@endsection