<html>    
	<head>        
		<title>Tugas view @yield('title')</title>    
	</head>    
	<body>        
		@section('sidebar')            
			This is the Contact view.        
		@show        
		<div class="container">            
			@yield('content')        
		</div>    
	</body>
</html>
