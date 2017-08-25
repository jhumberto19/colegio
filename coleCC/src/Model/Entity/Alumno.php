<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumno Entity
 *
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $grado
 * @property string $seccion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Registro[] $registros
 * @property \App\Model\Entity\Materia[] $materias
 */
class Alumno extends Entity
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
        '*' => true,
        'id' => false
    ];
}
