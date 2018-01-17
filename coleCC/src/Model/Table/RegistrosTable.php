<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registros Model
 *
 * @property \App\Model\Table\AlumnosTable|\Cake\ORM\Association\BelongsTo $Alumnos
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\BelongsTo $Materias
 *
 * @method \App\Model\Entity\Registro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Registro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Registro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Registro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegistrosTable extends Table
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

        $this->setTable('registros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Alumnos', [
            'foreignKey' => 'alumno_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Materias', [
            'foreignKey' => 'materia_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('id', 'create');

        $validator
            ->numeric('nota1')
            ->requirePresence('nota1', 'create')
            ->notEmpty('nota1','rellene este campo con una nota valida');

        $validator
            ->numeric('nota2')
            ->requirePresence('nota2', 'create')
            ->notEmpty('nota2','rellene este campo con una nota valida');

        $validator
            ->numeric('nota3')
            ->requirePresence('nota3', 'create')
            ->notEmpty('nota3','rellene este campo con una nota valida');

        $validator
            ->numeric('promedio')
            ->requirePresence('promedio', 'create')
            ->notEmpty('promedio','rellene este campo');

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
        $rules->add($rules->existsIn(['alumno_id'], 'Alumnos'));
        $rules->add($rules->existsIn(['materia_id'], 'Materias'));

        return $rules;
    }
}
