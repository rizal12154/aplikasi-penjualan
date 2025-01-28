<div>
    <h3>Laporan Penjualan</h3>
    <div class="d-flex gap-2 mb-3">
        <input type="date" wire:model="startDate" class="form-control">
        <input type="date" wire:model="endDate" class="form-control">
    </div>
    <div wire:poll.60s>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No. Nota</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $trx)
                    <tr>
                        <td>{{ $trx->id }}</td>
                        <td>{{ $trx->tanggal }}</td>
                        <td>{{ $trx->pelanggan ? $trx->pelanggan->nama : 'Pelanggan Tidak Diketahui' }}</td>
                        <td>Rp {{ number_format($trx->total_harga, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $transaksi->links() }}
    </div>
</div>
