<?php
/* @var $this NeedController */
/* @var $model Need */

$this->breadcrumbs=array(
	'Needs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Need', 'url'=>array('index')),
	array('label'=>'Create Need', 'url'=>array('create')),
	array('label'=>'Update Need', 'url'=>array('update', 'id'=>$model->id_need)),
	array('label'=>'Delete Need', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_need),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Need', 'url'=>array('admin')),
);
?>

<h1>View Need #<?php echo $model->id_need; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_need',
		'name',
		'id_project',
		'cost',
		'total_number',
		'purchased_quantity',
		'description',
		'photo',
		'id_category',
		'id_tag',
	),
)); ?>
