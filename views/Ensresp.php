<br><br>
<h3>Planing de réception des ensaignants du cycle <?=$_GET['idc']?></h3>
<table class="ensresp" >
<?php
foreach ($ensresp as $ensr):
?>
<tr>
<td>  <?=$ensr->nome()  ?></td> 
<td><?=$ensr->prenome() ?></td>

    <?php
    $horaire=$ensr->horaire();
    foreach($horaire as $hor):
    ?>
    <?php
    foreach($hor as $key=>$h):
    ?>
    <?php
    $z="";
    if ($key=="jour"){$z=" Le ";}
    if ($key=="heur1"){$z=" De ";}
    if ($key=="heur2"){$z=" A ";}
    ?>
    <td><?=$z?>&nbsp<?=$h?></td>
    <?php endforeach?>
    <?php endforeach?>

</tr>
<?php endforeach?>

</table>