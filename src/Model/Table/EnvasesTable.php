<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Envases Model
 *
 * @property \App\Model\Table\EnsacadosTable|\Cake\ORM\Association\HasMany $Ensacados
 * @property \App\Model\Table\FilasTable|\Cake\ORM\Association\HasMany $Filas
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\HasMany $Lotes
 *
 * @method \App\Model\Entity\Envase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Envase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Envase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Envase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Envase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Envase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Envase findOrCreate($search, callable $callback = null, $options = [])
 */
class EnvasesTable extends Table
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

        $this->setTable('envases');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Ensacados', [
            'foreignKey' => 'envase_id'
        ]);
        $this->hasMany('Filas', [
            'foreignKey' => 'envase_id'
        ]);
        $this->hasMany('Lotes', [
            'foreignKey' => 'envase_id'
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

        return $validator;
    }
}
