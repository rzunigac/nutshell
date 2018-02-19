<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IngresoAPacking Model
 *
 * @property \App\Model\Table\PackingsTable|\Cake\ORM\Association\BelongsTo $Packings
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\BelongsTo $Lotes
 * @property \App\Model\Table\ColoresTable|\Cake\ORM\Association\BelongsTo $Colores
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 *
 * @method \App\Model\Entity\IngresoAPacking get($primaryKey, $options = [])
 * @method \App\Model\Entity\IngresoAPacking newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IngresoAPacking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IngresoAPacking|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IngresoAPacking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IngresoAPacking[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IngresoAPacking findOrCreate($search, callable $callback = null, $options = [])
 */
class IngresoAPackingTable extends Table
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

        $this->setTable('ingreso_a_packing');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Packings', [
            'foreignKey' => 'packing_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Colores', [
            'foreignKey' => 'color_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
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
            ->numeric('kg')
            ->allowEmpty('kg');

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
        $rules->add($rules->existsIn(['packing_id'], 'Packings'));
        $rules->add($rules->existsIn(['lote_id'], 'Lotes'));
        $rules->add($rules->existsIn(['color_id'], 'Colores'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
