<br><br>
<center><h1 style="margin-left: 10px;">Contactez nous! </h1></center>
<br><br>
<?php
foreach($contact as $con):
?>
<center><h1 style="margin-left: 10px;">FAX : <?=$con->fax() ?></h1></center>
<center><h1 style="margin-left: 10px;">TELEPHONE : <?=$con->telephone() ?></h1></center>
<center><h1 style="margin-left: 10px;">EMAIL : <?=$con->email() ?></h1></center>
<?php endforeach ?>