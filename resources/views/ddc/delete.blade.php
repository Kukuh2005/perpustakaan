@foreach($ddc as $item)
<div class="modal fade" tabindex="-1" id="delete{{$item->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Hapus Data {{$item->ddc}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('ddc.destroy', $item->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <p class="text-center">Hapus Data <span class="text-danger">{{$item->ddc}}</span>?. <br> Data yang sudah dihapus tidak dapat dikembalikan.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach