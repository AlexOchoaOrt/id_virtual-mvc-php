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
          <span class="span-p">Activa tu cuenta gratis</span><br/><span class="span-g">Personal</span>
        </h2>
      </div>
    </div>
    <div class="container">
      <section>
        <form class="formulario" method="post" action="/personal">
        <?php include_once __DIR__ ."/../templates/alertas.php" ?>
          <fieldset>
            <legend class="span-p">llena todos los campos</legend>
            <div class="contenedor-campos">
            <div class="campo">
            <label>Nombre:</label>
            <input class="input-text" type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo s($usuario->nombre); ?>">
            </div>
            <div class="campo">
            <label>Apellido paterno:</label>
            <input class="input-text" type="text" name="apellido_pa" id="apellido_pa" placeholder="Apellido paterno" value="<?php echo s($usuario->apellido_pa); ?>">
            </div>
            <div class="campo">
            <label>Apellido materno:</label>
            <input class="input-text" type="text" name="apellido_ma" id="apellido_ma" placeholder="Apellido materno" value="<?php echo s($usuario->apellido_ma); ?>">
            </div>
            <div class="campo">
            <label>Fecha de nacimiento:</label>
            <input class="input-text" type="date" name="fecha_na" id="fecha_na" value="<?php echo s($usuario->fecha_na); ?>">
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
            <div class="campo">
            <label>Contraseña</label>
            <input class="input-text" type="password" name="password" id="password" placeholder="Ingrese su contraseña" value="<?php echo s($usuario->password); ?>">
            </div>
            </div>
            <div class="alienar-derecha flex">
            <input class="boton" type="submit" value="Enviar">
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
