<br>
<br>

<h1>
<?=$article[0]->titrea()?>
</h1>
<br>
<h4>

    <?=$article[0]->contenua()?>
</h4>
<br>
<?php if ($article[0]->imagea() != "null"){?>
    <img src="public/images/<?=$article[0]->imagea()?>">
<?php }?>

