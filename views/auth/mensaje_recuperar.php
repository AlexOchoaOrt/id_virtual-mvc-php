<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php 
    require_once __DIR__ . '/../header/header.php';
    ?>
    <br>
    <section class="feature_section layout_padding2 layout_margin">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span class="span-p">Contraseña cambiada correctamente</span><br/><span class="span-g">Ingrese nuevamente a su cuenta</span>
        </h2>
      </div>
    </div>
    <div class="container">
      <section>
      </section>
    </div>
  </section>
    <!-- end header section -->
  </div>
  <script>
        let menuicn = document.querySelector(".menuicn"); 
let nav = document.querySelector(".navcontainer"); 
  
menuicn.addEventListener("click", () => { 
    nav.classList.toggle("navclose"); 
})
    </script>
<?php 
    require_once __DIR__ . '/../header/footer.php';
    ?>