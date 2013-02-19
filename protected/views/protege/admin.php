<?php
/* @var $this ProtegeController */
/* @var $model Protege */

$this->breadcrumbs=array(
	'Proteges'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Protege', 'url'=>array('index')),
	array('label'=>'Create Protege', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('protege-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Proteges</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'protege-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_protege',
		'name',
		'date_birth',
		'diagnosis',
		'text',
		'photo',
		/*
		'id_tag',
		'id_project',
		'id_category',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
