<!-- <h1>Selamat Datang <?= $this->session->userdata('nama') ?></h1> -->
<?php
    $pemasukan = $this->Transaksi_model->pemasukan();
    $pengeluaran = $this->Transaksi_model->pengeluaran();
    $saldo_akhir = $pemasukan-$pengeluaran;
?>

<button type="button" class="btn btn-info mb-4" data-toggle="modal" data-target="#exampleModal">
    <i class="bi bi-printer"></i>Print Laporan
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Print Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="get" action="<?= base_url('home/laporan') ?>" target="_blank">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Awal</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tanggal_awal">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Akhir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tanggal_akhir">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-printer"></i>Print</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="pemasukan">
    <h2>Pemasukan</h2>
    <div class="row">
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Rp. <?= number_format($this->Transaksi_model->pemasukan_hari_ini()); ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Hari Ini</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Rp. <?= number_format($this->Transaksi_model->pemasukan_bulan_ini()); ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Bulan Ini</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Rp. <?= number_format($this->Transaksi_model->pemasukan()); ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="bi bi-cash-stack icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Pemasukan</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="pengeluaran">
    <h2>Pengeluaran</h2>
    <div class="row">
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Rp. <?= number_format($this->Transaksi_model->pengeluaran_hari_ini()); ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-danger ">
                                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Hari Ini</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Rp. <?= number_format($this->Transaksi_model->pengeluaran_bulan_ini()); ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-danger">
                                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Bulan Ini</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Rp. <?= number_format($this->Transaksi_model->pengeluaran()); ?></h3>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-danger">
                                <span class="bi bi-cash-stack icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Pengeluaran</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="saldo">
    <h2>Saldo Akhir</h2>
    <div class="row">
        <div class="col-xl-12 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-11">
                            <div class="d-flex align-items-center t">
                                <h3 class="mb-0">Rp. <?= number_format($saldo_akhir); ?></h3>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="icon icon-box-primary">
                                <span class="bi bi-cash-stack icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Saldo Akhir</h6>
                </div>
            </div>
        </div>
    </div>
</div>
