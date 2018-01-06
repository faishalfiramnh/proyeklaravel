<html>
	<title> </title>
	<head>
		<link href="{{ URL::asset('vendor/semantic/dist/semantic.min.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/semantic/dist/semantic.min.js') }}"></script>  
	</head>
	<body>
		<h1>Edit Kelas</h1>
		<form action="/Kelas/{{$isi->id}}" method="post">
			<label for="">Mata Kuliah </label> <br> <br>
			<input type="text" name="mataKuliah" value="{{ $isi->mataKuliah }}">
			<br> <br>
			<label for="">Hari</label> <br> <br>
			<input type="text" name="hari" value="{{ $isi->hari }}">
			<br> <br>
			<label for="">gedung</label> <br> <br>
			<select name="gedung" id="gedung">
				<option value="{{ $isi->gedung }}">sipil</option>
				<option value="{{ $isi->gedung }}">AF</option>
			</select>
			<br> <br>
			<label for="">lantai</label> <br> <br>
			<input type="text" name="lantai" value="{{ $isi->lantai }}">
			<br> <br>
			<label for="">nama ruangan</label> <br> <br>
			<input type="text" name="namaRuangan" value="{{ $isi->namaRuangan }}">
			<br> <br>
			<label for="">Status</label> <br>
			<input type="text" name="status" value="{{ $isi->status }}">
			<br> <br>
			<input type="submit" class="ui inverted violet button" name="submit" value="editKelas">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT">
		</form>
		
	</body>
</html>