<?php
/* @var $this ProtegeController */
/* @var $model Protege */

$this->breadcrumbs=array(
	'Proteges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Protege', 'url'=>array('index')),
	array('label'=>'Manage Protege', 'url'=>array('admin')),
);
?>

<h1>Create Protege</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>