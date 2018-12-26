<?php include "includes/_head.php" ?>


<body class="page-index">

  <?php
    echo '<aside class="notification';

    if (!$sock = @fsockopen('www.google.fr', 80, $num, $error, 5)) {
      echo ' offline">';
      echo 'Pas de connexion...';
    }
    else { echo '">'; }

    echo '</aside>';
  ?>


  <?php
  include "includes/_menu.php";
  include "includes/_evenement.php";
  include "includes/_programme.php";
  include "includes/_entreprises.php";
  include "includes/_etudiants.php";
  include "includes/_contact.php";
  ?>

</body>


</html>
