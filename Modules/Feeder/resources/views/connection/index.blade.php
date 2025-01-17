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
                                    <div class="content">
                                        <!-- Content -->
                                        <div class="mb-3">
                                          <div class="bg-white rounded shadow-sm">
                                              <!-- Status Alert -->
                                              {{-- <div class="alert d-flex align-items-center mb-3
                                                  @if($connectionStatus == 'connected') alert-success @else alert-danger @endif">
                                                  <div class="me-2 ms-2">
                                                      <i class="ri-checkbox-circle-line
                                                          @if($connectionStatus == 'connected') text-success @else text-danger @endif"></i>
                                                  </div>
                                                  <div>
                                                      @if($connectionStatus == 'connected')
                                                          Terhubung
                                                      @else
                                                          Tidak Terhubung
                                                      @endif
                                                  </div>
                                              </div> --}}

                                              <div>
                                                  <h5 class="ms-4">Konfigurasi API Feeder</h5>
                                                  <hr style="border: 1px solid #979797;">

                                                  <form method="POST" action="{{ url('laporan/feeder/koneksi/update-credentials') }}">
                                                      @csrf
                                                      <div class="p-4">
                                                          <div class="mb-3 d-flex">
                                                              <label for="urlFeeder" class="form-label" style="width: 300px;">URL API Feeder : <span class="text-danger">*</span></label>
                                                              <input type="text" id="host" name="host" class="form-control" value="{{ session('host', '103.164.60.21') }}" required>
                                                          </div>
                                                          <div class="mb-3 d-flex">
                                                              <label for="port" class="form-label" style="width: 300px;">Port : <span class="text-danger">*</span></label>
                                                              <input type="text" id="port" name="port" class="form-control" value="{{ session('port', '8100') }}" required>
                                                          </div>
                                                          <div class="mb-3 d-flex">
                                                              <label for="usernameFeeder" class="form-label" style="width: 300px;">Username Feeder : <span class="text-danger">*</span></label>
                                                              <input type="text" id="username" name="username" class="form-control" value="{{ session('username', '005035') }}" required>
                                                          </div>
                                                          <div class="mb-3 d-flex">
                                                              <label for="passwordFeeder" class="form-label" style="width: 300px;">Password Feeder : <span class="text-danger">*</span></label>
                                                              <input type="password" id="password" name="password" class="form-control" value="{{ session('password', 'datapddiktiKM13!') }}" required>
                                                          </div>
                                                      </div>
                                                          <hr style="border: 1px solid #979797; margin-top: -10px;">
                                                          <div class="p-4 d-flex justify-content-end">
                                                              <button type="submit" class="btn btn-primary">
                                                                  <i class="ri-save-line"></i> Simpan Konfigurasi
                                                              </button>
                                                          </div>
                                                  </form>
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
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
