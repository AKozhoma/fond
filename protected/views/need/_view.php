<?php
/* @var $this NeedController */
/* @var $data Need */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_need')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_need), array('view', 'id'=>$data->id_need)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_project')); ?>:</b>
	<?php echo CHtml::encode($data->id_project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_number')); ?>:</b>
	<?php echo CHtml::encode($data->total_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchased_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->purchased_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_category')); ?>:</b>
	<?php echo CHtml::encode($data->id_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tag')); ?>:</b>
	<?php echo CHtml::encode($data->id_tag); ?>
	<br />

	*/ ?>

</div>