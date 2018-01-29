<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RecepcionPartido Entity
 *
 * @property int $id
 * @property string $numero_de_guia
 * @property \Cake\I18n\FrozenDate $fecha_recepcion
 * @property int $planta_origen_id
 * @property int $planta_destino_id
 * @property string $conductor
 * @property string $patente
 * @property string $observaciones
 * @property int $recepcion_desde_ruta
 *
 * @property \App\Model\Entity\Planta $planta
 */
class RecepcionPartido extends Entity
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
        'numero_de_guia' => true,
        'fecha_recepcion' => true,
        'planta_origen_id' => true,
        'planta_destino_id' => true,
        'conductor' => true,
        'patente' => true,
        'observaciones' => true,
        'recepcion_desde_ruta' => true,
        'planta' => true
    ];
}
