<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ControlDeCalidad Model
 *
 * @property \App\Model\Table\LotesTable|\Cake\ORM\Association\BelongsTo $Lotes
 *
 * @method \App\Model\Entity\ControlDeCalidad get($primaryKey, $options = [])
 * @method \App\Model\Entity\ControlDeCalidad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ControlDeCalidad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ControlDeCalidad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ControlDeCalidad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ControlDeCalidad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ControlDeCalidad findOrCreate($search, callable $callback = null, $options = [])
 */
class ControlDeCalidadTable extends Table
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

        $this->setTable('control_de_calidad');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Lotes', [
            'foreignKey' => 'lote_id',
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
            ->numeric('peso_muestra')
            ->allowEmpty('peso_muestra');

        $validator
            ->numeric('llenado')
            ->allowEmpty('llenado');

        $validator
            ->numeric('color_el')
            ->allowEmpty('color_el');

        $validator
            ->numeric('color_l')
            ->allowEmpty('color_l');

        $validator
            ->numeric('color_la')
            ->allowEmpty('color_la');

        $validator
            ->numeric('color_a')
            ->allowEmpty('color_a');

        $validator
            ->numeric('color_y')
            ->allowEmpty('color_y');

        $validator
            ->numeric('dc_pelon_adherido')
            ->allowEmpty('dc_pelon_adherido');

        $validator
            ->numeric('dc_manchas_graves')
            ->allowEmpty('dc_manchas_graves');

        $validator
            ->numeric('dc_cascara_imperfecta')
            ->allowEmpty('dc_cascara_imperfecta');

        $validator
            ->numeric('dc_manchas_leves')
            ->allowEmpty('dc_manchas_leves');

        $validator
            ->numeric('dc_casco_abierto')
            ->allowEmpty('dc_casco_abierto');

        $validator
            ->numeric('di_hongo_activo_rancidez')
            ->allowEmpty('di_hongo_activo_rancidez');

        $validator
            ->numeric('di_dano_de_insectos')
            ->allowEmpty('di_dano_de_insectos');

        $validator
            ->numeric('di_reseca_grave_vana')
            ->allowEmpty('di_reseca_grave_vana');

        $validator
            ->numeric('di_hongo_inactivo')
            ->allowEmpty('di_hongo_inactivo');

        $validator
            ->numeric('di_reseca_leve')
            ->allowEmpty('di_reseca_leve');

        $validator
            ->numeric('calibre_mayor36')
            ->allowEmpty('calibre_mayor36');

        $validator
            ->numeric('calibre_34-36')
            ->allowEmpty('calibre_34-36');

        $validator
            ->numeric('calibre_32-34')
            ->allowEmpty('calibre_32-34');

        $validator
            ->numeric('calibre_30-32')
            ->allowEmpty('calibre_30-32');

        $validator
            ->numeric('calibre_28-30')
            ->allowEmpty('calibre_28-30');

        $validator
            ->numeric('calibre_menor28')
            ->allowEmpty('calibre_menor28');

        $validator
            ->numeric('humedad')
            ->allowEmpty('humedad');

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

        return $rules;
    }
}
