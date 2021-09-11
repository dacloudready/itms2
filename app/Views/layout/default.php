<?php include('header.php'); ?>
<div class="wrapper">
	<?php  include('sidebar.php'); ?>
	<div class="main">
		<?php include('nav.php'); ?>
		<main class="content">
			<div class="container-fluid p-0">
				<?=$this->renderSection('content'); ?>
			</div>
		</main>
		<?php include('credits.php'); ?>
	</div>
</div>
<?php include('footer.php'); ?>