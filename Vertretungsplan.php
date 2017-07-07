<?php
$db_link = mysqli_connect (
                     localhos, 
                     Lehrer1, 
                     password, 
                     Vertretungspläne
                    );
 
$sql = "SELECT * FROM Vertretungsplan_heute";
 
$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
 
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['Klasse'] . "</td>";
  echo "<td>". $zeile['Stunde'] . "</td>";
  echo "<td>". $zeile['Vertreter'] . "</td>";
  echo "<td>". $zeile['Art'] . "</td>";
  echo "<td>". $zeile['Lehrer'] . "</td>";
  echo "<td>". $zeile['Vertretungs_Text'] . "</td>";
  echo "<td>". $zeile['Raum'] . "</td>";
  echo "</tr>";
}
echo "</table>";
 
mysqli_free_result( $db_erg );
?>