<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($transparansi) $this->load->view($folder_themes . '/partials/apbdesa', $transparansi) ?>



<!-- ANDA TIDAK DIPERKENANKAN MENGHAPUS/MEMODIFIKASI LINK KREDIT DI BAWAH INI. -->
<!-- Dengan tetap mencantumkan link kredit, berarti Anda turut mendukung dan mengapresiasi pengembang tema. -->
<footer class="footer">
	<div class="footer__content">
		<div class="footer__copyright">
			<span>Copyright &copy; <?= date('Y') ?> - <a href="#" target="_blank"><strong>tema cosmo</strong></a> | <a href="#"><strong>OpenSID</strong></a></span>
		</div>
		<ul class="social-media">
			<?php foreach ($sosmed as $data) : ?>
				<?php if (!empty($data['link'])) : ?>
					<?php $brand = strtolower(str_replace(' ', '-', $data['nama'])) ?>
					<li class="social-media__item social-media--<?= $brand ?>">
						<a href="<?= $data['link'] ?>" class="social-media__link"><i class="fa fa-<?= $brand == 'youtube' ? 'youtube-play' : $brand ?>"></i></a>
					</li>
				<?php endif ?>
			<?php endforeach ?>
		</ul>
	</div>
</footer>

<script type="text/javascript">
	var csrfParam = 'sidcsrf';
	var getCsrfToken = () => document.cookie.match(new RegExp(csrfParam + '=(\\w+)'))[1]
</script>
<script src="<?= base_url() ?>assets/js/anti-csrf.js"></script>