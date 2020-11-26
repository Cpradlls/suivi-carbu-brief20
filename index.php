<?php include ("head.php"); ?>
<body>

  <header>
    <h1>suivi-carbu</h1>
  </header>

  <main>
    <h2>Page d'accueil</h2>
    <a class="btn" href="ajout--formulaire.php">Ajouter</a>

    <?php

      if (isset($_COOKIE["plein"])) {

        echo "<div class='scroll'>"
            ."<table>"
            ."<thead>"
            ."<tr>"
            ."<th>Date</th>"
            ."<th>Prix/L</th>"
            ."<th>Conso moyenne</th>"
            ."</tr>"
            ."</thead>"
            ."<tbody>"
            ."</div>";

        foreach ($_COOKIE["plein"] as $key => $value) {
          list($datePlein, $prixLitre, $moyenneLitresAuCent) = explode("|", $value);

          echo "<tr>"
          ."<td>$datePlein</td>"
          ."<td>$prixLitre</td>"
          ."<td>$moyenneLitresAuCent</td>"
          ."</tr>";

        }

        echo "</tbody>"
            ."</table>";

      } else {

        echo "<p>Ajouter un plein pour commencer</p>";

      }

    ?>

  </main>

</body>
</html>
