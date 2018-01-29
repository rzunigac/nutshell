<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FilaRecepcion Entity
 *
 * @property int $id
 * @property int $recepcion_partidos_id
 * @property int $categorias_id
 * @property int $colores_id
 * @property string $bin_destino
 * @property float $kg
 *
 * @property \App\Model\Entity\RecepcionPartido $recepcion_partido
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Color $color
 */
class FilaRecepcion extends Entity
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
        'recepcion_partidos_id' => true,
        'categorias_id' => true,
        'colores_id' => true,
        'bin_destino' => true,
        'kg' => true,
        'recepcion_partido' => true,
        'categoria' => true,
        'color' => true
    ];
}
