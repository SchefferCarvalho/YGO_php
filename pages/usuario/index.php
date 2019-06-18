<?php include('../../config.php'); ?>
<?php include('../../inc/header.php'); ?>

<section class="container mt-3">

	<?php $curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => $indexAPI . '/tb_usuario',
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
	<th>
		<b>
			<font size="5">
				Usuários
			</font>
		</b>
	</th>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Email</th>
				<th scope="col">Nome da Usuário</th>
				<th scope="col">Nick da Usuário</th>
			</tr>
		</thead>
		<tbody>
			<?php

			if ($usuarios != '') :
				foreach ($usuarios as $usuario) : ?>
					<tr>
						<td><?= $usuario['email_usua'] ?></td>
						<td><?= $usuario['nme_usua'] ?></td>
						<td><?= $usuario['nicknme_usua'] ?></td>
						<td><button type="button" class="btn btn-danger my-0 my-sm-0 btn-sm" style="margin-right: -60px;">Deletar</button><td>

					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>