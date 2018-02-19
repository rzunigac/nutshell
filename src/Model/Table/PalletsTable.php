<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pallets Model
 *
 * @property \App\Model\Table\SalidasTable|\Cake\ORM\Association\BelongsTo $Salidas
 * @property \App\Model\Table\SalidaPackingTable|\Cake\ORM\Association\HasMany $SalidaPacking
 *
 * @method \App\Model\Entity\Pallet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pallet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pallet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pallet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pallet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pallet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pallet findOrCreate($search, callable $callback = null, $options = [])
 */
class PalletsTable extends Table
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

        $this->setTable('pallets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Salidas', [
            'foreignKey' => 'salida_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('SalidaPacking', [
            'foreignKey' => 'pallet_id'
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
            ->scalar('folio')
            ->maxLength('folio', 45)
            ->allowEmpty('folio');

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
        $rules->add($rules->existsIn(['salida_id'], 'Salidas'));

        return $rules;
    }
}
