<?php
/* @var $this ProtegeController */
/* @var $data Protege */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_protege')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_protege), array('view', 'id'=>$data->id_protege)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tag')); ?>:</b>
	<?php echo CHtml::encode($data->id_tag); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_project')); ?>:</b>
	<?php echo CHtml::encode($data->id_project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_category')); ?>:</b>
	<?php echo CHtml::encode($data->id_category); ?>
	<br />

	*/ ?>

</div>