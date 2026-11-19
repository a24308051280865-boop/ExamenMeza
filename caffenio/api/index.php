<?php
session_start();
if (isset($_GET["salir"])) {
    session_destroy();
    header("Location: ../views/login.html");
    exit;
}
if (!isset($_SESSION["nombre"])) {
    header("Location: ../views/login.html");
    exit;
}

$nombre = htmlspecialchars($_SESSION["nombre"]);
$correo = htmlspecialchars($_SESSION["correo"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Caffenio - Tienda</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <header id="inicio">
        <div class="sesion">
            Sesión iniciada: <?php echo $nombre; ?>
            <a href="index.php?salir=1">Cerrar sesión</a>
        </div>
        <img src="https://play-lh.googleusercontent.com/Mslq5dV5HQ_9YEBZ9Ce_HPKft6f8UL1gxTffRZ9JETWM4pAu3ZGKK9S4dER_z07BeU6JAajxyCL-ofY5Bz48Woc" alt="Logo Caffenio" class="logo">
        <h1>CAFFENIO</h1>
        <p>Tienda en línea</p>
    </header>
    <nav>
        <ul>
            <li><a href="#promocion">Promoción</a></li>
            <li><a href="#calientes">Bebidas calientes</a></li>
            <li><a href="#frias">Bebidas frías</a></li>
            <li><a href="#frappes">Frappés</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <div class="bienvenida">
            ¡Bienvenido a la tienda, <strong><?php echo $nombre; ?></strong>!<br>
            Correo: <?php echo $correo; ?>
        </div>
        <section id="promocion" class="promocion">
            <h2>¡Promoción de la semana!</h2>
            <p>2x1 en todos los frappés</p>
            <p>Lunes, martes y miércoles</p>
        </section>

        <section id="calientes" class="seccion">
            <h2>Bebidas calientes</h2>

            <div class="bebida">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjIfls18m1srrG7p4TB2gFoCO7UpQ6Lj04FBFOP90r4WjMH7VPE0zjiC8q&s=10" alt="Americano">
                <h3>Americano</h3>
                <p>Café negro suave y recién hecho.</p>
                <p class="precio">$35</p>
            </div>

            <div class="bebida">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Cappuccino_PeB.jpg?utm_source=es.wikipedia.org&utm_campaign=index&utm_content=original" alt="Capuchino">
                <h3>Capuchino</h3>
                <p>Espresso con leche y espuma.</p>
                <p class="precio">$48</p>
            </div>

            <div class="bebida">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBLYL59AoTqhoyGT8hs_WUnu4DXJky_X9E4vu6rjunZg&s=10" alt="Latte">
                <h3>Latte</h3>
                <p>Espresso con mucha leche vaporizada.</p>
                <p class="precio">$50</p>
            </div>
        </section>

        <section id="frias" class="seccion">
            <h2>Bebidas frías</h2>

            <div class="bebida">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRNAWwHQk9RFDrYvO7cUKobYQ_qkNN_JzQ_dlEMn2_6hVU1dccktO97yw&s=10" alt="Café frío">
                <h3>Café frío</h3>
                <p>Café con hielo, ideal para el calor.</p>
                <p class="precio">$45</p>
            </div>

            <div class="bebida">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbWlY5S9qkzV5rlMfikw2QjcnjYdkN6rqezza66bXp0w&s=10" alt="Té helado">
                <h3>Té helado</h3>
                <p>Té natural con limón y hielo.</p>
                <p class="precio">$38</p>
            </div>

            <div class="bebida">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRi1r7kmu8Fc4RFT6lUroJg9n5uhUt7QK8qzlOzlr5fA&s=10" alt="Limonada">
                <h3>Limonada</h3>
                <p>Limonada fresca preparada al momento.</p>
                <p class="precio">$35</p>
            </div>
        </section>

        <section id="frappes" class="seccion">
            <h2>Frappés</h2>

            <div class="bebida">
                <img src="https://cdn7.kiwilimon.com/recetaimagen/36987/960x640/46351.jpg.jpg" alt="Frappé moka">
                <h3>Moka</h3>
                <p>Café, chocolate y crema batida.</p>
                <p class="precio">$62</p>
            </div>

            <div class="bebida">
                <img src="https://www.starbucks.es/sites/starbucks-es-pwa/files/styles/c10_2_col_text_560x467/public/2021-11/Caramel%20Frappuccino%C2%AE%20.jpeg.webp?h=8a7fc05e&itok=grec2Qmg" alt="Frappé caramelo">
                <h3>Caramelo</h3>
                <p>Café con salsa de caramelo.</p>
                <p class="precio">$62</p>
            </div>

            <div class="bebida">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRrSA23kU7--6HDt6l59WJLoY8T8_9N2ayApKW15d3eqdzOhucBqTld-U&s=10" alt="Frappé vainilla">
                <h3>Vainilla</h3>
                <p>Cremoso frappé sabor vainilla.</p>
                <p class="precio">$60</p>
            </div>
        </section>

    </div>

    <footer>
        <h3>Información del alumno</h3>
        <p>Nombre: Magallanes Lopez Carlos Gabriel</p>
        <p>Grupo: 5J</p>
        <p>Materia: Construye Aplicaciones Web</p>
        <p>Profesora: Leticia Meza Díaz</p>
        <p>Examen 2do parcial</p>
        <p><a href="#inicio">Volver arriba</a></p>
    </footer>

</body>
</html>