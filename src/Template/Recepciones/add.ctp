<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recepcion $recepcion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recepciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productores'), ['controller' => 'Productores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Productor'), ['controller' => 'Productores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['controller' => 'Lotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lote'), ['controller' => 'Lotes', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="row">
    <div class="recepciones form col-12 columns content">
        <div class="title">
            <legend><?= __('Add Recepcion') ?></legend>
        </div>

        <div class="body">
        <?= $this->Form->create($recepcion) ?>
        
            <div class="form-row">
                <?php 
                echo $this->Form->input('guia_productor');
                //echo $this->Form->control('fecha', ['empty' => true]);
                echo $this->Form->control('fecha', [
				'type' => 'calendario', 
				'format' => 'd-m-Y', 
				'default' => date('d-m-Y')
				]);
                ?>
				<!-- div class="form-group col-md-6 date">
					<label for="fecha">Fecha</label>
					<input class="form-control calendario" type="text" name="fecha">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-th"></span>
					</div>
				</div --> 			
            </div>
                    
            <div class="form-row">
                <?php
                echo $this->Form->control('productor_id', ['options' => $productores]);
                echo $this->Form->control('conductor');
                ?>
            </div>
            
            <div class="form-row">
                <?php 
                echo $this->Form->control('sitio_origen');
                echo $this->Form->control('patente');
                ?>
            </div>
      
            <div class="form-row">
                <?php 
                echo $this->Form->control('planta_destino_id', ['options' => $plantas]);
                echo $this->Form->control('observaciones');
                ?>
            </div>

        <!-- fieldset>            
            <?php
                echo $this->Form->control('guia_productor');
                echo $this->Form->control('fecha', ['empty' => true]);
                
                echo $this->Form->control('productor_id', ['options' => $productores]);
                echo $this->Form->control('conductor');
                
                echo $this->Form->control('sitio_origen');
                echo $this->Form->control('patente');
                
                echo $this->Form->control('planta_destino_id', ['options' => $plantas]);
                echo $this->Form->control('observaciones');
            ?>
        </fieldset -->        
        <?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']); ?>
        <?= $this->Form->end() ?>
        
        </div>
    </div>
</div>

