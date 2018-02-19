<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalidaPacking Model
 *
 * @property \App\Model\Table\PackingsTable|\Cake\ORM\Association\BelongsTo $Packings
 * @property \App\Model\Table\PalletsTable|\Cake\ORM\Association\BelongsTo $Pallets
 * @property \App\Model\Table\EnvasesTable|\Cake\ORM\Association\BelongsTo $Envases
 * @property \App\Model\Table\ColoresTable|\Cake\ORM\Association\BelongsTo $Colores
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 *
 * @method \App\Model\Entity\SalidaPacking get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalidaPacking newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalidaPacking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalidaPacking|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalidaPacking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalidaPacking[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalidaPacking findOrCreate($search, callable $callback = null, $options = [])
 */
class SalidaPackingTable extends Table
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

        $this->setTable('salida_packing');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Packings', [
            'foreignKey' => 'packing_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pallets', [
            'foreignKey' => 'pallet_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Envases', [
            'foreignKey' => 'envase_id',
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
        $rules->add($rules->existsIn(['packing_id'], 'Packings'));
        $rules->add($rules->existsIn(['pallet_id'], 'Pallets'));
        $rules->add($rules->existsIn(['envase_id'], 'Envases'));
        $rules->add($rules->existsIn(['color_id'], 'Colores'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
