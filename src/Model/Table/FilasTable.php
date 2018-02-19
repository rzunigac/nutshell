<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Filas Model
 *
 * @property \App\Model\Table\DespachoAPartidosTable|\Cake\ORM\Association\BelongsTo $DespachoAPartidos
 * @property \App\Model\Table\EnvasesTable|\Cake\ORM\Association\BelongsTo $Envases
 *
 * @method \App\Model\Entity\Fila get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fila newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fila[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fila|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fila patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fila[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fila findOrCreate($search, callable $callback = null, $options = [])
 */
class FilasTable extends Table
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

        $this->setTable('filas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('DespachoAPartidos', [
            'foreignKey' => 'despacho_a_partido_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Envases', [
            'foreignKey' => 'envase_id',
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
            ->integer('cantidad')
            ->allowEmpty('cantidad');

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
        $rules->add($rules->existsIn(['despacho_a_partido_id'], 'DespachoAPartidos'));
        $rules->add($rules->existsIn(['envase_id'], 'Envases'));

        return $rules;
    }
}
