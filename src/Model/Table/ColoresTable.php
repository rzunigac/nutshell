<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colores Model
 *
 * @property |\Cake\ORM\Association\HasMany $FilaRecepciones
 * @property |\Cake\ORM\Association\HasMany $IngresoAPacking
 * @property |\Cake\ORM\Association\HasMany $SalidaPacking
 *
 * @method \App\Model\Entity\Color get($primaryKey, $options = [])
 * @method \App\Model\Entity\Color newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Color[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Color|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Color patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Color[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Color findOrCreate($search, callable $callback = null, $options = [])
 */
class ColoresTable extends Table
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

        $this->setTable('colores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('FilaRecepciones', [
            'foreignKey' => 'color_id'
        ]);
        $this->hasMany('IngresoAPacking', [
            'foreignKey' => 'color_id'
        ]);
        $this->hasMany('SalidaPacking', [
            'foreignKey' => 'color_id'
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
