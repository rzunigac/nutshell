<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SalidaPacking Entity
 *
 * @property int $id
 * @property int $packing_id
 * @property int $pallet_id
 * @property int $envase_id
 * @property int $cantidad
 * @property int $color_id
 * @property int $categoria_id
 *
 * @property \App\Model\Entity\Packing $packing
 * @property \App\Model\Entity\Pallet $pallet
 * @property \App\Model\Entity\Envase $envase
 * @property \App\Model\Entity\Color $color
 * @property \App\Model\Entity\Categoria $categoria
 */
class SalidaPacking extends Entity
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
        'packing_id' => true,
        'pallet_id' => true,
        'envase_id' => true,
        'cantidad' => true,
        'color_id' => true,
        'categoria_id' => true,
        'packing' => true,
        'pallet' => true,
        'envase' => true,
        'color' => true,
        'categoria' => true
    ];
}
