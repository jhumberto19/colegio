<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materias Model
 *
 * @property \App\Model\Table\DocentesTable|\Cake\ORM\Association\BelongsTo $Docentes
 * @property \App\Model\Table\RegistrosTable|\Cake\ORM\Association\HasMany $Registros
 * @property \App\Model\Table\AlumnosTable|\Cake\ORM\Association\BelongsToMany $Alumnos
 *
 * @method \App\Model\Entity\Materia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Materia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Materia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Materia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Materia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Materia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MateriasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('materias');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Docentes', [
            'foreignKey' => 'docente_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Registros', [
            'foreignKey' => 'materia_id'
        ]);
        $this->belongsToMany('Alumnos', [
            'foreignKey' => 'materia_id',
            'targetForeignKey' => 'alumno_id',
            'joinTable' => 'alumnos_materias'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['docente_id'], 'Docentes'));

        return $rules;
    }
}
