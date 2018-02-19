<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FilaRecepciones Model
 *
 * @property \App\Model\Table\RecepcionPartidosTable|\Cake\ORM\Association\BelongsTo $RecepcionPartidos
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\ColoresTable|\Cake\ORM\Association\BelongsTo $Colores
 * @property |\Cake\ORM\Association\BelongsTo $Lotes
 *
 * @method \App\Model\Entity\FilaRecepcion get($primaryKey, $options = [])
 * @method \App\Model\Entity\FilaRecepcion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FilaRecepcion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FilaRecepcion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FilaRecepcion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FilaRecepcion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FilaRecepcion findOrCreate($search, callable $callback = null, $options = [])
 */
class FilaRecepcionesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('fila_recepciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('RecepcionPartidos', [
            'foreignKey' => 'recepcion_partido_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Colores', [
            'foreignKey' => 'color_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('bin_destino')
            ->maxLength('bin_destino', 45)
            ->allowEmpty('bin_destino');

        $validator
            ->numeric('kg')
            ->allowEmpty('kg');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['recepcion_partido_id'], 'RecepcionPartidos'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));
        $rules->add($rules->existsIn(['color_id'], 'Colores'));
        $rules->add($rules->existsIn(['lote_id'], 'Lotes'));

        return $rules;
    }
}
