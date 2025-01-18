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
@component('feeder::components.breadcrumb')
    @slot('li_1')
        Dashboard
    @endslot
    @slot('title')
        Laporan
    @endslot
    @slot('title2')
        Feeder PDDIKTI
    @endslot
@endcomponent


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
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Feeder Program Studi</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div id="customerList">
                                                <div class="row g-4 mb-3">
                                                    <div class="col-sm d-flex align-items-center">
                                                        <!-- Search Box on the left -->
                                                        <form method="GET" action="" class="d-flex">
                                                            <div class="search-box">
                                                                <input type="text" class="form-control search" name="search" placeholder="Search..." value="{{ request('search') }}">
                                                                <i class="ri-search-line search-icon"></i>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary ms-2">Cari</button>
                                                        </form>


                                                    </div>
                                                    <div class="col-sm-auto d-flex align-items-center justify-content-end">
                                                        <!-- Close Button -->
                                                        <button class="btn btn-soft-dark me-2" id="closeButton" style="display:none;">
                                                            <i class="ri-close-line"></i>
                                                        </button>

                                                        <!-- Trash Button -->
                                                        <button class="btn btn-soft-warning me-2" id="trashButton" style="display:none;">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </button>

                                                        <!-- Refresh Button -->
                                                        <button class="btn btn-soft-info me-2"onclick="refreshPage();" >
                                                            <i class="ri-refresh-line"></i>
                                                        </button>


                                                        <!-- Add Button -->
                                                        <button class="btn btn-primary" id="syncDataFeeder">
                                                            <i class="ri-refresh-line"></i> Sync Feeder
                                                        </button>
                                                    </div>


                                                </div>

                                                <div class="table-responsive table-card mt-3 mb-1">
                                                    <table class="table align-middle table-nowrap">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="width: 50px;">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                    </div>
                                                                </th>
                                                                <th>No</th>
                                                                <th>Kode</th>
                                                                <th>Nama Program Studi</th>
                                                                <th>Status</th>
                                                                <th>Jenjang</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            @foreach($studyPrograms as $index => $studyProgram)
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input selectCheckbox" type="checkbox" id="check{{ $index }}">
                                                                        </div>
                                                                    </td>
                                                                    <td>{{ $index + 1 }}</td>
                                                                    <td>{{ $studyProgram->code ?? 'No Code' }}</td>
                                                                    <td>
                                                                        @if($studyProgram && $studyProgram->education_level_id)
                                                                            @if($studyProgram->education_level_id == 22)
                                                                                D3 - {{ $studyProgram->name }}
                                                                            @elseif($studyProgram->education_level_id == 23)
                                                                                D4 - {{ $studyProgram->name }}
                                                                            @else
                                                                                {{ $studyProgram->name }}
                                                                            @endif
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $studyProgram->status ?? 'No Status' }}</td>
                                                                    <td>{{ $studyProgram->education_level_id == 22 ? 'D3' : 'D4' }}</td>
                                                                    <td>
                                                                        <span class="badge bg-{{ in_array($studyProgram->feeder_status, ['SUKSES', 'ADA']) ? 'success' : 'danger' }}">
                                                                            {{ in_array($studyProgram->feeder_status, ['SUKSES', 'ADA']) ? 'SUDAH SYNC' : 'BELUM SYNC' }}
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 {{-- Start Paginations --}}
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <!-- Dropdown untuk memilih jumlah baris per halaman -->
                                                        <form method="GET" action="" class="d-flex">
                                                            <div class="search-box me-2">
                                                                <select id="rowCount" name="per_page" class="form-select w-auto" onchange="this.form.submit()">
                                                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10 baris</option>
                                                                    <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25 baris</option>
                                                                    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50 baris</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="pagination-wrap hstack gap-2">
                                                        {{-- First Button --}}
                                                        <a class="page-item pagination-prev {{ $studyPrograms->onFirstPage() ? 'disabled' : '' }}" href="{{ $studyPrograms->url(1) }}">
                                                            First
                                                        </a>

                                                        {{-- Previous Button --}}
                                                        <a class="page-item pagination-prev {{ $studyPrograms->onFirstPage() ? 'disabled' : '' }}" href="{{ $studyPrograms->previousPageUrl() }}">
                                                            Previous
                                                        </a>

                                                        {{-- Pagination Links --}}
                                                        <ul class="pagination listjs-pagination mb-0">
                                                            @php
                                                                $currentPage = $studyPrograms->currentPage();
                                                                $lastPage = $studyPrograms->lastPage();
                                                                $startPage = max($currentPage - 2, 1); // Tampilkan 2 halaman sebelumnya
                                                                $endPage = min($currentPage + 2, $lastPage); // Tampilkan 2 halaman berikutnya
                                                            @endphp

                                                            @if ($startPage > 1)
                                                                <li class="page-item">
                                                                    <a class="page-link" href="{{ $studyPrograms->url(1) }}">1</a>
                                                                </li>
                                                                @if ($startPage > 2)
                                                                    <li class="page-item disabled">
                                                                        <span class="page-link">...</span>
                                                                    </li>
                                                                @endif
                                                            @endif

                                                            @for ($page = $startPage; $page <= $endPage; $page++)
                                                                <li class="page-item {{ $studyPrograms->currentPage() == $page ? 'active' : '' }}">
                                                                    <a class="page-link" href="{{ $studyPrograms->url($page) }}">{{ $page }}</a>
                                                                </li>
                                                            @endfor

                                                            @if ($endPage < $lastPage)
                                                                @if ($endPage < $lastPage - 1)
                                                                    <li class="page-item disabled">
                                                                        <span class="page-link">...</span>
                                                                    </li>
                                                                @endif
                                                                <li class="page-item">
                                                                    <a class="page-link" href="{{ $studyPrograms->url($lastPage) }}">{{ $lastPage }}</a>
                                                                </li>
                                                            @endif
                                                        </ul>

                                                        {{-- Next Button --}}
                                                        <a class="page-item pagination-next {{ $studyPrograms->hasMorePages() ? '' : 'disabled' }}" href="{{ $studyPrograms->nextPageUrl() }}">
                                                            Next
                                                        </a>

                                                        {{-- Last Button --}}
                                                        <a class="page-item pagination-next {{ $studyPrograms->hasMorePages() ? '' : 'disabled' }}" href="{{ $studyPrograms->url($lastPage) }}">
                                                            Last
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end paginations -->
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
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        var checkAll = document.getElementById("checkAll");
        var checkboxes = document.querySelectorAll('.form-check-all input[type="checkbox"]:not(#checkAll)');
        var closeButton = document.getElementById("closeButton");
        var trashButton = document.getElementById("trashButton");

        // Fungsi untuk memperbarui tampilan tombol berdasarkan checkbox yang tercentang
        function updateButtons() {
            var checkedCount = document.querySelectorAll('.form-check-all input[type="checkbox"]:checked').length;
            if (checkedCount > 0) {
                closeButton.style.display = "inline-block";
                trashButton.style.display = "inline-block";
            } else {
                closeButton.style.display = "none";
                trashButton.style.display = "none";
            }
        }

        // Mengaktifkan/menonaktifkan semua checkbox ketika checkbox "Check All" diklik
        if (checkAll) {
            checkAll.addEventListener('click', function() {
                var isChecked = checkAll.checked;
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = isChecked;
                    checkbox.closest("tr").classList.toggle("table-active", isChecked);
                });
                updateButtons(); // Perbarui status tombol
            });
        }

        // Menambahkan event listener untuk checkbox individual
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('click', function() {
                checkAll.checked = checkboxes.length === document.querySelectorAll('.form-check-all input[type="checkbox"]:checked').length;
                updateButtons(); // Perbarui status tombol
            });
        });

        // Menyembunyikan tombol ketika tidak ada checkbox yang dicentang
        updateButtons();
    });

        </script>

@endsection
