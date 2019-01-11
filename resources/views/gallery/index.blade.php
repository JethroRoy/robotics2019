@extends ('layouts.master')

@section('content')

<?php 
	$arr = ["hi", "there", "amiga"]; 
	$files = glob('./images/gallery/*.{jpg,png,gif}', GLOB_BRACE);
	// @foreach($files as $file)
	//<img src='{{$file}}'/>
	//@endforeach
?>
	<div class="scrollable">
	 @for($i = 0; $i < 100; $i++)
	 	
	  		<img src='./images/gallery/default1.jpeg' class="image" style="width: 230px; height: 170px; border: 8px groove gray; margin: 15px;"/>
	 
	  @endfor
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
		background-size: 100% 200%; 
	}

	.scrollable {
        float:left;
        height: 80%;
		overflow-y: scroll;		
		padding: 20px;
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
			/*var path = $(this).attr('src');

			var img = $('<img/>');
			img.attr('src', path);

			var close = $('<button></button>');
			close.html('&times;');
			close.addClass('close');
			close.attr('type', 'button');
			close.attr('aria-hidden', 'true');

			var modal = $('<div></div>');
			modal.addClass('viewer');
			modal.append(close);
			modal.append(img);

			$('body').append(modal);

			$('.close').click(function() {
				$('.modal').
			});*/

		});

	});

</script>