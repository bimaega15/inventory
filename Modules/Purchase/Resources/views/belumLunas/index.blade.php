@extends('layouts.app.index')

@section('title')
    Halaman Piutang
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{ Breadcrumbs::render('belumLunas') }}

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">
                Data Belum Lunas
            </h5>
            <div class="table-responsive text-nowrap px-3">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th width="10%;">No.</th>
                            <th>Invoice</th>
                            <th>Tanggal Transaksi</th>
                            <th>Customer</th>
                            <th>Kasir</th>
                            <th>Total Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>

    @push('custom_js')
        <script class="url_datatable" data-url="{{ url('purchase/belumLunas') }}"></script>
        <script src="{{ asset('js/purchase/belumLunas/index.js') }}"></script>
    @endpush
@endsection
