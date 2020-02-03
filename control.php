<?php
class Employes extends DB {

  function getSelect(){
    return $this->getRequete("SELECT * FROM `employe`");
  }

  function setDelete($id){
    $del = $this->getRequete("DELETE FROM `employe` WHERE emp_id=".$id);
    return $del;
  }

  function setAdd($tblemp){
    $strSQL = "INSERT INTO employe (emp_pnom,emp_nom) 
                VALUES ('".$tblemp['prenom']."', '".$tblemp['nom']."');";
    $add = $this->getRequete($strSQL);
    return $add;
  }

  function setUpdate($tblemp){
    $strSQL = "UPDATE employe 
              SET emp_pnom='".$tblemp['prenom']."', 
              emp_nom='".$tblemp['nom']."',
              emp_login='".$tblemp['login']."',
              emp_mdp='".$tblemp['mdp']."'
              WHERE emp_id=".$tblemp['ide'].";";
    $msg = $this->getRequete($strSQL);
    return $msg;
  }

  function Search($tblemp){
   /* $strSQL = "SELECT * FROM tbl_employe 
              WHERE emp_pnom LIKE '".$tblemp['prenom']."%' 
              OR emp_nom LIKE '".$tblemp['nom']."%' 
              OR emp_tel LIKE '".$tblemp['tel']."%'";
    */
    $strSQL = "SELECT * FROM employe 
        WHERE emp_nom LIKE '".$tblemp['nom']."%'";
    $rch = $this->getRequete($strSQL);
    var_dump($rch);
    exit;
    return $rch;
  }
}
?>