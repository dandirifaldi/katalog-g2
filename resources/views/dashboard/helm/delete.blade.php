@section('delete')
    @foreach ($product as $data)
        <div class="modal fade" id="modal-delete{{ $data->id_helm }}">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-body  justify-content-between">
                        <br>
                        <center><i class="fas fa-exclamation-triangle fa-7x"></i></center>
                        <br>
                        <center><p>Apakah anda yakin Menghapus Item Dengan ID : {{ $data->id_helm }}</p></center>
                        <center><p>{{ $data->nama_helm }}</p></center>
                    </div>
                    <div class="modal-footer border-danger justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">   Cancel</button>
                        <a href="/helm/delete/{{ $data->id_helm }}" class="btn btn-outline-light">  Yes</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection