<!-- widget Menu-->

<style>
	#wkategori .label-size a,
	#wkategori .label-size span {
		display: inline-block;
		color: #49ACE1;
		padding: 6px 8px;
	}

	#wkategori .label-size:hover a,
	.label-size:hover span .label-count {
		color: #f18f01;
		border: 1px solid #f18f01;
	}


	#wkategori .label-size {
		transition: all 0.25s;
		-moz-transition: all 0.25s;
		-webkit-transition: all 0.25s;
		line-height: 1.2;
		display: block;
		float: left;
		margin: 0 3px 3px 0;
		color: #49ACE1;
		font-size: 12px;
		text-transform: uppercase;
		border: 1px solid #49ACE1;
	}

	#wkategori .cloud-label-widget-content {
		text-align: left;
	}
</style>

<div class="box box-primary box-solid" id="wkategori">
	<div class="box-header">
		<h3 class="box-title"><i class="fa fa-bars"></i> Kategori</h3>
	</div>
	<div class="box-body">
		<div class="widget-content cloud-label-widget-content ">
			<?php foreach ($menu_kiri as $data) { ?>
				<span class="label-size label-size-5">
					<a dir="ltr" href="<?= site_url('first/kategori/') . $data['slug'] ?>" title="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></a>
				</span>
				<?php foreach ($data['submenu'] as $submenu) : ?>
					<span class="label-size label-size-5">
						<a dir="ltr" href="<?= site_url('first/kategori/') . $submenu['slug'] ?>" title="<?= $submenu['kategori'] ?>"><?= $submenu['kategori'] ?></a>
					</span>
				<?php endforeach; ?>
			<?php } ?>

		</div>
	</div>
	<div class="box-footer">&nbsp;</div>
</div>