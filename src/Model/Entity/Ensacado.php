<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ensacado Entity
 *
 * @property int $id
 * @property int $lote_id
 * @property \Cake\I18n\FrozenTime $fecha
 * @property int $envase_id
 * @property int $cantidad
 * @property float $kg_basura
 *
 * @property \App\Model\Entity\Lote $lote
 * @property \App\Model\Entity\Envase $envase
 */
class Ensacado extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'lote_id' => true,
        'fecha' => true,
        'envase_id' => true,
        'cantidad' => true,
        'kg_basura' => true,
        'lote' => true,
        'envase' => true
    ];
}
