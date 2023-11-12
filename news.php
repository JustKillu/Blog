<?php
// Conexión a la base de datos
$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');

// Consulta a la base de datos
$query = $db->query('SELECT * FROM entradas');
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>KilluBlog</title>
  <link rel="stylesheet" href="css/news_style.css">

</head>

<body>
  <header class="header">
    <div class="contendor1">
      <img src="images/blue_eyes.png" class="blue-eyes" />
      <h1 class="title">
        <span>Killu</span>Blog
      </h1>
    </div>
    <button id="toggleButton" class="nav-link">☰</button>
    <nav class="nav" id="navbar">
      <div class="nav-links">
        <a href="home.html" class="nav-link ">Home</a>
        <a href="about.html" class="nav-link">About</a>
        <a href="news.php" class="nav-link active">News</a>
        <a href="enviar_sugerencia.html" class="nav-link">Enviar Sugerencia</a>
      </div>
    </nav>
    
    <script>
document.getElementById("toggleButton").addEventListener("click", function() {
  var nav = document.getElementById("navbar");
  nav.classList.toggle("show");
});
    </script>
  </header>

  <?php if (empty($result)) { ?>
    <div class="center">
      <img src="images/photon_eyes.png" alt="Photon Eyes" />
      <h2>No hay entradas disponibles en este momento.</h2>
    </div>
  <?php } else { ?>
   
      <ul>
        <?php foreach ($result as $entrada) { ?>
          <div class="recuadro">
                <h2>Entrada <?php echo $entrada["id"]; ?></h2>
                <p>Autor: <?php echo $entrada["Autor"]; ?></p>
                <p>Correo electrónico: <?php echo $entrada["Correo Electronico"]; ?></p>
                <p>Sugerencia: <?php echo $entrada["Sugerencia"]; ?></p>
                </div>
        <?php } ?>
      </ul>
    
  <?php } ?>
  <footer class="footer" >
  <div class="contendor2">
    <img src="images/galatic_kuriboh.png" class="galatic_kuriboh" />
    <h3 class="title1">
      Developed by <span>|</span><a href="https://github.com/JustKillu/" class="akilu">Killu</a>
    </h3>
  </div>
</footer>
</body>


</html>
