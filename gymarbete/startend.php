<?php


function top() {
        
		echo"<html>\n";
      echo"<head>\n";
	  
		echo" <meta  charset=utf-8 />";
		
		echo"<link href=\"default.css\" rel=\"stylesheet\" type=\"text/css\"/>";
		echo"<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial\" rel=\"stylesheet\" />";
		echo"<link href=\"fonts.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />";
	 
?>
	 
	
<?php  
  echo"</head>\n";
      echo"<body>\n";
      
	  
	  
		echo"<div id=\"header\" class=\"container\">";	 

			 
			
			echo"<div id=\"menu\">";
				echo"<ul>";
					echo"<li class=\"active\"><a href=\"index.php\" accesskey=\"1\" title=\"\">Hem</a></li>";
					echo"<li><a href=\"galleri.php\" accesskey=\"2\" title=\"\">Galleri</a></li>";
					echo"<li><a href=\"omoss.php\" accesskey=\"3\" title=\"\">Om oss</a></li>";
					echo"<li><a href=\"inlagg.php\" accesskey=\"4\" title=\"\">Inlägg</a></li>";



	               	if(isset($_SESSION['admin'])){

	if($_SESSION['admin']){

	echo"<li><a href = \"logout.php\" name = \"action\" value = \"logout\">LOGGA UT</a></li>";
	
	
	}

	else{
            echo"<li><a id = \"logga\">LOGGA IN</a></li>";
 }
}else{
    echo"<li><a id = \"logga\">LOGGA IN</a></li>";
                     
                        
                       

                  
                    }
	               	 			
    
				echo"</ul>";
                
               	
        echo"</div>";
        
    echo"<div class=\"face\"><a class =\"test\" 	href=\"\"><img src=\"fbliten.png\"></a>";
    
    echo"</div>";
       
        echo"</div>";
		
		
		
			
	
	
			echo"<div id=\"content\">\n";
		
     echo"<div id =\"div2\">
        <form method = \"POST\" action = \"check.php\" name=\"login\" class =\"Login\">\n";
    
  				echo"<fieldset>\n";
      		    echo"<label for = \"username\">Användarnamn</label>\n";
      			echo"<input type =\"text\" name = \"username\">\n"; 
      			echo"<label for = \"password\">Lösenord</label>\n";
      			echo"<input type = \"password\" name=\"password\">\n"; 
      			echo"<button>Logga in</button>\n";
  				echo"</fieldset>\n";
  				echo"</form>";
        
        echo"</div>";
		
        echo"</div>";
		
        }

		
function bottom() {

echo"</div>";
			
?>			
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">     </script> 	

<script>
	
    $(document).ready(function(){



	$("#logga").click(function(){
  	$("#div2").slideToggle("fast");
});
}); 
</script>
	  
	 
<?php	  
	
	  echo"  </body>\n";
      echo"</html>\n";
}

?>
