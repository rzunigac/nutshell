<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DespachoAPartido Entity
 *
 * @property int $id
 * @property int $guia
 * @property int $planta_origen_id
 * @property int $despacho_a_ruta
 * @property \Cake\I18n\FrozenDate $fecha
 * @property string $conductor
 * @property string $patente
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Planta $planta
 * @property \App\Model\Entity\Fila[] $filas
 */
class DespachoAPartido extends Entity
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
        'guia' => true,
        'planta_origen_id' => true,
        'despacho_a_ruta' => true,
        'fecha' => true,
        'conductor' => true,
        'patente' => true,
        'observaciones' => true,
        'planta' => true,
        'filas' => true
    ];
}
