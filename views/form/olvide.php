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
          <span class="span-p">Cambia tu contraseña</span><br/><span class="span-g"></span>
        </h2>
      </div>
    </div>
    <div class="container">
      <section>
        <form class="formulario" action="" method="post">
        <?php include_once __DIR__ ."/../templates/alertas.php" ?>
          <fieldset>
            <legend class="span-p"></legend>
            <div class="contenedor-campos">
              <div class="campo">
              <label>Email:</label>
              <input class="input-text" type="email" name="email" id="email" placeholder="Tu email" value="<?php echo s($auth->email); ?>">
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