<?php include ("statistiques.php"); ?>

<?php
foreach(get_statistiques () as $data){
  echo "<tr>
          <td class='indicateurs'>". $data["Indicateur"] . "</td>
          <td class='value'>". $data["Valeur"] . "</td>
          <td class='variation'>". $data["Variation"] . "</td>
        </tr>";
}
?>
