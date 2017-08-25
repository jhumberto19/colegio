<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnos Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RegistrosTable|\Cake\ORM\Association\HasMany $Registros
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\BelongsToMany $Materias
 *
 * @method \App\Model\Entity\Alumno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alumno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alumno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alumno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alumno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alumno findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AlumnosTable extends Table
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

        $this->setTable('alumnos');
        $this->setDisplayField('nombres');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Registros', [
            'foreignKey' => 'alumno_id'
        ]);
        $this->belongsToMany('Materias', [
            'foreignKey' => 'alumno_id',
            'targetForeignKey' => 'materia_id',
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
            ->requirePresence('nombres', 'create')
            ->notEmpty('nombres');

        $validator
            ->requirePresence('apellidos', 'create')
            ->notEmpty('apellidos');

        $validator
            ->requirePresence('grado', 'create')
            ->notEmpty('grado');

        $validator
            ->requirePresence('seccion', 'create')
            ->notEmpty('seccion');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
