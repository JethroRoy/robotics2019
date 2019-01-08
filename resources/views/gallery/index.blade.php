@extends ('layouts.master')

@section('content')

   <div>
		<img src='/../resources/images/gallery/default.png' alt="huh?"/>
		<?php
		//$path = "{{asset('/default.png')}}";
		 
		$files = glob('../resources/images/gallery/*.{jpg,png,gif}', GLOB_BRACE);
		//$files = scandir('../resources/images/gallery');
		//var_dump($files);
			//var_dump($files[2]);
			//foreach($files as $file) {
			 	print("<img src='/../resources/default.png' />");

			//}




		?>
	</div>
@endsection
