<!-- menu.php -->


<div id="title" class="drawer">
	<h1><img id="logo" src="<?= $site->url() ?>/assets/images/logo.svg" alt="Ralston Bau"></h1>


	<nav class="languages" role="navigation">
		<ul>
			<?php foreach($site->languages() as $language): ?>
			<li<?php e($site->language() == $language, ' class="active"') ?>>
				<a href="<?= $page->url($language->code()) ?>">
					<?= html($language->code()) ?>
				</a>
			</li>
			<?php endforeach ?>
		</ul>
	</nav>



	<div id="contact">
		<a href="https://www.facebook.com/ralstonbau" target="_blank"><img class="btn-facebook" src="<?= $site->url() ?>/assets/images/facebook-black.svg" alt="facebook"></a>
		<a href="https://www.instagram.com/studioralstonbau" target="_blank"><img class="btn-instagram" src="<?= $site->url() ?>/assets/images/instagram-black.svg" alt="instagram"></a>
		<a href="mailto:studio@ralstonbau.com"><img class="btn-mail" src="<?= $site->url() ?>/assets/images/mail-black.svg" alt="mail"></a>
	</div>

	<button id="btn-newsletter"><?= l::get('newsletter') ?></button>        
</div>


<div id="content" class="drawer">
	<div id="info" class="drawer">
			
		<h1>Now</h1>


		<?php foreach($site->children()->findBy('uid','news')->children()->visible()->sortBy('date', 'asc') as $article): ?>

		<div>
			<h2><?= $article->title()->html() ?></h2>
			<p><?= $article->place()->text() ?><br><?= $article->datefromto()->text() ?></p>
		</div>
	
		<?php endforeach; ?>

	</div>


	<div id="main" class="drawer">

<!-- fin menu.php -->