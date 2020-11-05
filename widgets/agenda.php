<!-- Widget Agenda -->


<?php if (count(array_merge($hari_ini, $yad, $lama)) > 0 && count(array_merge($hari_ini, $yad, $lama)) < 4) : ?>
	<div class="box box-primary box-solid">
		<div class="box-header">
			<h3 class="box-title"><i class="fa fa-calendar"></i> Agenda</a></h3>
		</div>

		<section class="events small box-body" id="agenda">
			<div class="section-content">
				<?php
				$agen = array_merge($yad);
				foreach ($agen as $agenda) : ?>
					<article class="event nearest">
						<figure class="date">
							<div class="month"><?= tgl_pendek($agenda['tgl_agenda'], 2) ?></div>
							<div class="day"><?= tgl_pendek($agenda['tgl_agenda'], 1) ?></div>
						</figure>
						<aside>
							<header class="content__title"> <a href="<?= site_url('artikel/' . buat_slug($agenda)) ?>" title="<?= $agenda['judul'] ?>"> <?= $agenda['judul'] ?></a> </header>
							<div class="additional-info">

								<i class="fa fa-map-marker content__meta__icon"></i> <?= $agenda['lokasi_kegiatan'] ?><br>
								<i class="fa fa-user content__meta__icon"></i> <?= $agenda['koordinator_kegiatan'] ?>


							</div>
						</aside>
					</article>
				<?php endforeach ?>
				<?php
				$agen = array_merge($hari_ini, $yad);
				foreach ($hari_ini as $agenda) : ?>
					<article class="event nearest-second">
						<figure class="date">
							<div class="month"><?= tgl_pendek($agenda['tgl_agenda'], 2) ?></div>
							<div class="day"><?= tgl_pendek($agenda['tgl_agenda'], 1) ?></div>
						</figure>
						<aside>
							<header class="content__title"> <a href="<?= site_url('artikel/' . buat_slug($agenda)) ?>" title="<?= $agenda['judul'] ?>"> <?= $agenda['judul'] ?></a> </header>
							<div class="additional-info">

								<i class="fa fa-map-marker content__meta__icon"></i> <?= $agenda['lokasi_kegiatan'] ?><br>
								<i class="fa fa-user content__meta__icon"></i> <?= $agenda['koordinator_kegiatan'] ?>


							</div>
						</aside>
					</article>
				<?php endforeach ?>
				<?php
				foreach ($lama as $agenda) : ?>
					<article class="event ">
						<figure class="date">
							<div class="month"><?= tgl_pendek($agenda['tgl_agenda'], 2) ?></div>
							<div class="day"><?= tgl_pendek($agenda['tgl_agenda'], 1) ?></div>
						</figure>
						<aside>
							<header class="content__title"> <a href="<?= site_url('artikel/' . buat_slug($agenda)) ?>" title="<?= $agenda['judul'] ?>"> <?= $agenda['judul'] ?></a> </header>
							<div class="additional-info">
								<p>
									<i class="fa fa-map-marker content__meta__icon"></i> <?= $agenda['lokasi_kegiatan'] ?><br>
									<i class="fa fa-user content__meta__icon"></i> <?= $agenda['koordinator_kegiatan'] ?>

								</p>
							</div>
						</aside>
					</article>
				<?php endforeach ?>
			</div>
		</section>


	</div>
<?php endif ?>