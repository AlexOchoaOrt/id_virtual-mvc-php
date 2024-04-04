
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Virtual</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJgfcq4MIq12UZjpFLeb5B+6T2l0t-A" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="cuerpo">
    <div class="background">
        <div class="card">
            <div class="user-info">
                
                <img src="/build/imagenes/<?php echo s($media->fotografia) ?>" width="200px" height="200px">
                <h2 class="user-name"><?php echo s($empresa->nombre); ?></h2>
                <p class="user-role">Contacto: <?php echo s($empresa->contacto); ?></p>
            </div>
            <div class="social-buttons">
                <a href="<?php echo s($social->link_1);?>" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="<?php echo s($social->link_2);?>" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="<?php echo s($social->link_3);?>" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="<?php echo s($social->link_4);?>" class="whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </div>
</body>
</html>