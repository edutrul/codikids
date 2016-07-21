<?php 
require_once 'header.php'; 
require_once 'connection.php';
$uid = !empty($_SESSION['uid']) ? $_SESSION['uid'] : '';
$sql = "SELECT juego_id FROM opcion WHERE uid = '" . $uid . "'";
$result = $conn->query($sql);
$juegos_allowed = [];
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_object()) {
    $juegos_allowed[] = $row->juego_id;
  }
}

$result = $conn->query($sql);

$sql = "SELECT * FROM juego j inner join opcion o on j.juego_id = o.juego_id order by j.juego_id asc";
$result = $conn->query($sql);
$juegos = array();

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_object()) {
    $row->game_not_allowed = FALSE;
    if (in_array($row->juego_id, $juegos_allowed)) {
      $row->game_not_allowed = TRUE;
    }
    $juegos[] = $row;
  }
}

$conn->close();
?>
      
<!-- Page Features -->
  <div class="row grid">
    <!-- @TODO: APPLY CODING STANDARDS. -->
      <?php foreach ($juegos as $juego):?>
        <?php $opacity_class = !$juego->game_not_allowed ? 'opacity' : ''; ?>
        <div class="element-item col-md-2 <?php print $opacity_class; ?> <?php print $juego->dificultad ?>" style="width:100%;text-align:center;"> 
              <br>
            <span style="font-size:1.5em;font-weight:bold;">• Nivel #<?php print $juego->juego_id?></span>
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
                                                  <?php 
                                                  $minuto = floor($juego->timer/60);
                                                  $segundos = $juego->timer -($minuto*60);
                                                  print $minuto."min"." ".$segundos."seg"?>
                                                </div>
                                            </div>
                        </div>
                  </div>
         </div>
              <?php endforeach; ?>
  </div>
<!-- /.row -->
<?php require_once "footer.php"; ?>

