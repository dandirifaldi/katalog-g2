@section('add')
<!-- Modal Add-->
<div class="modal fade" id="modal-add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-success">
        <div class="modal-header border-success">
            <h5 class="modal-title" id="exampleModalLabel">Add Data Helm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- -->
        <form class="was-validate" action="/helm/insert" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                @csrf
                <div class="row">
                    <div class="col-sm-12">

                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">ID</span>
                                </div>
                                <div class="custom-file">
                                    <input name="id_helm" class="form-control @error('id_helm') is-invalid @enderror @error('id_helm') is-valid @enderror" value="{{ old('id') }}" placeholder="Input ID Helem">
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('id_helm')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Nama</span>
                                </div>
                                <div class="custom-file">
                                    <input name="nama_helm" class="form-control @error('nama_helm') is-invalid @enderror @error('nama_helm') is-valid @enderror" value="{{ old('nama_helm') }}" placeholder="Input Nama Helm">
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('nama_helm')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Qty</span>
                                </div>
                                <div class="custom-file">
                                    <input name="qty" class="form-control @error('qty') is-invalid @enderror @error('qty+') is-valid @enderror" value="{{ old('qty') }}" placeholder="Input Qty Helm">
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('qty')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        
                        
                        <div class="form-group">
                            <select class="form-control @error('kategori') is-invalid @enderror @error('kategori') is-valid @enderror" name="kategori" >
                                <option selected disabled>Pilih Kategori Helm</option>
                                    <option>Exterminator</option>
                                    <option>Optimax</option>
                                    <option>Centrino</option>
                                    <option>Bogo</option>
                            </select>
                            <div class="text-danger">
                                @error('kategori')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="type" class="form-control @error('type') is-invalid @enderror @error('type') is-valid @enderror">
                                <option selected disabled>Pilih Type Helm</option>
                                    <option>Solid</option>
                                    <option>Motif</option>
                            </select>
                            <div class="text-danger">
                                @error('type')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Warna</span>
                                </div>
                                <div class="custom-file">
                                    <input name="warna" class="form-control @error('warna') is-invalid @enderror @error('warna') is-valid @enderror" value="{{ old('warna') }}" placeholder="Input Type Helm">
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('warna')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="type_warna" class="form-control @error('type_warna') is-invalid @enderror @error('type_warna') is-valid @enderror">
                                <option selected disabled>Pilih Type Warna Helm</option>
                                    <option>Doft</option>
                                    <option>Gloss</option>
                            </select>
                            <div class="text-danger">
                                @error('type_warna')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="visor" class="form-control @error('visor') is-invalid @enderror @error('visor') is-valid @enderror">
                                <option selected disabled>Pilih Jenis Visor</option>
                                    <option>Single Visor</option>
                                    <option>Double Visor</option>
                            </select>
                            <div class="text-danger">
                                @error('visor')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Type Visor</span>
                                </div>
                                <div class="custom-file">
                                    <input name="type_visor" class="form-control @error('type_visor') is-invalid @enderror @error('type_visor') is-valid @enderror" value="{{ old('type_visor') }}" placeholder="Input Type Visor Helm">
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('type_visor')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak Kiri</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image1" class=" custom-file-input form-control @error('image1') is-invalid @enderror @error('image1') is-valid @enderror"
                                        value="{{ old('image1') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image1')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak Depan</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image2" class=" custom-file-input form-control @error('image2') is-invalid @enderror @error('image2') is-valid @enderror"
                                        value="{{ old('image2') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image2')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak Belakang</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image3" class=" custom-file-input form-control @error('image3') is-invalid @enderror @error('image3') is-valid @enderror" 
                                        value="{{ old('image3') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image3')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak Kanan</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image4" class=" custom-file-input form-control @error('image4') is-invalid @enderror @error('image4') is-valid @enderror" 
                                        value="{{ old('image4') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image4')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak Atas</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image5" class=" custom-file-input form-control @error('image5') is-invalid @enderror @error('image5') is-valid @enderror" 
                                        value="{{ old('image5') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image5')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak Dalam</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image6" class=" custom-file-input form-control @error('image6') is-invalid @enderror @error('image6') is-valid @enderror"
                                        value="{{ old('image6') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image6')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak Terbuka</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image7" class=" custom-file-input form-control @error('image7') is-invalid @enderror @error('image7') is-valid @enderror"
                                        value="{{ old('image7') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image7')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Tampak DV</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" id="exampleInputFile"
                                        name="image8" class=" custom-file-input form-control @error('image8') is-invalid @enderror @error('image8') is-valid @enderror"
                                        value="{{ old('image8') }}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('image8')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-outline-success btn-lg btn-block">  Save</button>
                                </div>        
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-success btn-lg btn-block" data-dismiss="modal">Close</button>
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
<!-- End Modal Add-->
@endsection