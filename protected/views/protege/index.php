<?php
/* @var $this ProtegeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proteges',
);

$this->menu=array(
	array('label'=>'Create Protege', 'url'=>array('create')),
	array('label'=>'Manage Protege', 'url'=>array('admin')),
);
?>

<h1>Proteges</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
