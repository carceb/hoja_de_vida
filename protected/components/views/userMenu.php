<ul>
    <li><?php echo CHtml::link('Personal',array('personal/create')); ?></li>
    <li><?php echo CHtml::link('Grupo Familiar',array('grupoFamiliar/create')); ?></li>
    <li><?php
                if(Yii::app()->user->name =="admin")
                echo CHtml::link('Usuarios',array('user/create')); ?></li>
    <li><?php echo CHtml::link('Salir',array('site/logout'));?></li>
</ul>