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
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Total Pembayaran</th>
                    <th>Detail Barang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tanggal->format('d-m-Y') }}</td>
                        <td>{{ $item->pelanggan->nama }}</td>
                        <td>Rp {{ number_format($item->total_pembayaran, 0, ',', '.') }}</td>
                        <td>
                            <ul>
                                @foreach ($item->detailTransaksi as $detail)
                                    <li>
                                        {{ $detail->barang->nama }} ({{ $detail->kuantitas }} x Rp
                                        {{ number_format($detail->subtotal / $detail->kuantitas, 0, ',', '.') }})
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $transaksi->links() }}
    </div>
</div>
