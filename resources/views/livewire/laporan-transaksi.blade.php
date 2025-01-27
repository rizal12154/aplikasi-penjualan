<div>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Laporan Transaksi</h2>

        <form wire:submit.prevent="downloadLaporan" class="mb-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block mb-2">Tanggal Mulai</label>
                    <input type="date" wire:model="startDate" class="w-full border rounded p-2">
                    @error('startDate')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2">Tanggal Selesai</label>
                    <input type="date" wire:model="endDate" class="w-full border rounded p-2">
                    @error('endDate')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block mb-2">Pilih Tipe File</label>
                    <select wire:model="tipeFile" class="w-full border rounded p-2">
                        <option value="pdf">PDF</option>
                        <option value="excel">Excel</option>
                        <option value="csv">CSV</option>
                    </select>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Download Laporan
                </button>
            </div>
        </form>
    </div>
</div>
