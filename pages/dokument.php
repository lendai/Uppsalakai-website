<blockquote>Dokument</blockquote>


<div id="documents" class="clearfix">
    <div class="document odd">
        <a href="https://docs.google.com/document/d/1Zp3MigKCN5socvBCizaDZAphbBFAYYBsHERNGZh92W8/edit" target="_blank">Årsmötesprotokoll 2012 inklusive bilagor</a>
    <div>
<?php
$i=2;
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