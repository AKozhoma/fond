<?php
/* @var $this ProtegeController */
/* @var $model Protege */

$this->breadcrumbs=array(
	'Proteges'=>array('index'),
	$model->name=>array('view','id'=>$model->id_protege),
	'Update',
);

$this->menu=array(
	array('label'=>'List Protege', 'url'=>array('index')),
	array('label'=>'Create Protege', 'url'=>array('create')),
	array('label'=>'View Protege', 'url'=>array('view', 'id'=>$model->id_protege)),
	array('label'=>'Manage Protege', 'url'=>array('admin')),
);
?>

<h1>Update Protege <?php echo $model->id_protege; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>