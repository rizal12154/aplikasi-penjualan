<div>
    <div id="nota-area">
        <div class="row mb-3">
            <!-- Informasi Nota -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Informasi Nota</div>
                    <div class="card-body mt-3">
                        <p><strong>No. Nota:</strong> {{ uniqid() }}</p>
                        <p><strong>Tanggal:</strong> {{ now()->format('Y-m-d H:i:s') }}</p>
                        <p><strong>Kasir:</strong> {{ auth()->user()->name }}</p>
                    </div>
                </div>
            </div>

            <!-- Informasi Pelanggan -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Informasi Pelanggan</div>
                    <div class="card-body mt-3">
                        <div class="mb-3">
                            <label for="pelanggan" class="form-label">Pelanggan</label>
                            <select wire:model="pelanggan" id="pelanggan" class="form-select">
                                <option value="0">-- Umum --</option>
                                <option value="1">Pelanggan 1</option>
                                <option value="2">Pelanggan 2</option>
                            </select>
                        </div>
                        <p><strong>Telp / HP:</strong> Tidak ada</p>
                        <p><strong>Alamat:</strong> Tidak ada</p>
                        <p><strong>Info Lain:</strong> Tidak ada</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Transaksi -->
        <div class="card">
            <div class="card-header bg-primary text-white">Penjualan - Transaksi</div>
            <div class="card-body mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <input type="text" class="form-control"
                                        wire:input="updateItem({{ $index }}, 'kode_barang', $event.target.value)"
                                        value="{{ $item['kode_barang'] }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control"
                                        wire:input="updateItem({{ $index }}, 'nama_barang', $event.target.value)"
                                        value="{{ $item['nama_barang'] }}">
                                </td>
                                <td>
                                    <input type="number" class="form-control"
                                        wire:input="updateItem({{ $index }}, 'harga', $event.target.value)"
                                        value="{{ $item['harga'] }}">
                                </td>
                                <td>
                                    <input type="number" class="form-control"
                                        wire:input="updateItem({{ $index }}, 'qty', $event.target.value)"
                                        value="{{ $item['qty'] }}">
                                </td>
                                <td>Rp {{ number_format($item['subtotal'], 0, ',', '.') }}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm"
                                        wire:click="removeItem({{ $index }})">X</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary mt-3" wire:click="addItem">+ Baris Baru (F7)</button>
            </div>
            <div class="card-footer">
                <p>Total: Rp {{ number_format($total, 0, ',', '.') }}</p>
                <textarea wire:model="catatan" class="form-control" placeholder="Catatan Transaksi (Jika Ada)"></textarea>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="d-flex justify-content-between mt-3">
        <div></div>
        <div>
            <label for="bayar">Bayar (F8):</label>
            <input type="number" id="bayar" wire:model.debounce.500ms="bayar" class="form-control mb-2">
            <p>Kembali: Rp {{ number_format($kembali, 0, ',', '.') }}</p>
            <button class="btn btn-warning" onclick="printNota()">Cetak (F9)</button>
            <button class="btn btn-success" wire:click="saveTransaction">Simpan (F10)</button>
        </div>
    </div>

    <!-- Nota Transaksi untuk Cetak -->
    <div id="nota" style="display: none;">
        <h3>Nota Transaksi</h3>
        @if ($transaksi)
            <p><strong>ID Transaksi:</strong> {{ $transaksi->id }}</p>
            <p><strong>Tanggal:</strong> {{ $transaksi->created_at }}</p>
            <table style="width: 100%; border-collapse: collapse;" border="1">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi->details as $detail)
                        <tr>
                            <td>{{ $detail->barang->nama_barang }}</td>
                            <td>{{ $detail->kuantitas }}</td>
                            <td>Rp {{ number_format($detail->barang->harga_jual, 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" align="right"><strong>Total:</strong></td>
                        <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
                    </tr>
                </tfoot>
            </table>
        @else
            <p>Transaksi belum tersedia untuk dicetak.</p>
        @endif
    </div>

    <script>
        function printNota() {
            const notaContent = document.getElementById('nota').innerHTML;
            const originalContent = document.body.innerHTML;

            document.body.innerHTML = notaContent;
            window.print();
            document.body.innerHTML = originalContent;
            window.location.reload(); // Reload untuk kembali ke halaman utama
        }
    </script>
</div>
