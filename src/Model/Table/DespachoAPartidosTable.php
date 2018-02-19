<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DespachoAPartidos Model
 *
 * @property \App\Model\Table\PlantasTable|\Cake\ORM\Association\BelongsTo $Plantas
 * @property \App\Model\Table\FilasTable|\Cake\ORM\Association\HasMany $Filas
 *
 * @method \App\Model\Entity\DespachoAPartido get($primaryKey, $options = [])
 * @method \App\Model\Entity\DespachoAPartido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DespachoAPartido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DespachoAPartido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DespachoAPartido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DespachoAPartido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DespachoAPartido findOrCreate($search, callable $callback = null, $options = [])
 */
class DespachoAPartidosTable extends Table
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

        $this->setTable('despacho_a_partidos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Plantas', [
            'foreignKey' => 'planta_origen_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Filas', [
            'foreignKey' => 'despacho_a_partido_id'
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
            ->integer('guia')
            ->allowEmpty('guia');

        $validator
            ->allowEmpty('despacho_a_ruta');

        $validator
            ->date('fecha')
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

        $validator
            ->scalar('manual')
            ->maxLength('manual', 45)
            ->allowEmpty('manual');

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

        return $rules;
    }
}
