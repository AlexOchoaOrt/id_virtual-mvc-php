<section class="Usuario">
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>ID VIRTUAL</title> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
        <a class="navbar-brand" href="/">
      <span>
        ID Virtual
      </span>
       </a>
            
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> 
		</div> 


	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<a href="/usuario"></a>
					<div class="nav-option option1"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div> </a>
					<a href="/perfil">
					<div class="nav-option option5"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
							class="nav-img"
							alt="blog"> 
						<h3> Profile</h3> 
					</div>
					</a> 
					<a href="/logout">
					<div class="nav-option logout"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout"> 
						<h3>Logout</h3> 
					</div> 
					</a>
				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<div class="searchbtn"> 
				</div> 
			</div> 
			<div class="box-container"> 
                <div><img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=/id?cuenta=<?php echo s($cuenta->token); ?>" alt="">   </div>
			</div>
            <div class="box-container"> 
            <!--<div><a href="/"><button class="view copiar">Copiar</button></a>
                <a href="/"><button class="view descargar">Descargar</button></a>
                <a href="/"><button class="view compartir">Compartir</button></a>-->
                <a href="javascript:history.back()"><button class="view regresar">Regresar</button></a></div>
			</div>
		
			</div>
			 
		</div> 
	</div> 

	<script>
        let menuicn = document.querySelector(".menuicn"); 
let nav = document.querySelector(".navcontainer"); 
  
menuicn.addEventListener("click", () => { 
    nav.classList.toggle("navclose"); 
})
    </script>
</body> 
</html>

</section>