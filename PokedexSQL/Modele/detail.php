<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-03-19
 * Time: 00:55
 */


require ('connect.php');
include("header.html");

$db = connectBDD();

$pokemon_id = $_GET['id'];

/*$query = 'SELECT * FROM pokemon_e_type where id_poke = $pokemon_id';
$arr = $db->query($query)->fetch();
*/
?>





</html>
<table class='table table-secondary'>
    <thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>evolution</th>
        <th>Starter</th>
        <th>Experience</th>
    </tr>
    </thead>

    <?php
    $query = "SELECT * FROM pokemon_type where id = $pokemon_id";
    $arr = $db->query($query)->fetch();

        echo "<tr >
                  <td>$arr[0]</td>
                   <td>$arr[1]</td>
                    <td>$arr[2]</td>
                     <td>$arr[3]</td>
                      <td>$arr[4]</td>
                  
              </tr>";

    ?>
</table>
