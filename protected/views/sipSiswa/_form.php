<?php
/* @var $this SipSiswaController */
/* @var $model SipSiswa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sip-siswa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idSiswa'); ?>
		<?php echo $form->textField($model,'idSiswa'); ?>
		<?php echo $form->error($model,'idSiswa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NamaSis'); ?>
		<?php echo $form->textField($model,'NamaSis',array('size'=>29,'maxlength'=>29)); ?>
		<?php echo $form->error($model,'NamaSis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NamaAyah'); ?>
		<?php echo $form->textField($model,'NamaAyah',array('size'=>29,'maxlength'=>29)); ?>
		<?php echo $form->error($model,'NamaAyah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NamaIbu'); ?>
		<?php echo $form->textField($model,'NamaIbu',array('size'=>29,'maxlength'=>29)); ?>
		<?php echo $form->error($model,'NamaIbu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->