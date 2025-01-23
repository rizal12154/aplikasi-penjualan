<!-- Core JS -->
<script src="{{ asset('') }}assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('') }}assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/hammer/hammer.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/i18n/i18n.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="{{ asset('') }}assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('') }}assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/swiper/swiper.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/select2/select2.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/moment/moment.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/@form-validation/popular.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/@form-validation/bootstrap5.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/@form-validation/auto-focus.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/select2/select2.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/quill/katex.js"></script>
<script src="{{ asset('') }}assets/vendor/libs/quill/quill.js"></script>


<!-- Main JS -->
<script src="{{ asset('') }}assets/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('') }}assets/js/dashboards-analytics.js"></script>
<script src="{{ asset('') }}assets/js/app-ecommerce-product-list.js"></script>
<script src="{{ asset('') }}assets/js/app-ecommerce-customer-all.js"></script>
<script src="{{ asset('') }}assets/js/app-ecommerce-order-list.js"></script>
<script src="{{ asset('') }}assets/js/app-ecommerce-category-list.js"></script>

<!-- Helpers -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const barangList = document.getElementById('barang-list');
        const totalElement = document.getElementById('total');

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.sub-total').forEach(subTotalElement => {
                total += parseFloat(subTotalElement.textContent || 0);
            });
            totalElement.textContent = total;
        }

        function addRow() {
            const row = document.createElement('tr');
            row.innerHTML = `
                    <td></td>
                    <td><input type="text" class="form-control kode-barang" placeholder="Kode / Nama Barang"></td>
                    <td class="nama-barang"></td>
                    <td class="harga">0</td>
                    <td><input type="number" class="form-control qty" min="1" value="1"></td>
                    <td class="sub-total">0</td>
                    <td><button class="btn btn-danger btn-sm delete-row">X</button></td>
                `;
            barangList.appendChild(row);
            updateRowNumbers();
        }

        function updateRowNumbers() {
            document.querySelectorAll('#barang-list tr').forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
        }

        barangList.addEventListener('input', function(e) {
            if (e.target.classList.contains('qty')) {
                const row = e.target.closest('tr');
                const harga = parseFloat(row.querySelector('.harga').textContent || 0);
                const qty = parseFloat(e.target.value || 0);
                const subTotal = harga * qty;
                row.querySelector('.sub-total').textContent = subTotal;
                updateTotal();
            }
        });

        barangList.addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-row')) {
                e.target.closest('tr').remove();
                updateRowNumbers();
                updateTotal();
            }
        });

        document.getElementById('add-row').addEventListener('click', addRow);

        // Initial call to set up row numbers
        updateRowNumbers();
    });
</script>
<script>
    async function searchBarang(input) {
        const query = input.value;
        if (query.length < 2) return;

        const response = await fetch(`/search-barang?query=${query}`);
        const data = await response.json();

        const dropdown = input.nextElementSibling.querySelector('.dropdown-menu');
        dropdown.innerHTML = '';
        dropdown.classList.remove('d-none');

        data.forEach((item) => {
            const li = document.createElement('li');
            li.classList.add('dropdown-item');
            li.textContent = `${item.nama_barang} (${item.kode_barang}) - Rp. ${item.harga_jual}`;
            li.onclick = () => selectBarang(input, item);
            dropdown.appendChild(li);
        });
    }

    function selectBarang(input, item) {
        const row = input.closest('tr');
        input.value = `${item.nama_barang} (${item.kode_barang})`;
        input.dataset.id = item.id;
        row.querySelector('.nama-barang').textContent = item.nama_barang;
        row.querySelector('.harga').textContent = item.harga_jual;
        row.querySelector('.qty').value = 1;
        row.querySelector('.sub-total').textContent = item.harga_jual;
        row.querySelector('.dropdown-menu').classList.add('d-none');
        updateTotal();
    }
