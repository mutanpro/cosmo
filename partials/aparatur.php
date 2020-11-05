<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<li class="content__item">
	<div class="content__thumbnail">
		<img src="<?= $aparatur['foto'] ?>" alt="<?= $aparatur['nama'] ?>" class="content__image">
	</div>
	<div class="content__caption">
		<!--<h4 class="content__title"><a href="<?= $url ?>"><?= $aparatur['nama'] ?></a></h4>-->

		<div class="additional-info">
			<table class="table table-striped table-bordered no-footer" width="100%">
				<tr class="content__title">
					<td colspan="3"><?= $aparatur['nama'] ?></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td>:</td>
					<td><?= $aparatur['jabatan'] ?></td>
				</tr>
				<tr>
					<td>NIAP</td>
					<td>:</td>
					<td><?= $aparatur['pamong_niap'] ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?= $aparatur['sex'] ?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:</td>
					<td><?= $aparatur['agama'] ?></td>
				</tr>
				<tr>
					<td>Nomor SK</td>
					<td>:</td>
					<td><?= $aparatur['pamong_nosk'] ?></td>
				</tr>

			</table>
		</div>
	</div>
</li>