<div>
    <input type="text" wire:model="query" class="form-control" placeholder="Cari Barang">
    <ul class="dropdown-menu {{ empty($barangList) ? 'd-none' : '' }}">
        @foreach ($barangList as $barang)
            <li class="dropdown-item"
                wire:click="selectBarang({{ $barang['id'] }}, '{{ $barang['kode_barang'] }}', '{{ $barang['nama_barang'] }}', {{ $barang['harga_jual'] }})">
                {{ $barang['kode_barang'] }} - {{ $barang['nama_barang'] }}
            </li>
        @endforeach
    </ul>
</div>