</script>
<script>
    document.getElementById('transaksi-form').addEventListener('submit', async function(e) {
        e.preventDefault();

        const items = [];
        document.querySelectorAll('#barang-list tr').forEach((row) => {
            const id = row.querySelector('.kode-barang').dataset.id;
            const jumlah = row.querySelector('.qty').value;
            if (id) {
                items.push({
                    id,
                    jumlah
                });
            }
        });

        if (items.length === 0) {
            alert('Tambahkan barang terlebih dahulu!');
            return;
        }

        const response = await fetch('/store-transaksi', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            },
            body: JSON.stringify({
                items
            }),
        });

        const data = await response.json();
        if (data.success) {
            alert('Transaksi berhasil disimpan!');
            window.location.href = `/nota/${data.transaksi_id}`;
        } else {
            alert('Terjadi kesalahan. Coba lagi.');
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const barangList = document.getElementById('barang-list');
        const totalElement = document.getElementById('total');

        // Fungsi pencarian barang
        async function searchBarang(input) {
            const query = input.value;
            const dropdown = input.nextElementSibling;

            if (query.length > 2) {
                const response = await fetch(`/search-barang?query=${query}`);
                const results = await response.json();

                dropdown.innerHTML = results
                    .map(
                        (item) =>
                        `<li onclick="selectBarang(this, ${item.id}, '${item.nama_barang}', ${item.harga_jual})">${item.kode_barang} - ${item.nama_barang}</li>`
                    )
                    .join('');
                dropdown.classList.remove('d-none');
            } else {
                dropdown.classList.add('d-none');
            }
        }

        // Pilih barang dari hasil pencarian
        function selectBarang(element, id, nama, harga) {
            const row = element.closest('tr');
            row.querySelector('.kode-barang').value = nama;
            row.querySelector('.kode-barang').dataset.id = id;
            row.querySelector('.nama-barang').innerText = nama;
            row.querySelector('.harga').innerText = harga;
            updateSubtotal(row.querySelector('.qty'));
        }

        // Hitung subtotal
        function updateSubtotal(input) {
            const row = input.closest('tr');
            const harga = parseFloat(row.querySelector('.harga').innerText);
            const qty = parseInt(input.value) || 0;
            const subtotal = harga * qty;
            row.querySelector('.sub-total').innerText = subtotal;

            updateTotal();
        }

        // Hitung total keseluruhan
        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.sub-total').forEach((el) => {
                total += parseFloat(el.innerText) || 0;
            });
            totalElement.innerText = total;
        }

        // Tambahkan baris baru
        function addRow() {
            const rowCount = barangList.querySelectorAll('tr').length + 1;
            const row = `
            <tr>
                <td>${rowCount}</td>
                <td>
                    <input type="text" class="form-control kode-barang" placeholder="Kode / Nama Barang" data-id="" oninput="searchBarang(this)">
                    <ul class="dropdown-menu d-none"></ul>
                </td>
                <td class="nama-barang"></td>
                <td class="harga">0</td>
                <td><input type="number" class="form-control qty" min="1" value="1" oninput="updateSubtotal(this)"></td>
                <td class="sub-total">0</td>
                <td><button class="btn btn-danger btn-sm delete-row" onclick="removeRow(this)">X</button></td>
            </tr>`;
            barangList.insertAdjacentHTML('beforeend', row);
        }

        // Hapus baris
        function removeRow(button) {
            button.closest('tr').remove();
            updateTotal();
        }

        // Simpan transaksi
        async function saveTransaction() {
            const items = Array.from(barangList.querySelectorAll('tr')).map((row) => ({
                id: row.querySelector('.kode-barang').dataset.id,
                jumlah: parseInt(row.querySelector('.qty').value),
            }));

            const response = await fetch('/store-transaksi', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                },
                body: JSON.stringify({
                    items
                }),
            });

            if (response.ok) {
                alert('Transaksi berhasil disimpan!');
                location.reload();
            } else {
                alert('Terjadi kesalahan saat menyimpan transaksi.');
            }
        }

        window.searchBarang = searchBarang;
        window.selectBarang = selectBarang;
        window.updateSubtotal = updateSubtotal;
        window.addRow = addRow;
        window.removeRow = removeRow;
        window.saveTransaction = saveTransaction;
    });
</script>
