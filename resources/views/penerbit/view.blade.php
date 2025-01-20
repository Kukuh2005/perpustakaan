@foreach($penerbit as $penerbit)
<div class="modal fade" tabindex="-1" role="dialog" id="view{{ $penerbit->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">
                    <i class="fas fa-info-circle"></i> Detail Penerbit - <span class="font-weight-bold align-middle">{{ $penerbit->kode_penerbit }}</span>
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Informasi Umum -->
                <div class="border-bottom mb-3 pb-2">
                    <h6 class="text-info"><i class="fas fa-id-card"></i> Informasi Umum</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Kode Penerbit:</strong> {{ $penerbit->kode_penerbit }}</p>
                            <p><strong>Nama Penerbit:</strong> {{ $penerbit->nama_penerbit }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Alamat:</strong> {{ $penerbit->alamat_penerbit }}</p>
                        </div>
                    </div>
                </div>

                <!-- Informasi Kontak -->
                <div class="border-bottom mb-3 pb-2">
                    <h6 class="text-warning"><i class="fas fa-phone"></i> Informasi Kontak</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Telepon:</strong> {{ $penerbit->no_telp }}</p>
                            <p><strong>Email:</strong> {{ $penerbit->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Website:</strong> 
                                <a href="{{ $penerbit->website }}" target="_blank">{{ $penerbit->website }}</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Informasi Tambahan -->
                <div class="border-bottom mb-3 pb-2">
                    <h6 class="text-success"><i class="fas fa-info"></i> Informasi Tambahan</h6>
                    <div class="row">
                        <div class="col-md-12">
                            <p><strong>Kontak Tambahan:</strong> {{ $penerbit->kontak ?? 'Tidak ada informasi kontak tambahan' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Keterangan -->
                <div>
                    <h6 class="text-dark"><i class="fas fa-sticky-note"></i> Keterangan</h6>
                    <p>{{ $penerbit->keterangan ?? 'Tidak ada keterangan' }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach