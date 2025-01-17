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
        Seeting Feeder 
    @endslot
@endcomponent

    <div class="row">
        <h3>Toggle Enable/Disable Feeder Module</h3>

        <!-- Menampilkan pesan setelah menyimpan perubahan -->
        @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('feeder.toggleFeederModule') }}" method="POST">
            @csrf
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="toggle" name="status" {{ $isFeederModuleActive ? 'checked' : '' }}>
                <label class="form-check-label" for="toggle">Aktifkan Feeder Modul</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
        
        
    </div>
@endsection
