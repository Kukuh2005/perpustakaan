@foreach($transaksi as $item)
<div class="modal fade" tabindex="-1" id="edit{{$item->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white">Edit Data Transaksi</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('transaksi.update', $item->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Anggota</label>
                                <select name="id_anggota" class="form-control" id="" required>
                                    <option value="">Pilih Anggota...</option>
                                    @foreach($anggota as $ag)
                                    <option value="{{$ag->id}}" {{$ag->id == $item->id_anggota ? 'selected' : ''}}>{{$ag->nama_anggota}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Buku</label>
                                <select name="id_pustaka" class="form-control" id="" required>
                                    <option value="">Pilih Buku...</option>
                                    @foreach($buku as $bk)
                                    <option value="{{$bk->id}}" {{$bk->id == $item->id_pustaka ? 'selected' : ''}}>{{$bk->judul_pustaka}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Pinjam</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_pinjam" value="{{$item->tgl_pinjam}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="tgl_kembali" value="{{$item->tgl_kembali}}" min="{{$item->tgl_pinjam}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <select name="fp" class="form-control" id="" required>
                                    <option value="">Pilih Status</option>
                                    <option value="0" {{$item->fp == 0 ? 'selected' : ''}}>Dipinjam</option>
                                    <option value="1" {{$item->fp == 1 ? 'selected' : ''}}>Selesai</option>
                                    <option value="2" {{$item->fp == 2 ? 'selected' : ''}}>Hilang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="rgl_pengembalian" value="<?php echo date('Y-m-d') ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="">{{$item->keterangan}}</textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach 
