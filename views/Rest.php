<br><br>
<h2 style="margin-left: 10px;">Restauration du cycle <?=$_GET['idc'] ?></h2>
<br><br>
<?php
$res=$rest;
?>
<table class="restau" style="margin-left: 10px;">

<tr>

<td>Jour</td>
<td>Dimanche</td>
<td>Lundi</td>
<td>Mardi</td>
<td>Mercredi</td>
<td>Jeudi</td>
</tr>

<tr>
<td>Repas</td>
<td><?=$res->dimanche()?></td>
<td><?=$res->lundi()?></td>
<td><?=$res->mardi()?></td>
<td><?=$res->mercredi()?></td>
<td><?=$res->jeudi()?></td>


</tr>




</table>
