<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php 
    require_once __DIR__ . '/../header/header.php';
    ?>
    <!-- end header section -->
  </div>

  <!-- feature section -->
  <section class="feature_section layout_padding2 layout_margin">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span class="span-p">Ingresa a cuenta gratis</span><br/><span class="span-g"></span>
        </h2>
      </div>
    </div>
    <div class="container">
      <section>
        <form class="formulario" action="" method="post">
        <?php include_once __DIR__ ."/../templates/alertas.php" ?>
        <?php if($error) return;?>
          <fieldset>
            <legend class="span-p"></legend>
            <div class="contenedor-campos">
              <div class="campo">
              <label>Contraseña</label>
              <input class="input-text" type="password" name="password" id="password" placeholder="Ingrese su contraseña" value="<?php echo s($auth->password); ?>">
              </div>
              </div>
            <div class="alienar-derecha flex">
            <input class="boton" type="submit" value="Enviar">
            </div>
          </fieldset>
          <div class="acciones">
          <a href="/login">¿Ya tienes cuenta? Inicia sesion</a>
          <a href="/productos" class="enlace">¿Aun no tienes una cuenta? Crea una</a>
        </div>
        </form>
      </section>
    </div>
  </section>
</body>