@extends ('layouts.master')

@section('content')
<link href="{{asset('css/gallery_styles.css')}}" rel="stylesheet" type="text/css"/>
<?php 
	$files = glob('img/gallery/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
	<div class="gallery scrollable" style="padding-top:57px;" >
	 @foreach($files as $file)	 	
	  	<img src="{{asset($file)}}" class="image"/>	 
	 @endforeach
	</div>
	<div class="viewer">
		<button class="close" type="button" aria-hidden="true">×</button>
		<img id="modalImg" src="./img/gallery/default1.jpeg">
	</div>
@endsection

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

