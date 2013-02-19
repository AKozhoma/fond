<?php
/* @var $this ProtegeController */
/* @var $model Protege */

$this->breadcrumbs=array(
	'Proteges'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Protege', 'url'=>array('index')),
	array('label'=>'Create Protege', 'url'=>array('create')),
	array('label'=>'Update Protege', 'url'=>array('update', 'id'=>$model->id_protege)),
	array('label'=>'Delete Protege', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_protege),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Protege', 'url'=>array('admin')),
);
?>

<h1>View Protege #<?php echo $model->id_protege; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_protege',
		'name',
		'date_birth',
		'diagnosis',
		'text',
		'photo',
		'id_tag',
		'id_project',
		'id_category',
	),
)); ?>
