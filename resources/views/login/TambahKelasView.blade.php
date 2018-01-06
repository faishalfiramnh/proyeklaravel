<html>
	<title></title>
	<head>
	</head>
	<body>
		Ini Cek id
		<h1> {{ $Coba }}</h1> <?php //cara memaniggil aray ?> 
		 @foreach($nama as $orang)
		<li>{{ $orang  }}</li>
		@endforeach
	
		
		
		 	
	
		@if(count($nama)>2) <?php //cek perulangan dari array yang diambil ?>
		<p>user lebih dari banyak</p>
		@else
		<p>user sedikit </p>
		@endif       				<?php //harus diaal,i if dan ditutup dengan endif ?>
	</body>
</html> 