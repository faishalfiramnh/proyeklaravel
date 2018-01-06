
<html>
	<title>Selamat data ketua kelas</title>
	<head> 

	 <link href="{{ URL::asset('vendor/semantic/dist/semantic.min.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/semantic/dist/semantic.min.js') }}"></script>
	</head>

	<body> 
	tampilan seluruh kelas <br>
	<div class="ui list">
		<a href="Kelas/create">Tambah Kelas</a>
		@foreach($allDataClass as $isi )
		<div class="item">
			<div class="content">
				<i class="book icon">{{$isi ->mataKuliah}}</i>	
			</div>
		</div>
		<div class="item">
			<div class="content">
				<i class="calendar icon">{{$isi ->hari}}</i>	
			</div>
		</div>
		<div class="item">
			<div class="content">
				<i class="building icon">{{$isi -> gedung}}</i>	
			</div>	
		</div>
		<div class="item">
			<div class="content">
				<i class="rocket icon">{{$isi ->lantai}} </i>	
			</div>
		</div>
		<div>
			<div class="content">
				<i class="suitcase icon">{{$isi ->namaRuangan}}</i>	
			</div>	
		</div>
		<div class="item">
			<div class="content">
				<i class="hourglass full icon">{{$isi ->status}}</i>	
			</div>
		</div>
			<form action="/Kelas/{{$isi->id}}" method="post">
			<br> 
			<input type="submit" class="trash outline icon" name="submit" value="hapus">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="DELETE">

		</form>
			<!-- <form action="/Kelas/{{$isi->id}}/editKelas" method="post">
			<input type="submit" name="submit" value="editKelas">
			{{ csrf_field() }}
		
			</form> -->
		
		@endforeach
		
	</div>

	</body>
</html>
<!-- kalau pemanggilan pake id cukup biasah saja
	tapi kalau tanpa id, viewnya harus pake foreach -->