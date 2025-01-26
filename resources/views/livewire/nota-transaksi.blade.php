<div id="nota">
    <h3>Nota Transaksi</h3>
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
</div>

<button onclick="printNota()">Print Nota</button>

<script>
    function printNota() {
        const notaContent = document.getElementById('nota').innerHTML;
        const originalContent = document.body.innerHTML;

        document.body.innerHTML = notaContent;
        window.print();
        document.body.innerHTML = originalContent;
    }
</script>
