<blockquote>Dokument</blockquote>


<div id="documents" class="clearfix">
<?php
$i=1;
if ($handle = opendir('docs/')):
  while (false !== ($file = readdir($handle))):
    if ($file != "." && $file != ".."):
?>
	<div class="document<?php if($i%2) echo " odd " ?>">
		<a href="/docs/<?php echo $file ?>"><?php echo $file ?> <img src="/img/download.png"></a>
	</div>
<?php
$i++;
endif;
endwhile;
closedir($handle);
endif; 
?>
</div>