<?php


function top() {
        
		echo"<html>\n";
      echo"<head>\n";
	  
		echo" <meta  charset=utf-8 />";
		
		echo"<link href=\"layout.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	 
?>
	 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	 
	 
	 <script>
	$(document).ready(function(){
			
			
			
	});
		</script>
	 
<?php  
  echo"</head>\n";
      echo"<body>\n";
      
	  
	  
	  echo"<div id=\"box\" >\n";

	 
			echo"<div id=\"head\">\n";
				echo"nice site<img src=\"head.png\">";
			echo"</div>\n";
      
	
			echo"<div id=\"menu\">";
				echo"<a href=\"?page=produkter\">produkter </a>&nbsp;&nbsp;&nbsp;<a href=\"?page=start\">start </a>&nbsp;&nbsp;&nbsp; <a href=\"?page=info\">info</a> &nbsp;&nbsp;&nbsp;<a href=\"?page=test\">test</a>";
			echo"</div>\n";
		
		
		
		
			
	
	
			echo"<div id=\"content\">\n";
		
		}

		
		
		
		
		
			function bottom() {
		
			echo"</div>";
			
				$page_ok=filter_input(INPUT_GET,'page',FILTER_SANITIZE_URL);
			if ($page_ok != "start"){
      	
					echo"<div id=\"borderbottom\">\n";
					echo"<hr/>Daniel Andersson tele xxx-xxxxxxxx email xxx@xxxxxx ";
					echo"</div>\n";

				}
				
			echo"</div>\n";   //stänger box taggen
      
	 
	  
	 
	  
	  
	
	  echo"  </body>\n";
      echo"</html>\n";
}

?>


