<?php
/* @var $this NeedController */
/* @var $model Need */

$this->breadcrumbs=array(
	'Needs'=>array('index'),
	$model->name=>array('view','id'=>$model->id_need),
	'Update',
);

$this->menu=array(
	array('label'=>'List Need', 'url'=>array('index')),
	array('label'=>'Create Need', 'url'=>array('create')),
	array('label'=>'View Need', 'url'=>array('view', 'id'=>$model->id_need)),
	array('label'=>'Manage Need', 'url'=>array('admin')),
);
?>

<h1>Update Need <?php echo $model->id_need; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>