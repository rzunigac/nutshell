<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecepcionPartidos Model
 *
 * @property \App\Model\Table\PlantasTable|\Cake\ORM\Association\BelongsTo $Plantas
 * @property \App\Model\Table\PlantasTable|\Cake\ORM\Association\BelongsTo $Plantas
 *
 * @method \App\Model\Entity\RecepcionPartido get($primaryKey, $options = [])
 * @method \App\Model\Entity\RecepcionPartido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RecepcionPartido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecepcionPartido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RecepcionPartido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RecepcionPartido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecepcionPartido findOrCreate($search, callable $callback = null, $options = [])
 */
class RecepcionPartidosTable extends Table
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

        $this->setTable('recepcion_partidos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Plantas', [
            'foreignKey' => 'planta_origen_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Plantas', [
            'foreignKey' => 'planta_destino_id',
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
            ->scalar('numero_de_guia')
            ->maxLength('numero_de_guia', 45)
            ->allowEmpty('numero_de_guia');

        $validator
            ->date('fecha_recepcion')
            ->allowEmpty('fecha_recepcion');

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

        $validator
            ->allowEmpty('recepcion_desde_ruta');

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
        $rules->add($rules->existsIn(['planta_origen_id'], 'Plantas'));
        $rules->add($rules->existsIn(['planta_destino_id'], 'Plantas'));

        return $rules;
    }
}
