<!DOCTYPE html>
<html>
    <head>
        <title>My Test Laravel</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
		
        <style>
            html, body {
                height: 100%;
            }


          
        </style>
    </head>
    <body>
        <div class="container">
		
		@if(Session::has('flash_message'))
			<div class="alert alert-success">You have been logged in </div>
		@endif
		@yield('content')    
        </div>
		 
    </body>
	 
</html>
