<?php
/* @var $this TagController */
/* @var $data Tag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tag')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tag), array('view', 'id'=>$data->id_tag)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>