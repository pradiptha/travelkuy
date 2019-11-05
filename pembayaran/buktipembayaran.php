<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  	<meta name="author" content="Creative Tim">
  	<title>TravelKuy - Liburan Biar Santuy</title>
  	<!-- Favicon -->
  	<link href="../assets/img/brand/fav.png" rel="icon" type="image/png">
  	<!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  	<!-- Icons -->
  	<link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  	<link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<!-- Argon CSS -->
  	<link rel="stylesheet" type="text/css" href="bayar.css">
  	<link type="text/css" href="../assets/css/argon.css?v=1.1.0" rel="stylesheet">

  	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body style="background-color: #E1F5FF">
	<?php include '../navbar/navbar.php' ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 bg-white mt-3 p-3 mb-2 rounded">
				<div class="panel panel-default">
					<div class="panel-heading pl-3"><strong><h3>UPLOAD BUKTI PEMBAYARAN</h3></strong></div>
					<table class="table table-responsive table-borderless">
						<tr>
							<td scope="col">Kode Pesanan</td>
							<td scope="col">:</td>
							<td scope="col">13081999</td>
						</tr>
					</table>
					<div class="panel-body pl-3 pr-3">
			          	<!-- Standar Form -->
			          	<h5>Select files from your computer</h5>
			          	<form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
			            	<div class="form-inline">
			              		<div class="form-group mt-2 mb-2">
			                		<input type="file" name="files[]" id="js-upload-files" multiple>
			              		</div>
			            	</div>
			          	</form>

			          	<!-- Drop Zone -->
			          	<h5>Or drag and drop files below</h5>
			          	<div class="upload-drop-zone" id="drop-zone">
			            	Just drag and drop files here
			          	</div>

			          	<!-- Progress Bar -->
			          	<div class="progress">
			            	<div class="progress-bar text-center" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
			              		<span class="sr-only">60% Complete</span>
			            	</div>
			          	</div>

			          	<!-- Upload Finished -->
			          	<div class="js-upload-finished">
			            	<h5>Processed files</h5>
			            	<div class="list-group">
			              		<a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
			            	</div>
			          	</div>			          	
						<button type="button" class="btn btn-danger btn-lg mt-4">CANCEL</button>
						<button type="button" class="btn btn-primary btn-lg mt-4">UPLOAD</button>
			        </div>
		    	</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	+ function($) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
    }

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;
        e.preventDefault()

        startUpload(uploadFiles)
    })

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    }

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    }

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

	}(jQuery);
</script>
</html>