<div class="divemp">
<br><br>
<h2>Les planing du cycle <?=$_GET['idc'] ?></h2>
<?php
foreach ($emp as $em):
    
?>

<?php
$s1=$em->seance1();
$s2=$em->seance2();
$s3=$em->seance3();
$s4=$em->seance4();
$s5=$em->seance5();
$s6=$em->seance6();
$s7=$em->seance7();
$s8=$em->seance8();
$c=$em->classe();
?>
<h3>Classe <?=$c ?> </h3>
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

<?php endforeach ?>

</div>