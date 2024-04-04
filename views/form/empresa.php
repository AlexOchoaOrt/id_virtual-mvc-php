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
          <span class="span-p">Activa tu cuenta gratis</span><br/><span class="span-g">Empresa</span>
        </h2>
      </div>
    </div>
    <div class="container">
      <section>
        <form class="formulario" action="/empresa" method="post">
        <?php include_once __DIR__ ."/../templates/alertas.php" ?>
          <fieldset>
            <legend class="span-p">llena todos los campos</legend>
            <div class="contenedor-campos">
              <div class="campo">
              <label>Nombre de la empresa:</label>
              <input class="input-text" type="text" name="nombre" id="nombre" value="<?php echo s($empresa->nombre); ?>" placeholder="Tu nombre">
              </div>
              <div class="campo">
              <label>Contacto:</label>
              <input class="input-text" type="text" name="contacto" id="contacto" value="<?php echo s($empresa->contacto); ?>" placeholder="Tu nombre">
              </div>
              <div class="campo">
              <label>Telefono:</label>
              <input class="input-text"  type="tel" name="telefono" id="telefono" value="<?php echo s($contacto->telefono); ?>" placeholder="Tu telefono">
              </div>
              <div class="campo">
              <label>Email:</label>
              <input class="input-text" type="email" name="email" id="email" value="<?php echo s($contacto->email); ?>" placeholder="Tu email">
              </div>
              <div class="campo">
              <label>Direccion:</label>
              <input class="input-text" type="text" name="direccion" id="direccion" value="<?php echo s($contacto->direccion); ?>" placeholder="Tu direccion">
              </div>
              <div class="campo">
              <label>Codigo postal</label>
              <input class="input-text" type="number" name="cp" id="cp" value="<?php echo s($contacto->cp); ?>" placeholder="Tu codigo postal">
              </div>
              <div class="campo">
              <label>Contraseña</label>
              <input class="input-text" type="password" name="password" id="password" placeholder="Ingrese su contraseña">
              </div>
              </div>
            <div class="alienar-derecha flex">
            <input class="boton"  class="width:;" type="submit" value="Enviar">
            </div>
          </fieldset>
          <div class="acciones">
          <a href="/login">¿Ya tienes cuenta? Inicia secion</a>
          <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
        </form>
      </section>
    </div>
  </section>
</body>