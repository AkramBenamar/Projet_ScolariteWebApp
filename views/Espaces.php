<br>
<br>
<?php 
$emp=$esps->emp();

$notes=$esps->notes();
?>
<table class="studnt">
    <tr>
    <td><h1>ID :<?=$esps->ids()?></h1></td>
    <td><h1><?=$esps->noms()?></h1></td>
    <td><h1><?=$esps->prenoms()?></h1></td>
    <td><h1><?=$emp->classe()?></h1></td>
    <td><h1><?=$emp->niveau()?></h1></td>
    <td><h1>Activités: <?=$esps->activit()?></h1></td>
    </tr>



</table>

<div class="divemp">
<br><br>



<?php
$s1=$emp->seance1();
$s2=$emp->seance2();
$s3=$emp->seance3();
$s4=$emp->seance4();
$s5=$emp->seance5();
$s6=$emp->seance6();
$s7=$emp->seance7();
$s8=$emp->seance8();
$c=$emp->classe();
?>
<h2>Le planing de la classe <?=$c ?> </h2>
<table class="emp" >
<tr>
    <td>---</td>
    <td>Dimanche</td>
    <td>Lundi</td>
    <td>Mardi</td>
    <td>Mercredi</td>
    <td>Jeudi</td>
</tr>
<tr>
<td>Seance1</td>
<td><?=$s1[0]?></td>
<td><?=$s1[1]?></td>
<td><?=$s1[2]?></td>
<td><?=$s1[3]?></td>
<td><?=$s1[4]?></td>

</tr>
<tr>
<td>Seance2</td>
<td><?=$s2[0]?></td>
<td><?=$s2[1]?></td>
<td><?=$s2[2]?></td>
<td><?=$s2[3]?></td>
<td><?=$s2[4]?></td>

</tr>

<tr>
<td>Seance3</td>
<td><?=$s3[0]?></td>
<td><?=$s3[1]?></td>
<td><?=$s3[2]?></td>
<td><?=$s3[3]?></td>
<td><?=$s3[4]?></td>

</tr>

<tr>
<td>Seance4</td>
<td><?=$s4[0]?></td>
<td><?=$s4[1]?></td>
<td><?=$s4[2]?></td>
<td><?=$s4[3]?></td>
<td><?=$s4[4]?></td>

</tr>

<tr>
<td>Seance5</td>
<td><?=$s5[0]?></td>
<td><?=$s5[1]?></td>
<td><?=$s5[2]?></td>
<td><?=$s5[3]?></td>
<td><?=$s5[4]?></td>

</tr>

<tr>
<td>Seance6</td>
<td><?=$s6[0]?></td>
<td><?=$s6[1]?></td>
<td><?=$s6[2]?></td>
<td><?=$s6[3]?></td>
<td><?=$s6[4]?></td>

</tr>
<tr>
<td>Seance7</td>
<td><?=$s7[0]?></td>
<td><?=$s7[1]?></td>
<td><?=$s7[2]?></td>
<td><?=$s7[3]?></td>
<td><?=$s7[4]?></td>

</tr>
<tr>
<td>Seance8</td>
<td><?=$s8[0]?></td>
<td><?=$s8[1]?></td>
<td><?=$s8[2]?></td>
<td><?=$s8[3]?></td>
<td><?=$s8[4]?></td>

</tr>
</table>
<br><br>



</div>


<div class="divemp">
    <h2>Vos notes</h2>

<table class="emp" >
    <tr>
        <td>Matiere</td>
        <td>CC</td>
        <td>Devoir</td>
        <td>Composition</td>
    </tr>
    <?php 
    foreach($notes as $note):
    ?>
    <tr>
    <?php 
    foreach($note as $key=>$not):
        ?>
        
       
            <td><?=$not?></td>
           
       


        <?php endforeach?>
    </tr>
<?php endforeach?>
</table>


</div>