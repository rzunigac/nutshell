<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fila Entity
 *
 * @property int $id
 * @property int $despacho_a_partido_id
 * @property int $envase_id
 * @property int $cantidad
 *
 * @property \App\Model\Entity\DespachoAPartido $despacho_a_partido
 * @property \App\Model\Entity\Envase $envase
 */
class Fila extends Entity
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
        'despacho_a_partido_id' => true,
        'envase_id' => true,
        'cantidad' => true,
        'despacho_a_partido' => true,
        'envase' => true
    ];
}
