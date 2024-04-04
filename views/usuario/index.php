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
				<div class=""> 
	
				</div> 
			</div> 

			<div class="box-container"> 

			<a href="/id?cuenta=<?php echo s($usuario->token_f); ?>" target="_blank"><div class="box box1"> 
					<div class="text"> 
						<h2 class="topic-heading">Vista Previa</h2> 
					</div> 

					<img src= 
                           "https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="Views"> 
				</div></a>

				<a href="/Qr?cuenta=<?php echo s($usuario->token_f); ?>"><div class="box box4"> 
					<div class="text"> 
						<h2 class="topic-heading">Copiar QR</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published"> 
				</div></a>
			</div>

			<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">Datos personales</h1> 
					<a href="/perfil"><button class="view">Modificar</button></a>
				</div> 
				<br>
			<div class="repor_main">
			<div class="row">
			<div class="col-lg-12">
			<div>
			<img class="img-fluid rounded mx-auto d-block" src="/build/imagenes/<?php echo s($media->fotografia) ?>" alt="logo" width="200px" height="200px">
			</div>
			</div>
			</div>
					<form method="post">
					<fieldset>
            <div class="contenedor-campos">
            <div class="campo">
            <label>Nombre completo: <?php echo s($usuario->nombre)." ".s($usuario->apellido_pa)." ".s($usuario->apellido_ma); ?></label>
            </div>
            <div class="campo">
            <label>Telefono: <?php echo s($contacto->telefono); ?></label>
            </div>
            <div class="campo">
            <label>Email: <?php echo s($contacto->email); ?></label>
            </div>
            <div class="campo">
            <label>Direccion: <?php echo s($contacto->direccion);; ?></label>
            </div>
            <div class="campo">
            <label>Codigo postal: <?php echo s($contacto->cp); ?></label>
            </div>
            </div>
          </fieldset>
					</form>
					<form method="post">
					<fieldset>
            <div class="contenedor-campos">
            <div class="campo">
            <label>Facebook: <?php echo s($social->link_1); ?></label>
            </div>
            <div class="campo">
            <label>Instagram: <?php echo s($social->link_2); ?></label>
            </div>
            <div class="campo">
            <label>Twitter: <?php echo s($social->link_3); ?></label>
            </div>
            <div class="campo">
            <label>Whatsaap: <?php echo s($social->link_4); ?></label>
            </div>
            </div>
          </fieldset>
					</form>
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