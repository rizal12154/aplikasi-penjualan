<div>
    <input type="text" wire:model="search" placeholder="Cari nama pelanggan..." class="form-control mb-3">
    <div wire:poll.5s>
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
