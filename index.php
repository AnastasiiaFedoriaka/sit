<?php

require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');
require($_SERVER['DOCUMENT_ROOT'].'/partials/navbar.php');
require($_SERVER['DOCUMENT_ROOT'].'/partials/navmenu.php');

?>
<!-- Add your site or application content here -->

<div id="colorlib-page">

		<div id="colorlib-main">
			<?php
			$page = 'home';
			if (isset($_GET['p'])) {
				switch ($_GET['p']) {
					case 'catalog':
						$page = 'catalog';
						break;
					case 'about':
						$page = 'about';
						break;
					case 'contact':
						$page = 'contact';
						break;
					default:
						$page = 'home';
						break;
				}
			}

			// connect the page depending on the request
			require($_SERVER['DOCUMENT_ROOT']."/partials/pages/". $page . ".php");
?>
     

<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
?>