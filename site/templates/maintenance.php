<?php snippet('header') ?>

<!-- maintenance.php -->

<?php // https://getkirby.com/docs/cheatsheet/panel-fields/structure ?>

<?php if( ! $site->maintenance()->isTrue() ) { go('home');} ?>

<div id="title" class="drawer">
	<h1><img id="logo" src="assets/images/logo.svg" alt="Ralston Bau"></h1>

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
	
		<p id="cases" class="togglebloc hideonopen">Cases and practice will soon be shown here.</p>
		
		<div id="intro" class="togglebloc hideonclose">
			<p class="lang"><?= $site->children()->findBy('uid','home')->text()->text() ?></p>
		</div>


		<div id="contact">
			<a href="https://www.facebook.com/ralstonbau" target="_blank"><img class="btn-facebook" src="assets/images/facebook.svg" alt="facebook"></a>
			<a href="https://www.instagram.com/studioralstonbau" target="_blank"><img class="btn-instagram" src="assets/images/instagram.svg" alt="instagram"></a>
			<a href="mailto:studio@ralstonbau.com"><img class="btn-mail" src="assets/images/mail.svg" alt="mail"></a>
		</div>
	</div>

</div>


<script>

	var lang_arr = ["en", "no", "fr"];
	var lang_id  = 0;

	var intro = {
		"fr" : "<?= $site->children()->findBy('uid','home')->content('fr')->text()->text() ?>",
		"en" : "<?= $site->children()->findBy('uid','home')->content('en')->text()->text() ?>",
		"no" : "<?= $site->children()->findBy('uid','home')->content('no')->text()->text() ?>"
	};	

	$(document).ready(function(){
		console.log("RALSTON BAU ok");



		//  MAINTENANCE DRAWERS
		$('.lang').text( intro.en );

		setTimeout(function(){ 
			$("#info").toggleClass("loading");
			$("#main").toggleClass("loading");
		}, 2000);


		$("#info").click(function(e){
			$("#info").toggleClass("loading");
			$("#main").toggleClass("loading");
		})

		var lang_bloc = document.querySelector("p.lang");

		console.log(lang_bloc);

		lang_bloc.addEventListener("animationstart", listener, false);
		lang_bloc.addEventListener("animationend", listener, false);
		lang_bloc.addEventListener("animationiteration", listener, false);


		function listener(event) {
			console.log("ok listener");

			switch(event.type) {
				case "animationstart":
					console.log("animationstart");
				break;
				case "animationend":
					console.log("animationend");
				break;
				case "animationiteration":
					lang_id  = (lang_id + 1)%lang_arr.length;

					console.log("animationiteration");
					$('.lang').text( intro[ lang_arr[lang_id] ] );
				break;
			}
		}




		// STORIES PANEL
		$("#newsletter").css("visibility", "hidden");

		$("#btn-newsletter").click(function(event){
			$("#newsletter")
				.css("visibility", "")
				.addClass('open');//.show();
		})

		$("#newsletter").click(function(event){
			$("#newsletter")
				.removeClass('open');//.hide();
		})

	})


</script>

<!-- fin maintenance.php -->

<?php snippet('footer') ?>