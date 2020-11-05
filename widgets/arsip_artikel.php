<!-- widget Arsip Artikel -->

<style type="text/css">
	#arsip_artikel .nav>li.active>a {
		color: green
	}

	#arsip_artikel img {
		width: 100%;
		/*margin: 0 6px 4px 0;*/
		float: left;
	}

	#arsip_artikel.events .event aside {
		padding-left: 0px;
	}

	.nomer {
		/*flex-shrink: 0;
		content: '0'counter(popular-count);
		counter-increment: popular-count;
		width: 45px;
		padding-top: 5px;
		font-size: 26px;
		color: rgba(0, 0, 0, .20);*/
		color: rgba(0, 0, 0, .20);
		float: left;
		/*height: 70px;*/
		overflow: hidden;
		flex-shrink: 0;
		width: 70px;
		font-size: 50px;
		text-align: center;
		margin-top: -10px;

	}
</style>
<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title"><a href="<?= site_url("arsip") ?>"><i class="fa fa-archive"></i> Artikel Pilihan</a></h3>
	</div>
	<section id="arsip_artikel" class="box-body events small">
		<div class="section-content">
			<?php foreach (array('populer' => 'arsip_populer') as $jenis => $jenis_arsip) : ?>
				<?php foreach ($$jenis_arsip as $k => $arsip) :
					if ($k < 5) { ?>
						<?php $abstract = potong_teks(strip_tags($arsip['isi']), 90) ?>
						<article class="event ">

							<div class="nomer">

								0<?= $k + 1 ?>
							</div>
							<aside>
								<header> <a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>" style="font-weight: 800;" title="<?= $arsip['judul'] ?>"> <?= $arsip['judul'] ?> </a> </header>
								<p class="additional-info">

									<?= html_bersih($abstract) ?>


								</p>
							</aside>
						</article>
				<?php }
				endforeach ?>
			<?php endforeach ?>

		</div>

	</section>
</div>