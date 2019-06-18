<?php include('../../config.php'); ?>
<?php include('../../inc/header.php'); ?>

<section class="container mt-3">
	<?php $curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => $indexAPI . '/tb_deck',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache"
		),
	));

	$usuarios = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	$usuarios = json_decode($usuarios, true)
	?>

	<table class="table">
		<thead>
			<th>
				<font size="5">
					Decks para Iniciantes
				</font>
			</th>
			<tr>
				<th scope="col">Nome do Deck</th>
			</tr>
		</thead>
		<tbody>
			<?php

			if ($usuarios != '') :
				foreach ($usuarios as $usuario) : ?>
					<tr>
						<td><?= $usuario['nme_deck'] ?></td>
					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>