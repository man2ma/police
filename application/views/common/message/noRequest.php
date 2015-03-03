<html>
<head>
  <script src="http://code.jquery.com/jquery-latest.js" > </script>
  <script type="text/javascript">
    setInterval("my_functionnosms();",1000); 
    function my_functionnosms(){
      $('#refresh_nosms').load(location.href + ' #time_nosms');
    }
  </script>
</head>
<body>
  <div id="refresh_nosms">
  <div id="time_nosms">
  
<div class="jumbotron">
  <h2>Hello, no request found!</h2>

</div>
  </div>  
  </div>
</body>
</html>