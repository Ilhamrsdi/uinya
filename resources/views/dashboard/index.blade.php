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
    'title' => ''
])
<div class="row">

    <h1>Dashboard</h1>

    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <h3>Status Modul Feeder</h3>
    <p>Modul Feeder saat ini: {{ $isFeederModuleActive ? 'Aktif' : 'Non-Aktif' }}</p>

    <form action="{{ route('dashboard.toggleFeeder') }}" method="POST">
        @csrf
        <button type="submit">
            {{ $isFeederModuleActive ? 'Non-Aktifkan' : 'Aktifkan' }} Modul Feeder
        </button>
    </form>
</div>
@endsection
