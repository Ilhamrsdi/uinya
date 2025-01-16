@extends('feeder::layouts.master')

@section('title')
    @lang('translation.dashboards')
@endsection

@section('css')
    <link href="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet"/>
@endsection

@section('content')
@include('feeder::components.breadcrumb', [
    'li_1' => 'Dashboards',
    'title' => 'Feeder Program Studi'
])


    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="align-items-lg-center flex-lg-row flex-column">
                            <div class="row">
                                <!-- Sidebar -->
                                <div class="col-md-3">
                                    <div class="menu-right">
                                        <livewire:menu-feeder />
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="col-md-9">
                                    <h4 class="mb-3">Feeder Program Studi</h4>

                                    <div class="table-responsive bg-white border shadow-sm rounded p-0">
                                        <div class="d-flex align-items-center justify-content-between mb-1 p-3">
                                            <div class="me-2 position-relative">
                                                <i class="ri-search-line position-absolute top-50 start-0 translate-middle-y ms-2"></i>
                                                <input type="text" id="searchInput" class="form-control ps-5" placeholder="Pencarian">
                                            </div>
                                            <div class="table-actions ms-auto d-flex align-items-center">
                                                <button class="btn btn-light me-2" onclick="refreshPage();">
                                                    <i class="ri-refresh-line"></i>
                                                </button>

                                                <button class="btn btn-primary" id="syncDataFeeder">
                                                    <i class="ri-refresh-line"></i> Sync Feeder
                                                </button>
                                            </div>
                                        </div>

                                        <table id="sourceTable" class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th><input type="checkbox" id="selectAllCheckbox"></th>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Nama Program Studi</th>
                                                    <th>Status</th>
                                                    <th>Jenjang</th>
                                                    <th>Sync Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             
                                                    <tr>

                                                        <td><input type="checkbox" class="selectCheckbox"></td>
                                                        <td>1</td>
                                                        <td>554011</td>
                                                        <td>
                                                        Teknologi Rekayasa Perangkat Lunak
                                                        </td>
                                                        <td>Active</td>
                                                        <td>D4</td>
                                                        <td>
                                                            <span> 
                                                                Sudah Sync
                                                            </span>

                                                        </td>
                                                    </tr>
                                            
                                            </tbody>
                                        </table>

                                        <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                                            <select id="rowCount" class="form-select w-auto">
                                                <option value="10">10 baris</option>
                                                <option value="25">25 baris</option>
                                                <option value="50">50 baris</option>
                                            </select>
                                            <nav>
                                                <ul id="pagination" class="pagination mb-0">
                                                    <!-- Pagination akan ditambahkan oleh JavaScript -->
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script>
    document.querySelector('#syncDataFeeder').addEventListener('click', function (e) {
        e.preventDefault();

        // Menampilkan SweetAlert untuk loading
        Swal.fire({
            title: 'Memuat Data...',
            text: 'Tunggu sebentar...',
            didOpen: () => Swal.showLoading()
        });

        // Fetch request ke endpoint dengan debug dd()
        fetch('{{ route("feeder.sync") }}', {
    method: 'GET',
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Content-Type': 'application/json'
    }
})
        .then(response => {
            // Tampilkan response sebagai teks untuk menangkap `dd()` jika ada
            return response.text();
        })
        .then(data => {
            // Periksa di console log untuk melihat output dari dd()
            console.log('Response:', data);

            try {
                // Coba parse data sebagai JSON jika dd() tidak aktif
                const jsonData = JSON.parse(data);

                Swal.fire(
                    jsonData.success ? 'Sukses!' : 'Gagal!',
                    jsonData.message || (jsonData.success ? 'Data berhasil disinkronkan.' : 'Gagal memuat data.'),
                    jsonData.success ? 'success' : 'error'
                ).then(() => {
                    if (jsonData.success) location.reload();
                });
            } catch (error) {
                // Jika gagal parse, tampilkan output dd() di SweetAlert
                Swal.fire({
                    title: 'Debug Data',
                    text: data,
                    icon: 'info',
                    width: '600px',
                    customClass: {
                        popup: 'overflow-auto' // Tambahkan scroll jika data dd terlalu panjang
                    }
                });
            }
        })
        .catch(error => {
            // Tangani kesalahan pada permintaan fetch
            console.error('Error:', error);
            Swal.fire('Kesalahan!', 'Terjadi masalah saat memuat data.', 'error');
        });
    });

    function refreshPage() {
        // Fungsi untuk merefresh halaman
        location.reload();
    }
</script> --}}

@endsection
