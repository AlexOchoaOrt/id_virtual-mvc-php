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
          <span class="span-p">Confirma tu cuenta</span><br/><span class="span-g">Hemos enviado las instrucciones para confirmar tu cuenta
         a tu email</span>
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