<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style type="text/css">
    button.btn {
        margin-left: 0px;
    }

    .box .btn.btn-block {
        width: 100%;
        display: block;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: .75rem;
        padding-right: .75rem;
        border-radius: .25rem;
        margin-top: .5rem;
        margin-bottom: .5rem;
        --bg-opacity: 1;
        background-color: #2e86ab;
        background-color: rgba(46, 134, 171, var(--bg-opacity));
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity));
    }

    #collapse2 {
        margin-top: 5px;
    }

    button[aria-expanded=true] .fa-chevron-down {
        display: none;
    }

    button[aria-expanded=false] .fa-chevron-up {
        display: none;
    }
</style>
<?php if ($this->setting->covid_data) : ?>
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/_widget.min.css") ?>">
    <?php
    //API Local Data COVID19
    $odpd = $covid[0]; //"Orang Dalam Pemantauan (ODP)" => "ODP",
    $pdpd = $covid[1]; //"Pasien Dalam Pengawasan (PDP)" => "PDP",
    $odr = $covid[2]; //"Orang Dalam Resiko (ODR)" => "ODR"
    $otg = $covid[3]; //"Orang Tanpa Gejala (OTG)" => "OTG",
    $positif = $covid[4]; //"Positif Covid-19" => "POSITIF",
    ?>
    <div class="box box-primary box-solid">
        <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#colCovid" aria-expanded="false">
            <div class="card-header bg-primary font-weight-bold" id="headingFour2">LIVE DATA STATUS COVID-19 <i class="fa fa-chevron-up pull-right"></i> <i class="fa fa-chevron-down pull-right"></i></div>
        </button>
        <div id="colCovid" class="panel-collapse collapse" style="display: none;"> <br>



            <div class="box-body">
                <div class="row">
                    <?php if ($this->setting->covid_desa) : ?>
                        <div id="covid-desa" class="col-12 mb-2">
                            <div class="media --mb-2">
                                <div class="media-body">
                                    <span class="font-weight-bold" data-name="wilayah">
                                        <a href=""><?= strtoupper($this->setting->sebutan_desa . ' ' . $desa['nama_desa']); ?></a>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-3 px-2 py-1">
                                    <div class="square covid odr">
                                        <span>ODP</span>
                                        <span data-name="odp"><?= ribuan($odpd['jumlah']) ?></span>
                                        <span class="small">Orang</span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3 px-2 py-1">
                                    <div class="square covid pdp">
                                        <span>PDP</span>
                                        <span data-name="pdp"><?= ribuan($pdpd['jumlah']) ?></span>
                                        <span class="small">Orang</span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3 px-2 py-1">
                                    <div class="square covid positif">
                                        <span>Positif</span>
                                        <span data-name="positif"><?= ribuan($positif['jumlah']) ?></span>
                                        <span class="small">Orang</span>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-3 px-2 py-1">
                                    <div class="square covid odp">
                                        <span>ODR</span>
                                        <span data-name="odr"><?= ribuan($odr['jumlah']) ?></span>
                                        <span class="small">Orang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <script>
                        const KODE_PROVINSI = <?= $this->setting->provinsi_covid ?: 'undefined' ?>;
                    </script>
                    <?php if ($this->setting->provinsi_covid) : ?>
                        <div id="covid-provinsi" class="col-12 col-md-6 --mb-2">
                            <div class="media --mb-2">
                                <div class="media-body">
                                    <span class="font-weight-bold">
                                        <a href="http://covid19.go.id/" rel="noopener noreferrer" target="_blank">COVID-19 di <span data-name="wilayah">Loading...</span></a>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 px-2 py-1">
                                    <div class="square covid positif shimmer">
                                        <span>Kasus Positif</span>
                                        <span data-name="positif"></span>
                                        <span class="small">Orang</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 px-2 py-1">
                                    <div class="square covid sembuh shimmer">
                                        <span>Total Sembuh</span>
                                        <span data-name="sembuh"></span>
                                        <span class="small">Orang</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 px-2 py-1">
                                    <div class="square covid meninggal shimmer">
                                        <span>Total Meninggal</span>
                                        <span data-name="meninggal"></span>
                                        <span class="small">Orang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <div id="covid-nasional" class="col-12 col-md-6">
                        <div class="media --mb-2">
                            <div class="media-body">
                                <span class="font-weight-bold">
                                    <a href="http://covid19.go.id/" rel="noopener noreferrer" target="_blank">COVID-19 di <span data-name="wilayah">Loading...</span></a>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 px-2 py-1">
                                <div class="square covid positif shimmer">
                                    <span>Positif</span>
                                    <span data-name="perawatan"></span>
                                    <p class="text-white mb-0 small">Kumulatif <span data-name="positif"></span> Orang</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-2 py-1">
                                <div class="square covid sembuh shimmer">
                                    <span>Total Sembuh</span>
                                    <span data-name="sembuh"></span>
                                    <span class="small">Orang</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-2 py-1">
                                <div class="square covid meninggal shimmer">
                                    <span>Total Meninggal</span>
                                    <span data-name="meninggal"></span>
                                    <span class="small">Orang</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <br>
<?php endif ?>