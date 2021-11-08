<?php

foreach($articles as $article):
?>
<br>
<h1>
    <?=$article->titrea()?>
</h1>
<br>
<h4><?=$article->contenua()?></h4>
<br>
<?php if ($article->imagea() != "null"){?>
<img src="public/images/<?=$article->imagea()?>">
<?php }?>
<?php endforeach ?>