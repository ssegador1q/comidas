<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Cocinero', array('role' => 'form')); ?>
				<fieldset>
					<legend><?php echo __('Add Cocinero'); ?></legend>
	<?php
	    echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'nombre'));
		echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'apellido'));
		echo $this->Form->input('platillo', array('class' => 'form-control', 'label' => 'platillo'));
		
	
	?>
				</fieldset>
				<p>
				<?php echo $this->Form->end(array('label' => 'Crear Cocinero', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('List Cocineros'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
				<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('New platillo'), array('controller' => 'platillos', 'action' => 'add')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>

			
