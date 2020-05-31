<?php
  if (isset($_POST['unite'])) {
    $unite = $_POST['unite'];
    $lienDebut = "http://www.slstsciencesphysiques.eu/wa_files/3ch";
    $lienFin = "c.pdf";

    header('Location: ' . $lienDebut . $unite . $lienFin );

  }



?>
