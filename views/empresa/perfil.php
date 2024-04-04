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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
</head> 

<body class="Usuario"> 
	
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
                    <a href="/empresa_usuario">
					<div class="nav-option option5"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div>
                    </a> 
                    <a href="/perfil_empresarial">
					<div class="nav-option option1"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
							class="nav-img"
							alt="blog"> 
						<h3>Profile</h3> 
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
			<div class="report-container"> 
			<?php include_once __DIR__ ."/../templates/alertas.php" ?>
				<div class="report-header"> 
					<h1 class="recent-Articles">Actualiza tu informacion</h1> 
				</div> 
			<div class="repor_main">
			<div class="contenedor-campos">
			<div class="campo">
			<h2><label class="centro">Imagen de perfil</label></h2>
			</div>
			<br></br>
			<div class="campo">
			<div class="row">
			<div class="col-lg-12">
			<div>
			<img class="img-fluid rounded mx-auto d-block" src="/build/imagenes/<?php echo s($media->fotografia) ?>" alt="logo" width="200px" height="200px">
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="derecha">
			<fieldset>
			<form method="post">
			<div class="contenedor-campos">
			<div class="campo">
			<h2><label class="centro">Cambiar imagen de perfil</label></h2>
			</div>
			<div class="campo">
			<input type="file" id="upload" accept="image/*">
			</div>
			<div class="campo">
			<div id="crop-container"></div>
            <button class="boton2" id="crop-btn">Cargar Imagen</button>
			</div>
			</div>
			</form>
			</fieldset>
			</div>
			<div class="derecha">
			<form method="post">
			<fieldset>
            <div class="contenedor-campos">
			<div class="campo">
			<h2><label class="centro">Informacion personal</label></h2>
			</div>
			<div class="campo">
            <label>Nombre de la empresa</label>
            <input class="input-text" type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo s($empresa->nombre); ?>">
            </div>
            <div class="campo">
            <label>Contacto:</label>
            <input class="input-text" type="text" name="apellido_pa" id="apellido_pa" value="<?php echo s($empresa->contacto); ?>">
            </div>
            <div class="campo">
            <label>Telefono:</label>
            <input class="input-text"  type="tel" name="telefono" id="telefono" placeholder="Tu telefono" value="<?php echo s($contacto->telefono); ?>">
            </div>
            <div class="campo">
            <label>Email:</label>
            <input class="input-text" type="email" name="email" id="email" placeholder="Tu email" value="<?php echo s($contacto->email); ?>">
            </div>
            <div class="campo">
            <label>Direccion:</label>
            <input class="input-text" type="text" name="direccion" id="direccion" placeholder="Tu direccion" value="<?php echo s($contacto->direccion); ?>">
            </div>
            <div class="campo">
            <label>Codigo postal</label>
            <input class="input-text" type="number" name="cp" id="cp" placeholder="Tu codigo postal" value="<?php echo s($contacto->cp); ?>">
            </div>
			<input id="tipo" name="tipo" type="hidden" value="1" />
			<div class="alienar-derecha flex">
            <input class="boton2" type="submit" value="Actualizar">
            </div>
            </div>
            </fieldset>
			</form>
			</div>
			<div class="izquierda">
			<div class="superior">
			
			</div>
			<div class="inferior">
			<form method="post" enctype="multipart/form-data">
			<fieldset>
            <div class="contenedor-campos">
			<div class="campo">
			<h2><label class="centro">Datos de la id</label></h2>
			</div>
            <div class="campo">
            <label>Facebook:</label>
            <input class="input-text" type="text" name="link_1" id="link_1" value="<?php echo s($social->link_1); ?>">
            </div>
            <div class="campo">
            <label>Twiter:</label>
            <input class="input-text" type="text" name="link_2" id="link_2"  value="<?php echo s($social->link_2); ?>">
            </div>
            <div class="campo">
            <label>Instagram:</label>
            <input class="input-text" type="text" name="link_3" id="link_3"  value="<?php echo s($social->link_3); ?>">
            </div>
            <div class="campo">
            <label>Whatsapp:</label>
            <input class="input-text" type="text" name="link_4" id="link_4" value="<?php echo s($social->link_3); ?>">
            </div>
			<input id="tipo" name="tipo" type="hidden" value="2" />
			<div class="alienar-derecha flex">
            <input class="boton2" type="submit" value="Actualizar">
            </div>
            </div>
            </fieldset>
			</form>
				</div>
			</div>
			
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