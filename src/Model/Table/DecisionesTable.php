<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Decisiones Model
 *
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\HasMany $Lotes
 *
 * @method \App\Model\Entity\Decision get($primaryKey, $options = [])
 * @method \App\Model\Entity\Decision newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Decision[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Decision|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Decision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Decision[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Decision findOrCreate($search, callable $callback = null, $options = [])
 */
class DecisionesTable extends Table
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

        $this->setTable('decisiones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Lotes', [
            'foreignKey' => 'decision_id'
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
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->allowEmpty('nombre');

        return $validator;
    }
}
