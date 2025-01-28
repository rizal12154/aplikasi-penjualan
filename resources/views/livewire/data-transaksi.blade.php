<div>
    <input type="text" wire:model="search" placeholder="Cari nama pelanggan..." class="form-control mb-3">
    <select wire:model="status" class="form-control mb-3">
        <option value="">Semua Status</option>
        <option value="pending">Pending</option>
        <option value="success">Success</option>
        <option value="failed">Failed</option>
    </select>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No. Nota</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $trx)
                <tr>
                    <td>{{ $trx->id }}</td>
                    <td>{{ $trx->tanggal }}</td>
                    <td>{{ $trx->pelanggan ? $trx->pelanggan->nama : 'Pelanggan Tidak Diketahui' }}</td>
                    <td>Rp {{ number_format($trx->total_harga, 0, ',', '.') }}</td>
                    <td>{{ $trx->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $transaksi->links() }}
</div>
