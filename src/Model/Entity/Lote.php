<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lote Entity
 *
 * @property int $id
 * @property int $recepcion_id
 * @property int $variedad_id
 * @property int $envase_id
 * @property int $cantidad
 * @property float $kg_neto
 * @property float $porcentaje_esperado_de_partido
 * @property int $cerrado
 * @property int $filas_id
 * @property int $decision_id
 *
 * @property \App\Model\Entity\Recepcion $recepcion
 * @property \App\Model\Entity\Variedad $variedad
 * @property \App\Model\Entity\Envase $envase
 * @property \App\Model\Entity\Fila $fila
 * @property \App\Model\Entity\Ensacado[] $ensacados
 */
class Lote extends Entity
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
        'recepcion_id' => true,
        'variedad_id' => true,
        'envase_id' => true,
        'cantidad' => true,
        'kg_neto' => true,
        'porcentaje_esperado_de_partido' => true,
        'cerrado' => true,
        'filas_id' => true,
        'decision_id' => true,
        'recepcion' => true,
        'variedad' => true,
        'envase' => true,
        'fila' => true,
        'ensacados' => true
    ];
}
