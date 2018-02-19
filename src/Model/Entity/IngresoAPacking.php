<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * IngresoAPacking Entity
 *
 * @property int $id
 * @property int $packing_id
 * @property int $lote_id
 * @property int $color_id
 * @property int $categoria_id
 * @property float $kg
 *
 * @property \App\Model\Entity\Packing $packing
 * @property \App\Model\Entity\Lote $lote
 * @property \App\Model\Entity\Color $color
 * @property \App\Model\Entity\Categoria $categoria
 */
class IngresoAPacking extends Entity
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
        'lote_id' => true,
        'color_id' => true,
        'categoria_id' => true,
        'kg' => true,
        'packing' => true,
        'lote' => true,
        'color' => true,
        'categoria' => true
    ];
}
