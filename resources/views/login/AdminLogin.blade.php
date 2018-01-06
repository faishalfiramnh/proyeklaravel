<html>
	<title> </title>
	<head> </head>
	

	
	<body>
	<p>username <input type="text">
		@foreach($tes as $kkk)
		{{ $kkk -> username  }}
		@endforeach 
	</p>
	<p>Password <input type="Password">

	</p>	
	

	</body>
</html>