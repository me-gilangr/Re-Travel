@extends('backend.app')

@section('content')
<h3 class="page-title">
    Dashboard
    <small>&nbsp;</small>
</h3>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="120">0</span>
                    </h3>
                    <small>Order Masuk</small>
                </div>
                <div class="icon">
                    <i class="icon-login"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 80%;" class="progress-bar progress-bar-success green-sharp">
                        <span class="sr-only">80% progress</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <div class="display">
                <div class="number">
                    <h3 class="font-yellow-crusta">
                        <span data-counter="counterup" data-value="100">0</span>
                    </h3>
                    <small>Order Terverifikasi</small>
                </div>
                <div class="icon">
                    <i class="icon-logout"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 80%;" class="progress-bar progress-bar-success yellow-crusta">
                        <span class="sr-only">80% progress</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <div class="display">
                <div class="number">
                    <h3 class="font-blue-sharp">
                        <span data-counter="counterup" data-value="50">0</span>
                    </h3>
                    <small>Pelanggan</small>
                </div>
                <div class="icon">
                    <i class="icon-notebook"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 80%;" class="progress-bar progress-bar-success blue-sharp">
                        <span class="sr-only">80% progress</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2">
            <div class="display">
                <div class="number">
                    <h3 class="font-red">
                        <span data-counter="counterup" data-value="89,000,000">0</span>
                    </h3>
                    <small>Pembayaran</small>
                </div>
                <div class="icon">
                    <i class="icon-wallet"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 80%;" class="progress-bar progress-bar-success red">
                        <span class="sr-only">80% progress</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-grid"></i>
                    <span class="caption-subject bold"> &ensp; Daftar Paket</span>
                </div>
                <div class="actions">
                    <a class="btn blue" href="{{ url('backend/packages/create') }}">
                        <i class="icon-pencil"></i> Tambah Baru
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                OKOK O
            </div>
        </div>
    </div>
</div>
@endsection
