@extends('layouts.master')
@push('css')
    <!-- CSS for this page only -->
    <link rel="stylesheet" href="{{ asset('/') }}vendor/chart.js/dist/Chart.min.css">
    <!-- End CSS  -->
@endpush

@section('content')
    <div class="main-content">
        <div class="title">
            Role
        </div>
        <div class="content-wrapper">
            <div class="row same-height">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ini Halaman Role</h4>
                        </div>
                        <div class="card-body">
                            ini nanti isi tabel role
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- js for this page only -->
    <script src="{{ asset('/') }}vendor/chart.js/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('/') }}assets/js/page/index.js"></script>
    <!-- ======= -->
@endpush
