<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recepciones Model
 *
 * @property \App\Model\Table\ProductoresTable|\Cake\ORM\Association\BelongsTo $Productores
 * @property \App\Model\Table\PlantasTable|\Cake\ORM\Association\BelongsTo $Plantas
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\HasMany $Lotes
 *
 * @method \App\Model\Entity\Recepcion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recepcion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recepcion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recepcion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recepcion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recepcion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recepcion findOrCreate($search, callable $callback = null, $options = [])
 */
class RecepcionesTable extends Table
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

        $this->setTable('recepciones');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->belongsTo('Productores', [
            'foreignKey' => 'productor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Plantas', [
            'foreignKey' => 'planta_destino_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Lotes', [
            'foreignKey' => 'recepcion_id'
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
            ->scalar('guia_productor')
            ->maxLength('guia_productor', 45)
            ->allowEmpty('guia_productor');

        $validator
            ->scalar('sitio_origen')
            ->maxLength('sitio_origen', 45)
            ->allowEmpty('sitio_origen');

        $validator
            ->dateTime('fecha')
            ->allowEmpty('fecha');

        $validator
            ->scalar('conductor')
            ->maxLength('conductor', 45)
            ->allowEmpty('conductor');

        $validator
            ->scalar('patente')
            ->maxLength('patente', 45)
            ->allowEmpty('patente');

        $validator
            ->scalar('observaciones')
            ->maxLength('observaciones', 45)
            ->allowEmpty('observaciones');

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
        $rules->add($rules->existsIn(['productor_id'], 'Productores'));
        $rules->add($rules->existsIn(['planta_destino_id'], 'Plantas'));

        return $rules;
    }
}
