
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/registered/collage'); ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>BACATS | collage</title>
		<!-- <link rel="stylesheet" href="../../../assets/css/main.css"> -->
		<link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
	</head>
	<body>
	<div class="row">
		<!-- <div class="col-md-6"> -->
			<div class="card mesha">
				<div class="card-body"><div class="card-header text-center">register collage</div>
					<h3 class="card-title text-center"><?php #echo $title; ?></h3>
						<div class="form-group">
                            <label>Name of Collage</label>
                            <input type="text" class="form-control" name="collage_name" placeholder="Collage name" required outofocus>
                        </div>
						
						<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</div>
		<!-- </div> -->
	</div>
	</body>
	</html>
<?php echo form_close(); ?>
 
<br/><br/>
<?php if($this->session->flashdata('collage_added')):  ?>    
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('collage_added'). '</p>'; ?>
            <?php endif; ?>
<div class="row"><div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="card-body">
			<div class="card-header small text-muted"> 
				<h2><?php echo $title; ?></h2>
			</div>
				<ul class="list-group">
				<?php foreach ($Collagies as $collage){ ?>
				<li class="list-group-item"><?php echo $collage['collage_name']; ?></li>
				<?php } ?>
				</ul> 
		</div>
	</div>	<div class="col-sm-3"></div>
</div>