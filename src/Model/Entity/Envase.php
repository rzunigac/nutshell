<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Envase Entity
 *
 * @property int $id
 * @property string $nombre
 * @property float $kg
 *
 * @property \App\Model\Entity\Ensacado[] $ensacados
 * @property \App\Model\Entity\Fila[] $filas
 * @property \App\Model\Entity\Lote[] $lotes
 */
class Envase extends Entity
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
        'nombre' => true,
        'kg' => true,
        'ensacados' => true,
        'filas' => true,
        'lotes' => true
    ];
}
