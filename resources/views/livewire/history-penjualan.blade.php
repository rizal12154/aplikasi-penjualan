<div>
    <div wire:poll.5s>
        <input type="text" wire:model="search" placeholder="Cari nama pelanggan..." class="form-control mb-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No. Nota</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Total Harga</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $trx)
                    <tr>
                        <td>{{ $trx->id }}</td>
                        <td>{{ $trx->tanggal }}</td>
                        <td>{{ $trx->pelanggan ? $trx->pelanggan->nama : 'Pelanggan Tidak Diketahui' }}</td>
                        <td>Rp {{ number_format($trx->total_harga, 0, ',', '.') }}</td>
                        <td>
                            <button class="btn btn-info btn-sm" wire:click="lihatDetail({{ $trx->id }})">Lihat
                                Detail</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $transaksi->links() }}
    </div>
</div>
