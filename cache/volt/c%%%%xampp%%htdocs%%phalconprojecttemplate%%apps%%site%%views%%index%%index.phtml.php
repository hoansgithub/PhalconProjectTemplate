<?php echo $this->getContent(); ?>
<h1>Welcome to site!</h1>
<table>
	<thead>
		<tr><td>name</td><td>price</td></tr>
	</thead>
	<tbody>
		<?php for($p=0;$p<count($prods);$p++){ $cur=$prods[$p]; ?>
		<tr>
			<td><?php echo $cur->name; ?></td>
			<td><?php echo $cur->price; ?></td>
		</tr>
		<?php } ?>
	
	</tbody>
</table>