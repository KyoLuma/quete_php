<?php



$contenu = [

    array('hour' => '11', 'title'=> 'Ballet de dadous', 'artist' => 'Larys MacLogan', 'image' => 'http://goo.gl/Vhe6lD'),
    array('hour' => '12', 'title'=> 'jehr', 'artist' => 'jzerhe', 'image' => 'http://goo.gl/Vhe6lD'),
    array('hour' => '12', 'title'=> 'jehr', 'artist' => 'jzerhe', 'image' => 'http://goo.gl/Vhe6lD')

];



?>

<div class ="container">
    <div class="row">

        <h1 class="centered">Spectacles</h1>
        <table class="striped col offset-l2 l2">
            <thead>
            <tr>
                <th>Heure</th>
                <th>Titre du spectacle</th>
                <th>Artiste</th>
                <th>Url de l'image</th>
            </tr>
            </thead>
            <?php
            foreach($contenu as $donnees){


                echo
                    '<tbody>
          <tr>
            <td>' .$donnees['hour'] . '</td>
            <td>' .$donnees['title'] . '</td>
            <td>' .$donnees['artist'] . '</td>
            <td>' . $donnees['image'] . '</td>
          </tr>
        </tbody>';
            }
            ?>

        </table>
    </div>
</div>