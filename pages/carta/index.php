<?php include('../../config.php'); ?>

<?php include('../../inc/header.php');?>

<section>
<?php $curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => $indexAPI.'/tb_carta',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache"
	  ),
	));

	$cartas = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	$cartas = json_decode($cartas, true)
 ?>
 
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Nome da Carta</th>
	      <th>Tipo Carta</th>
	      <th scope="col">Level da Carta</th>
	      <th scope="col">Ataque</th>
	      <th scope="col">Defesa</th>

	    </tr>
	  </thead>
	  <tbody>
	  	<?php 

	  	if ($cartas != '') :
	  		foreach ($cartas as $carta) : ?>
	  			<tr>
	  			  <td><?=$carta['nme_carta']?></td>
	  			  <td><?=tipoCarta($carta['idt_tipo_carta'])?></td>
	  			  <td><?=$carta['level_carta']?></td>
	  			  <td><?=$carta['ataque_carta']?></td>
	  			  <td><?=$carta['defesa_carta']?></td>
	  			</tr>
	  		<?php endforeach;
	  	endif; ?>
	    
	  </tbody>
	</table>
</section>
<?php include('../../inc/footer.php');?>