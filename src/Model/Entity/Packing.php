<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Packing Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $con_cascara
 *
 * @property \App\Model\Entity\IngresoAPacking[] $ingreso_a_packing
 * @property \App\Model\Entity\SalidaPacking[] $salida_packing
 */
class Packing extends Entity
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
        'fecha' => true,
        'con_cascara' => true,
        'ingreso_a_packing' => true,
        'salida_packing' => true
    ];
}
