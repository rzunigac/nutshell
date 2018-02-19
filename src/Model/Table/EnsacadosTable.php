<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ensacados Model
 *
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\BelongsTo $Lotes
 * @property \App\Model\Table\EnvasesTable|\Cake\ORM\Association\BelongsTo $Envases
 *
 * @method \App\Model\Entity\Ensacado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ensacado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ensacado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ensacado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ensacado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ensacado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ensacado findOrCreate($search, callable $callback = null, $options = [])
 */
class EnsacadosTable extends Table
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

        $this->setTable('ensacados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote_id',
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
            ->dateTime('fecha')
            ->allowEmpty('fecha');

        $validator
            ->integer('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->numeric('kg_basura')
            ->allowEmpty('kg_basura');

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
        $rules->add($rules->existsIn(['lote_id'], 'Lotes'));
        $rules->add($rules->existsIn(['envase_id'], 'Envases'));

        return $rules;
    }
}
