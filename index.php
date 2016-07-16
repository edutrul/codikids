<?php 
require_once 'header.php'; 
require_once 'connection.php';

$sql = "SELECT * FROM juego";
$result = $conn->query($sql);
$juegos = array();

if ($result->num_rows > 0) {
  // output data of each row
    while ($row = $result->fetch_object()) {
      $juegos[] = $row;
    }
}

$conn->close();
?>
      
<!-- Page Features -->
  <div class="row grid">
    <?php foreach ($juegos as $juego):?>
      <div class="element-item col-md-2 <?php print $juego->dificultad ?>">
          <figure class="snip1174 red col-md-2">
            <img width="100px" src="images/juegos/<?php print $juego->imagen; ?>" alt="angrybird juego" />
            <figcaption>
              <h2 class="nombre"><?php print $juego->titulo; ?></h2>
              <br>
              <span class="descripcion"><?php print $juego->descripcion; ?></span><br>
              <a href="/reporte.php?juego=<?php print $juego->juego_id; ?>" target="_blank">Ver reporte</a>
            </figcaption>
          </figure>
      </div>
    <?php endforeach; ?>
  </div>
<!-- /.row -->
<?php require_once "footer.php"; ?>