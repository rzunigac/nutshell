<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recepcion Entity
 *
 * @property int $id
 * @property string $guia_productor
 * @property int $productor_id
 * @property string $sitio_origen
 * @property int $planta_destino_id
 * @property \Cake\I18n\FrozenTime $fecha
 * @property string $conductor
 * @property string $patente
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Productor $productor
 * @property \App\Model\Entity\Planta $planta
 * @property \App\Model\Entity\Lote[] $lotes
 */
class Recepcion extends Entity
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
        'guia_productor' => true,
        'productor_id' => true,
        'sitio_origen' => true,
        'planta_destino_id' => true,
        'fecha' => true,
        'conductor' => true,
        'patente' => true,
        'observaciones' => true,
        'productor' => true,
        'planta' => true,
        'lotes' => true
    ];
}
