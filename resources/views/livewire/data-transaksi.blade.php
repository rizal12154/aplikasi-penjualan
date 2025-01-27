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
                <th>No</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Kasir</th>
                <th>Total Pembayaran</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $get)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $get->tanggal->format('d-m-Y') }}</td>
                    <td>{{ $get->pelanggan->nama }}</td>
                    <td>{{ $get->kasir->nama }}</td>
                    <td>Rp {{ number_format($get->total_pembayaran, 0, ',', '.') }}</td>
                    <td>{{ $get->status }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ri-more-2-line"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="ri-pencil-line me-1"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-7-line me-1"></i>
                                    Hapus</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $transaksi->links() }}
</div>
