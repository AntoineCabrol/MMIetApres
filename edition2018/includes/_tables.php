<div class="programme__tables">
    <?php

    $table1 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=0&single=true&output=csv";
    $table2 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1527743279&single=true&output=csv";
    $table3 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=281515296&single=true&output=csv";
    $table4 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=797441865&single=true&output=csv";

    $tables = array(
      1 => $table1,
      2 => $table2,
      3 => $table3,
      4 => $table4,
    );

    for ($table=1; $table < sizeof($tables)+1; $table++) {

      echo '<div class="programme__table programme__table--'.$table.'">';

      $row = 1;
      if (($handle = fopen($tables[$table], "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

          $num = count($data);
          $row++;

          if($row == 2) {
            echo('<h4 class="programme__table-agence">');
            echo $data[0];
            echo("</h4>");
          }
          else {
            echo('<li class="programme__table-passage">');
            for ($c=0; $c < $num; $c++) {
              if($c == 0) {
                echo('<span class="programme__table-horaire">');
                echo $data[$c];
                echo('</span>');
              }
              else {
                echo('<span class="programme__table-etudiant">');
                echo $data[$c];
                echo('</span>');
              }
            }
            echo("</li>");
          }

        }
        fclose($handle);
      }

      echo "</div>";

    }

    ?>
</div>
