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
          <span class="span-p">Confirma tu cuenta</span><br/><span class="span-g"></span>
        </h2>
      </div>
    </div>
    <div class="container">
      <section>
        <form class="formulario" method="post" action="/personal">
        <?php include_once __DIR__ ."/../templates/alertas.php" ?>
          
        </form>
      </section>
    </div>
  </section>
</body>
<?php 
    require_once __DIR__ . '/../header/footer.php';
    ?>