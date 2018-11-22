<?php snippet('header') ?>

<!-- maintenance.php -->

<?php // https://getkirby.com/docs/cheatsheet/panel-fields/structure ?>

<?php if( ! $site->maintenance()->isTrue() ) { go('home');} ?>

<div id="title" class="drawer">
	<h1><img src="assets/images/logo.svg" alt="Ralston Bau"></h1>
</div>

<div id="content" class="drawer">
	<div id="info" class="drawer loading">
			
		<h1>Now</h1>

		<div>
			<h2>Associated artists 2017-2020</h2>
			<h2>Territoire Ideal</h2>
			<p>MAGASIN des Horizons<br>Grenoble, France</p>
		</div>

		<div>
			<h2>Idealist design</h2>
			<p>ESAAA<br>24 January 2019 - Annecy, France</p>
		</div>

		<div>
			<h2>Why not?</h2>
			<p>Central Saint Martins<br>7-12 January 2019, London, UK</p>
		</div>

		<div>
			<h2>Ideal village</h2>
			<p>UiB, KMD, Institute of Design<br>12-22 February 2019, Bergen, Norway</p>
		</div>

		<div>
			<h2>Design in Design Thinking</h2>
			<p>Executive Master DT Bergen<br>10 April 2019, Bergen, Norway</p>
		</div>

		<div>
			<h2>New product launch</h2>
			<p>Salone del Mobile<br>9-14 April 2019, Milano, Italy</p>
		</div>
	</div>
	<div id="main" class="drawer loading">
		
		<div class="togglebloc hideonclose">
			<p class="lang en">Independent design studio decoding the complexity of our world, connecting people and our common spaces through transformative practice. Ralston & Bau transform ideas into action – and complex questions into the objects you need.</p>

			<p class="lang no">Uavhengig designstudio som dekoder den komplekse verda rundt oss. Gjennom transformativ praksis koblar vi mennesker med dei felles romma som omgir oss. Ralston & Bau gjer idear om til handling – og komplekse spørsmål om til objekt ein har behov for.</p>

			<p class="lang fr">Studio de design indépendant, s’attachant à décoder la complexité de notre monde, il met en connexion personnes et espaces partagés. Pratiquant le design transformatif, Ralston & Bau passe des idées à l’action et des questions complexes en objet essentiel.</p>
		</div>
	
		<p class="togglebloc hideonopen">Cases and practice will soon be shown here.</p>


		<div id="contact">
			<a href="https://www.facebook.com/ralstonbau" target="_blank"><img src="assets/images/facebook.svg" alt="facebook"></a>
			<a href="https://www.instagram.com/studioralstonbau" target="_blank"><img src="assets/images/instagram.svg" alt="instagram"></a>
			<!-- <a href="mailto:" target="_blank"><img src="assets/images/mail.svg" alt="mail"></a> -->
		</div>
	</div>

</div>


<script>

	var lang_arr = ["en", "no", "fr"];
	var lang_id  = 0;
	
	$(document).ready(function(){
		console.log("RALSTON BAU ok");

		$("#info").click(function(e){
			$("#info").toggleClass("loading");
			$("#main").toggleClass("loading");
		})

		lang_interval = setInterval(lang_switcher,3000);
		lang_switcher()
	})

	function lang_switcher(){
		console.log("lang "+lang_id );

		$(".lang").hide()
		$("."+lang_arr[lang_id]).show();
		lang_id = (lang_id + 1) % lang_arr.length;
	}

</script>

<!-- fin maintenance.php -->

<?php snippet('footer') ?>