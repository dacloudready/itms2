<?=$this->extend('layout/default');?>

<?=$this->section('content'); ?>
<h1 class="h3 mb-3">Error Message:</h1>

<div class="card card-default">
	<div class="card-body">
        <?=$error_message;?>
    </div>
</div>
<?=$this->endSection(); ?>