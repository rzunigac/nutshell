<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Variedades Model
 *
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\HasMany $Lotes
 *
 * @method \App\Model\Entity\Variedad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Variedad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Variedad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Variedad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Variedad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Variedad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Variedad findOrCreate($search, callable $callback = null, $options = [])
 */
class VariedadesTable extends Table
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

        $this->setTable('variedades');
        $this->setDisplayField('idvariedades');
        $this->setPrimaryKey('idvariedades');

        $this->hasMany('Lotes', [
            'foreignKey' => 'variedad_id'
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
            ->integer('idvariedades')
            ->allowEmpty('idvariedades', 'create');

        return $validator;
    }
}
