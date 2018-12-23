<?php 

/**
 * Put your plugin code here
 */

// https://forum.getkirby.com/t/panel-page-update-hook/4273/10
// https://getkirby.com/docs/developer-guide/advanced/hooks



kirby()->hook('panel.page.update', function($page, $oldPage = null) {
  	// your hook code

	// echo $page .' '.$oldPage;

	// var_dump($this->type());
	// var_dump( $page->title() );


	// $panel    = $this->panel();
	// $kirby    = $this->kirby();
	// $site     = $this->site();
	// $user     = $this->user();
	// $username = $this->username();
	// $role     = $this->role();

	 try {
	 	// $page->update(array(
	 	// 	'hello' => "Please update me sir !!"
	 	// ));

	 	$page->update(array(
	 		'test' => "yo"
	 	));

	 } catch(Exception $e) {
	 	echo $e->getMessage();
	 }

});