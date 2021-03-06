<?php
/**
 * @author Iuli Dercaci <iuli.dercaci@site-me.info>
 * Date: 09.06.14
 *
 * @var $this UserController
 * @var $form CActiveForm
 * @var $model User
 * @var $roles array
 * @var $workPlace array
 */

$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-edit-form',
    'method' => 'post'
));
echo $form->hiddenField($model, 'id');
?>
<div class="row">
    <div class="form-group col-xs-5 col-xs-offset-3<?php echo $model->hasErrors('email') ? ' has-error' : '' ;?>">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField(
            $model,
            'email',
            array('class' => 'form-control')
        ); ?>
        <?php if ($model->hasErrors('email')): ?>
            <?php echo $form->error($model,'email', array('class' => 'help-block')); ?>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="form-group col-xs-5 col-xs-offset-3<?php echo $model->hasErrors('f_name') ? ' has-error' : '' ;?>">
        <?php echo $form->labelEx($model,'f_name'); ?>
        <?php echo $form->textField(
            $model,
            'f_name',
            array('class' => 'form-control')
        ); ?>
        <?php if ($model->hasErrors('f_name')): ?>
            <?php echo $form->error($model,'f_name', array('class' => 'help-block')); ?>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="form-group col-xs-5 col-xs-offset-3<?php echo $model->hasErrors('l_name') ? ' has-error' : '' ;?>">
        <?php echo $form->labelEx($model,'l_name'); ?>
        <?php echo $form->textField(
            $model,
            'l_name',
            array('class' => 'form-control')
        ); ?>
        <?php if ($model->hasErrors('l_name')): ?>
            <?php echo $form->error($model,'l_name', array('class' => 'help-block')); ?>
        <?php endif; ?>
    </div>
</div>
    <div class="row">
        <div class="form-group col-xs-5 col-xs-offset-3<?php echo $model->hasErrors('storage_id') ? ' has-error' : '' ;?>">
            <?php echo $form->labelEx($model,'storage_id'); ?>
            <?php echo $form->dropDownList(
                $model,
                'storage_id',
                $workPlace,
                array(
                    'class' => 'form-control',
                    'empty' => '',
                )
            ); ?>
            <?php if ($model->hasErrors('role')): ?>
                <?php echo $form->error($model, 'role', array('class' => 'help-block')); ?>
            <?php endif; ?>
        </div>
    </div>
<div class="row">
    <div class="form-group col-xs-5 col-xs-offset-3<?php echo $model->hasErrors('role') ? ' has-error' : '' ;?>">
        <?php echo $form->labelEx($model,'role'); ?>
        <?php echo $form->dropDownList(
            $model,
            'role',
            $roles,
            array(
                'class' => 'form-control',
                'empty' => ''
            )
        ); ?>
        <?php if ($model->hasErrors('role')): ?>
            <?php echo $form->error($model, 'role', array('class' => 'help-block')); ?>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="form-group col-xs-5 col-xs-offset-3">
        <?php echo CHtml::submitButton('Сохранить', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->endWidget(); ?>