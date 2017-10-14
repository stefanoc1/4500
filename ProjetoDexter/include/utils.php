<?php 


function verificaPagina($pagina)
{
	if((basename($_SERVER['PHP_SELF']) == $pagina))
	{
		return true;
	} else {
		return false;
	}
}
/*

	           <?php 
              foreach ($paginas as $pagina):?>
                <li class=<?= (basename($_SERVER['PHP_SELF']) == 
                $pagina['url']) ? 'active' : '';?>><a href="<?php echo $pagina['url']; ?>"><?= $pagina['label']; ?></a>
              <?php endforeach; ?>
*/



 ?>