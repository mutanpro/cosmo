<?php $url = site_url('artikel/' . buat_slug($agenda)) ?>
<?php $abstract = potong_teks(strip_tags($agenda['isi']), 200) ?>
<?php $image = ($agenda['gambar'] && is_file(LOKASI_FOTO_ARTIKEL . 'sedang_' . $agenda['gambar'])) ?
    AmbilFotoArtikel($agenda['gambar'], 'sedang') :
    base_url($this->theme_folder . '/' . $this->theme . '/assets/images/placeholder.png');

$q  =  strtotime($agenda['tgl_agenda']) - time();
$ket = ($q > 0) ? 'nearest' : '';
?>
<section class="events images" id="events" style=" padding-bottom: 30px;">
    <div class="section-content">
        <agenda class="event <?= $ket ?>" style="min-height: 180px;">
            <div class="event-thumbnail">
                <figure class="event-image">
                    <div class="image-wrapper"> <a title="<?= $agenda['judul'] ?>" href="<?= $url ?>"> <img src="<?= $image ?>" class="img-responsive" alt="<?= $agenda['judul'] ?>"> </a> </div>
                </figure>
                <figure class="date">
                    <div class="month"><?= tgl_pendek($agenda['tgl_agenda'], 2) ?></div>
                    <div class="day"><?= tgl_pendek($agenda['tgl_agenda'], 1) ?></div>
                </figure>
            </div>
            <aside>
                <h4 class="content__title"><a href="<?= $url ?>"><?= $agenda['judul'] ?></a></h4>
                <div class="content__meta">
                    <span class="content__meta__item"><i class="fa fa-calendar content__meta__icon"></i> <?= tgl_indo($agenda['tgl_upload']) ?></span>
                    <span class="content__meta__item"><i class="fa fa-user content__meta__icon"></i> <?= $agenda['owner'] ?></span>
                    <?php if ($agenda['kategori']) : ?>
                        <span class="content__meta__item"><i class="fa fa-tag content__meta__icon"></i> <a href="<?= site_url('first/kategori/' . $agenda['kat_slug']) ?>" class="content__link"><?= $agenda['kategori'] ?></a></span>
                    <?php endif ?>
                </div>
                <div class="description" style="padding-top: 5px;">
                    <p><?= $abstract ?></p>
                </div>
            </aside>
        </agenda>

    </div>
</section>