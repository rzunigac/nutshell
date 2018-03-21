<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotes Model
 *
 * @property \App\Model\Table\RecepcionesTable|\Cake\ORM\Association\BelongsTo $Recepciones
 * @property \App\Model\Table\VariedadesTable|\Cake\ORM\Association\BelongsTo $Variedades
 * @property \App\Model\Table\EnvasesTable|\Cake\ORM\Association\BelongsTo $Envases
 * @property \App\Model\Table\FilasTable|\Cake\ORM\Association\BelongsTo $Filas
 * @property \App\Model\Table\DecisionesTable|\Cake\ORM\Association\BelongsTo $Decisiones
 * @property \App\Model\Table\ControlDeCalidadTable|\Cake\ORM\Association\HasMany $ControlDeCalidad
 * @property \App\Model\Table\EnsacadosTable|\Cake\ORM\Association\HasMany $Ensacados
 * @property \App\Model\Table\FilaRecepcionesTable|\Cake\ORM\Association\HasMany $FilaRecepciones
 * @property \App\Model\Table\IngresoAPackingTable|\Cake\ORM\Association\HasMany $IngresoAPacking
 *
 * @method \App\Model\Entity\Lote get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lote newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lote|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lote[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lote findOrCreate($search, callable $callback = null, $options = [])
 */
class LotesTable extends Table
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

        $this->setTable('lotes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Recepciones', [
            'foreignKey' => 'recepcion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Variedades', [
            'foreignKey' => 'variedad_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Envases', [
            'foreignKey' => 'envase_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Filas', [
            'foreignKey' => 'filas_id'
        ]);
        $this->belongsTo('Decisiones', [
            'foreignKey' => 'decision_id'
        ]);
        $this->hasMany('ControlDeCalidad', [
            'foreignKey' => 'lote_id'
        ]);
        $this->hasMany('Ensacados', [
            'foreignKey' => 'lote_id'
        ]);
        $this->hasMany('FilaRecepciones', [
            'foreignKey' => 'lote_id'
        ]);
        $this->hasMany('IngresoAPacking', [
            'foreignKey' => 'lote_id'
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

        $validator
            ->numeric('kg_neto')
            ->allowEmpty('kg_neto');

        $validator
            ->numeric('porcentaje_esperado_de_partido')
            ->allowEmpty('porcentaje_esperado_de_partido');

        $validator
            ->allowEmpty('cerrado');

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
        $rules->add($rules->existsIn(['recepcion_id'], 'Recepciones'));
        $rules->add($rules->existsIn(['variedad_id'], 'Variedades'));
        $rules->add($rules->existsIn(['envase_id'], 'Envases'));
        $rules->add($rules->existsIn(['filas_id'], 'Filas'));
        $rules->add($rules->existsIn(['decision_id'], 'Decisiones'));

        return $rules;
    }
}
