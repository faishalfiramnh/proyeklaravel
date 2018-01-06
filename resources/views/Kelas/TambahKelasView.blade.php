<html>
	<title> </title>
	<head>
		<link href="{{ URL::asset('vendor/semantic/dist/semantic.min.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/semantic/dist/semantic.min.js') }}"></script> 
	</head>
	<body>
		<h1>Tambah Kelas</h1>
		<div class="ui input" >
			<form action="/Kelas" method="post">
				<label for="">Mata Kuliah </label> <br> <br>
				<input type="text" name="mataKuliah" >
				<br> <br>
				<label for="">Hari</label> <br> <br>
				<input type="text" name="hari" >
				<br> <br>
				<label for="">gedung</label> <br> <br>
				<select name="gedung" id="gedung">
					<option value="sipil">sipil</option>
					<option value="af">AF</option>
				</select>
				<br> <br>
				<label for="">lantai</label> <br> <br>
				<input type="number" minlength="1" name="lantai" maxlength="8" >
				<br> <br>
				<label for="">nama ruangan</label> <br> <br>
				<input type="text" name="namaRuangan">
				<br> <br>
				<label for="">status</label> <br>
				<input type="text" name="status" >
				<br> <br>
		</div>
				<div class="ui inverted segment">		
				<input type="submit" name="submit" value="tambah" class="ui inverted grey button">
				</div>
				{{ csrf_field() }}
			</form>
		
	</body>
</html>