<?php
echo '<div class="programme__tables';

if (!$sock = @fsockopen('www.google.fr', 80, $num, $error, 5)) {
  echo ' offline">Oops, pas d\'internet...</div>';
}
else {
  echo '">';

  $table1 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=0&single=true&output=csv";
  $table2 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1527743279&single=true&output=csv";
  $table3 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=281515296&single=true&output=csv";
  $table4 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=797441865&single=true&output=csv";
  $table5 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=4406194&single=true&output=csv";
  $table6 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=63645064&single=true&output=csv";
  $table7 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1382786822&single=true&output=csv";
  $table8 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=871588507&single=true&output=csv";
  $table9 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1390883126&single=true&output=csv";
  $table10 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=249353402&single=true&output=csv";
  $table11 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=542453144&single=true&output=csv";
  $table12 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1301255588&single=true&output=csv";
  $table13 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=396047039&single=true&output=csv";
  $table14 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=2012941971&single=true&output=csv";
  $table15 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=216889026&single=true&output=csv";
  $table16 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=555694364&single=true&output=csv";
  $table17 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1460285084&single=true&output=csv";
  $table18 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1786105298&single=true&output=csv";
  $table19 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=925650196&single=true&output=csv";
  $table20 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=1452754544&single=true&output=csv";
  $table21 = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS9LiQUPEto4RCcRTmrluqHtzPii0uhgP-PcIPXkruubG5FscWiam1et73DIQgsAVI2lHI5XZ7vkaM6/pub?gid=939326290&single=true&output=csv";

  $tables = array(
    1 => $table1,
    2 => $table2,
    3 => $table3,
    4 => $table4,
    5 => $table5,
    6 => $table6,
    7 => $table7,
    8 => $table8,
    9 => $table9,
    10 => $table10,
    11 => $table11,
    12 => $table12,
    13 => $table13,
    14 => $table14,
    15 => $table15,
    16 => $table16,
    17 => $table17,
    18 => $table18,
    19 => $table19,
    20 => $table20,
    21 => $table21,
  );

  for ($table=1; $table < sizeof($tables)+1; $table++) {

    echo '<ul class="programme__table programme__table--'.$table.'">';

    $row = 1;
    if (($handle = fopen($tables[$table], "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $num = count($data);
        $row++;

        if ($row == 2) {
          echo('<h4 class="programme__table-agence">');
          echo $data[0];
          echo("</h4>");
        }
        else {
          echo('<li class="programme__table-passage">');
          for ($c=0; $c < $num; $c++) {
            if ($c == 0) {
              echo('<span class="programme__table-passage-horaire">');
              echo $data[$c];
              echo('</span>');
            }
            else {
              echo('<span class="programme__table-passage-etudiant');
              if ($data[$c] == "Libre") { echo(' soften">'); }
              elseif ($data[$c] == "PAUSE") { echo(' break">'); }
              else { echo('">'); }
              echo $data[$c];
              echo('</span>');
            }
          }
          echo("</li>");
        }

      }
      fclose($handle);
    }

    echo "</ul>";
  }

  echo "</div>";

}

?>
