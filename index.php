<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
  try {
    if (isset($_REQUEST['action'])) {
      require "model.php";
      require "control.php";
      $employe = new Employes();

      if ($_POST['action'] == 'Supprimer') {
        $employe->setdelete($_POST['ide']);
      } 

      if ($_GET['action'] == 'add') {
        $employe->setAdd($_POST);
      } 

      if ($_POST['action'] == 'Modifier') {
        $employe->setUpdate($_POST);
      } 

      if ($_POST['action'] == 'Rechercher') {
        $employe->Search($_POST);
      } 

    }

      // include "view.php"; 
      header('Location: ./view.php');      

  }
  catch (Exception $e) {
      erreur($e->getMessage());
  }  
  
?>
