<?php


function top() {
?>

		<html>
      <head>

		 <meta  charset=utf-8 />

		<link href="default.css" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet">
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all">




  </head>
      <body>



		<div id="header" class="container">



			<div id="menu">
				<ul>
					<li class="active"><a href="index.php" title="\">Hem</a></li>
					<li><a href="galleri.php"  title="\">Galleri</a></li>
					<li><a href="omoss.php"  title="\">Om oss</a></li>


<?php

	               	if(isset($_SESSION['admin'])){

	if($_SESSION['admin']){
    echo"<li><a href=\"inlagg.php\"  title=\"\">Inlägg</a></li>";
	echo"<li><a href = \"logout.php\">LOGGA UT</a></li>";


	}

	else{
            echo"<li><a id = \"logga\">LOGGA IN</a></li>";
 }
}else{
    echo"<li><a id = \"logga\">LOGGA IN</a></li>";






                    }

?>
				</ul>


        </div>

    <div class="face"><a class ="test" 	href="\"><img src="fbliten.png"></a>

    </div>

        </div>



        	


			<div id="content">

     <div id ="div2">
        <form method ="POST" action ="check.php" name="login" class ="Login">

  				<fieldset>
      		    <label for ="username">Användarnamn</label>
      			<input type ="text" name ="username">
      			<label for ="password">Lösenord</label>
      			<input type ="password" name="password">
      			<button>Logga in</button>
  				</fieldset>
  				</form>

        </div>

        </div>

<?php
        //STÄNGER TOP-FUNKTIONEN
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
