<!doctype html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Annuaire</title> 
    <meta name="description" content="Annuaire des employés">
    <link rel="stylesheet" href="annuaire.css">
</head>
<body></body>
  <header>
    <h1>ailTECH</h1>
      <!-- ------------------------------------------- Menu ---------------------------------------- -->
    <nav>  
        <ul>
            <li><a href="index.php"> Accueil</a></li>
            <li><a href="index.php"> Administrateur</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul> 
    </nav>
  </header>
  <section id="pageContent">
  <article>
    <br><br><h1> Annuaire des employés </h1>
</article>
    <article>
      <!-- ------------------------------------------- Formulaire Recherche  ---------------------------------------- -->
      <form action='index.php?action=ud' method='post'>
        <table class="table_annuaire">
          <tr> 
            <td> <input type='text' name='id' id='id' readonly > </td>
            <td> <input type='text' name='prenom' id='prenom' ></td>
            <td> <input type='text' name='nom' id='nom' ></td> 
            <td> <input type='text' name='tel' id='tel' ></td> 
            <td colspan='2'> <input type='submit' name='action' value='Rechercher'></td>
          </tr>
        </table>
      </form>
    </article>
    <article>
      <table class="table_annuaire">
      <!-- ------------------------------------------- Formulaire action  ---------------------------------------- -->
      <table class="table_annuaire">
        <?php

        require "model.php";
        require "control.php";

        $employes = new Employes();
        echo "<thead>";
          echo "<tr>";
            echo "<th>#</th>";
            echo "<th>Prénom</th>";
            echo "<th>Nom</th>";
            echo "<th>Téléphone</th>";
            echo "<th colspan='2'>Actions</th>";
          echo "</tr>";
        echo "</thead>";
        
        echo "<tbody>";
          foreach ($employes->getSelect() as $employe) {
            echo "<form action='index.php?action=ud' method='post'>";
            echo 
            "<tr>" 
                ."<td>"."<input readonly type='text' name='ide' id='ide' value='".$employe['emp_id'] . "'></td>" 
                ."<td>"."<input type='text' name='prenom' id='prenom' value='".$employe['emp_pnom'] . "'></td>" 
                ."<td>"."<input type='text' name='nom' id='nom' value='".$employe['emp_nom'] . "'></td>" 
                ."<td>". "<input type='submit' name='action' value='Supprimer'></td>"
                ."<td>". "<input type='submit' name='action' value='Modifier'></td>".
            "</tr>";
            echo "</form>";
          }
        echo "</tbody>";
        
        ?>
      </table>
      </article>

      <!-- ------------------------------------------- Formulaire ajout ---------------------------------------- -->
      <article>
        <h1>Ajouter un employé</h1>
        <form action="index.php?action=add" method="post">
          <input type="text" name="prenom" id="prenom" placeholder="Prénom"> <br><br>
          <input type="text" name="nom" id="nom" placeholder="Nom"><br><br>
          <input type="submit" name="submit" value="Ajouter">
          <br><br>
        </form>
      </article>
  </section>
  <footer>
        <p>&copy; BTS SIO | Lycée Pierre Poivre | Version 4 </a>
    </footer>
</body>
</html>
</body>
</html>