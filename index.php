<?php include "database.php";?>

<!DOCTYPE html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <meta charset="utf-8">
  <title>Visual Sport PHP</title>
</head>

  <body>

    <div class="area">
      <h1>Visual Sport PHP</h1>
      <div class="barra">
        <input class="text" placeholder="ID Player">
        <button type="button" name="button">Cerca</button>
      </div>
      <div class="error">Inserisci un nome valido</div>
      <div>Random Players:</div>
    </div>

    <!-- ciclo che popola la lista randomPlayer -->
    <div class="lista1">

      <?php foreach ($lista_giocatori as $key => $giocatore) {
        if ($key < 25) { ?>
          <span class="randomPlayer" id="<?php echo $key; ?>"><?php echo $giocatore["nome"];?></span>
      <?php } } ?>

    </div>


    <!--  ciclo che crea tutte le card. -->
    <?php foreach ($lista_giocatori as $giocatore) { ?>

      <div class="container">
        <img src="Immagine.png">
        <div class="stats">
          <div id="<?php echo $giocatore["nome"]; ?>">
            Nome: <?php echo $giocatore["nome"]; ?>
          </div>
          <div>
            Punti: <?php echo $giocatore["punti"]; ?>
          </div>
          <div>
            Rimbalzi: <?php echo $giocatore["rimbalzi"]; ?>
          </div>
          <div>
            Falli: <?php echo $giocatore["falli"]; ?>
          </div>
          <div>
            Percentuale tiri da 2: <?php echo $giocatore["perc_2_punti"]; ?>
          </div>
          <div>
            Percentuale tiri da 3: <?php  echo $giocatore["perc_3_punti"]; ?>
          </div>
        </div>
      </div>

    <?php } ?>

  </body>
</html>
