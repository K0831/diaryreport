<!doctype html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>DiaryReport</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <style>
body {
	margin: 0;
	width: 100%;
	height: 100vh;
	font-family: "Exo", sans-serif;
	color:#fff;
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradientBG 4.5s ease infinite;
}


@keyframes gradientBG {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

/*.container-fluid {*/
	/*width: 100%;*/
	/*position: absolute;*/
/*}*/

 .center{
      margin-top:8%;
  }
  
@media (min-width: 768px) {
   
  h1 {
      font-size:90px;
  }
  
 
  h2{
      margin-top:5%;
  }
  
  p{
      font-size:25px;
  }
  
  .nav-tabs li{
      font-size:20px;
  }
  
}

@media(max-width:414px){
    h2{
        margin-top:11%;
    }
    .center{
      margin-top:12%;
  }
  
  .nav-tabs li{
      font-size:10px;
  }
}

.btn{
    text-decoration:none;
    color:#fff;
    background-color:transparent;
    border: 4px solid #fff; 
    cursor:pointer;
}

.btn:active{
    text-decoration: none;
    color:rgba(0,0,0,0);
    background-color:#fff;
}


.nav-tabs li {
    display: block;
    width: 100%;
    background-color:white;
    text-align: center;
    padding: 15px;
    border-radius:3px;
}
img{
    border-radius:50%;
}
        </style>
    </head>
    
    <body>
       
        @include('commons.navbar')
       
        <div class="container">
           
            @include('commons.error_message')
            
            @yield('content')
           
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        
        
    </body>
    
</html>