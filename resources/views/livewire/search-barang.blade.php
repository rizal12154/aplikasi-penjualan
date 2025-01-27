<div>
    <input type="text" wire:model="query" class="form-control" placeholder="Cari Barang">
    @if (!empty($barangList))
        <ul class="dropdown-menu show">
            @foreach ($barangList as $barang)
                <li class="dropdown-item"
                    wire:click="selectBarang({{ $barang['id'] }}, '{{ addslashes($barang['kode_barang']) }}', '{{ addslashes($barang['nama_barang']) }}', {{ $barang['harga_jual'] }})">
                    {{ $barang['kode_barang'] }} - {{ $barang['nama_barang'] }}
                </li>
            @endforeach
        </ul>
    @endif
</div>
