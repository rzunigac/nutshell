<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productores Model
 *
 * @property \App\Model\Table\RecepcionesTable|\Cake\ORM\Association\HasMany $Recepciones
 *
 * @method \App\Model\Entity\Productor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Productor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Productor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Productor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Productor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Productor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductoresTable extends Table
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

        $this->setTable('productores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Recepciones', [
            'foreignKey' => 'productor_id'
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
