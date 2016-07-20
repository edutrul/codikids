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
        <div class="element-item col-md-2 <?php print $juego->dificultad ?>" style="width:100%;text-align:center;"> 
              <br>
            <span style="font-size:1.5em;font-weight:bold;">• Nivel #</span>
              <img src="images/juegos/<?php print $juego->imagen; ?>" alt="angrybird juego" style="position:relative; padding-left:20px" width="300px">
                  <div style="float:right;  padding-right:20%; ">
                        <div style="padding:8px; width:300px;">
                            <h2 class="nombre"><?php print $juego->titulo;?></h2>
                              <br>
                                <span class="descripcion"><?php print $juego->descripcion; ?></span><br>
                                    <a href="/reporte.php?juego=<?php print $juego->juego_id; ?>" target="_blank">Ver reporte</a><br>
                                        <br><br>
                                           <span class="descripcion"> Tiempo transcurrido</span><br>
                                      <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            5m 27s
                                          </div>
                                      </div>
                        </div>
                  </div>
         </div>
              <?php endforeach; ?>
  </div>
<!-- /.row -->
<?php require_once "footer.php"; ?>

