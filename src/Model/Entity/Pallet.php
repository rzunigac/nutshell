<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pallet Entity
 *
 * @property int $id
 * @property string $folio
 * @property int $salida_id
 *
 * @property \App\Model\Entity\Salida $salida
 * @property \App\Model\Entity\SalidaPacking[] $salida_packing
 */
class Pallet extends Entity
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
        'folio' => true,
        'salida_id' => true,
        'salida' => true,
        'salida_packing' => true
    ];
}
