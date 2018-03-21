<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ControlDeCalidad Entity
 *
 * @property int $id
 * @property int $lote_id
 * @property float $peso_muestra
 * @property float $llenado
 * @property float $color_el
 * @property float $color_l
 * @property float $color_la
 * @property float $color_a
 * @property float $color_y
 * @property float $dc_pelon_adherido
 * @property float $dc_manchas_graves
 * @property float $dc_cascara_imperfecta
 * @property float $dc_manchas_leves
 * @property float $dc_casco_abierto
 * @property float $di_hongo_activo_rancidez
 * @property float $di_dano_de_insectos
 * @property float $di_reseca_grave_vana
 * @property float $di_hongo_inactivo
 * @property float $di_reseca_leve
 * @property float $calibre_mayor_36
 * @property float $calibre_34_36
 * @property float $calibre_32_34
 * @property float $calibre_30_32
 * @property float $calibre_28_30
 * @property float $calibre_menor_28
 * @property float $humedad
 *
 * @property \App\Model\Entity\Lote $lote
 */
class ControlDeCalidad extends Entity
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
        'lote_id' => true,
        'peso_muestra' => true,
        'llenado' => true,
        'color_el' => true,
        'color_l' => true,
        'color_la' => true,
        'color_a' => true,
        'color_y' => true,
        'dc_pelon_adherido' => true,
        'dc_manchas_graves' => true,
        'dc_cascara_imperfecta' => true,
        'dc_manchas_leves' => true,
        'dc_casco_abierto' => true,
        'di_hongo_activo_rancidez' => true,
        'di_dano_de_insectos' => true,
        'di_reseca_grave_vana' => true,
        'di_hongo_inactivo' => true,
        'di_reseca_leve' => true,
        'calibre_mayor_36' => true,
        'calibre_34_36' => true,
        'calibre_32_34' => true,
        'calibre_30_32' => true,
        'calibre_28_30' => true,
        'calibre_menor_28' => true,
        'humedad' => true,
        'lote' => true
    ];
}
