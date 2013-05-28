<!--    -->
<!--
This is the template page. It is the root view in which all other mini views are loaded.

-->

<?php
ob_start();

?>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php $this -> load -> view('sections/head'); ?>
	</head>
	<body>

		<header>
			<?php $this -> load -> view('sections/header'); ?>
			
		</header>
		<section class="content">
			<nav class="topic-navigation">
				<ul>
					<li></li>
				</ul>
			</nav>
			<section class="main-content">
				
			</section>
		</section>
		
		<footer>
			<section class="summary">
				
			</section>
			<?php $this -> load -> view('sections/footer'); ?>
		</footer>
		
	</body>
	<!--
	End of Body
	-->
</html>