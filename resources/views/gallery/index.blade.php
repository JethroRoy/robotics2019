@extends ('layouts.master')

@section('content')

<?php 
	$arr = ["hi", "there", "amiga"]; 
	$files = glob('./images/gallery/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
	
?>
	<div class="gallery scrollable">
	 @foreach($files as $file)	 	
	  	<img src='{{$file}}' class="image"/>	 
	 @endforeach
	</div>
	<div class="viewer">
		<button class="close" type="button" aria-hidden="true">×</button>
		<img id="modalImg" src="./images/gallery/default1.jpeg">
	</div>
@endsection

<style>
	body {
		background-image: url('./images/mib_bg.png');
		background-repeat: no-repeat;
		background-size: 100% 150%; 
	}

	.gallery {
		width: 100%;
	}
	.scrollable {
        float:left;
        height: 80%;
		overflow-y: auto;		
		padding: 20px;
     }

     .image {
     	width: 230px;
		 height: 170px;
		  border: 8px groove gray; margin: 15px;
     }

     .image:hover {
     	border-color: white;
     }

     .viewer {
		z-index: 1;
		top: 0;
		left: 0;
		position: fixed;
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.8);
		display: none;
     }

     #modalImg {
     	top: 20%;
     	left: 25%;
		position: fixed;
		max-width: 50%;
		max-height: 63%;

     }

     

     .close {
     	top: 5px;
     	right: 10px;
     	font-size: 50px !important;
     	z-index: 5;
     	font-size: 50px;  
     	padding: 0;
	    cursor: pointer;
	    background: 0 0;
	    border: 0;
	    margin-right: 10px;
	    opacity: 0.5 !important;

	}   	
	     


</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(function()
	{
		$('.image').click(function(){
			var path = $(this).attr('src');
			$('#modalImg').attr('src', path);

			var modal = $('.viewer');
			modal.show();

			$('.close').click(function(){
				modal.hide();
			});
		});
	});
</script>