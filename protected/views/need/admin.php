<?php
/* @var $this NeedController */
/* @var $model Need */

$this->breadcrumbs=array(
	'Needs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Need', 'url'=>array('index')),
	array('label'=>'Create Need', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('need-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Needs</h1>

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
	'id'=>'need-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_need',
		'name',
		'id_project',
		'cost',
		'total_number',
		'purchased_quantity',
		/*
		'description',
		'photo',
		'id_category',
		'id_tag',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
