<?php echo $title; ?>

<?php 
				
				foreach ($details as $registered){ ?>
				<tr>
				<td><?php echo $registered['name']; ?> </td>
				<td><?php echo $registered['reg_no']; ?> </td>
				<tr><br/>
				<?php }?>