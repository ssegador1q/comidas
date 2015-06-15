<?php //  condicionando la paginacion
//$this->Paginator->option(array('update'=>'#contenedor-meseros')); //  parametro  para  actualizar
  $this->Paginator->options(array(
  	'update'=>'#contenedor-categoria_platillos',
  	'before'=>$this->Js->get('#procesando')->effect('fadeIn',array('buffer'=>false)),
  	'complete'=>$this->Js->get('#procesando')->effect('fadeOut',array('buffer'=>false))
  ));

?>
<div id="contenedor-categoria_platillos">

<div class="page-header">

	<h2><?php echo __('Categoria de  Platillos'); ?></h2>

</div>

<div class="col-md-12">
<!--creamos  barra de progreso -->
<div class="progress oculto" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>
	
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categoriaPlatillos as $categoriaPlatillo): ?>
	<tr>
		<td><?php echo h($categoriaPlatillo['CategoriaPlatillo']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoriaPlatillo['CategoriaPlatillo']['categoria']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriaPlatillo['CategoriaPlatillo']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriaPlatillo['CategoriaPlatillo']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriaPlatillo['CategoriaPlatillo']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $categoriaPlatillo['CategoriaPlatillo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	
	<nav>
	<ul class="pagination">
		<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
		<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
		<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
	</ul>

</div> <!--contenedor meseros -->
</nav>
<?php echo $this->Js->writeBuffer(); ?>