<?php if($page->uid() != 'maintenance') { ?>

</div>

<?php } ?>

<div id="newsletter">

	<form action="https://tinyletter.com/ralstonbau" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/ralstonbau', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
		
		<p><input type="text" name="email" id="tlemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="email@domain.ltd" />
		<input type="hidden" value="1" name="embed"/>
		<button type="submit" id="btn-send"><?= l::get('subscribe') ?></button></p>

		<p><a href="https://tinyletter.com" target="_blank">powered by TinyLetter</a></p>

	</form>

</div>

</body>
</html>