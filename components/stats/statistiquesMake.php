<!-- I load the statistiques.php file -->
<?php include ("statistiques.php"); ?>

<?php
// I browse the get_satistiques () function present in the statistics.php file and for each data present I ask it to display the data in the form of a table
foreach(get_statistiques () as $data){
  echo "<tr>
          <td class='indicateurs'>". $data["Indicateur"] . "</td>
          <td class='value'>". $data["Valeur"] . "</td>
          <td class='variation'>". $data["Variation"] . "</td>
        </tr>";
}
?>
