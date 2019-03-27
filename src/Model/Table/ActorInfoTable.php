<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActorInfo Model
 *
 * @property \App\Model\Table\ActorsTable|\Cake\ORM\Association\BelongsTo $Actors
 *
 * @method \App\Model\Entity\ActorInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActorInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ActorInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActorInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActorInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActorInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActorInfo findOrCreate($search, callable $callback = null, $options = [])
 */
class ActorInfoTable extends Table
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

        $this->setTable('actor_info');

        $this->belongsTo('Actors', [
            'foreignKey' => 'actor_id',
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
            ->scalar('first_name')
            ->maxLength('first_name', 45)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 45)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', false);

        $validator
            ->scalar('film_info')
            ->allowEmptyString('film_info');

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
        $rules->add($rules->existsIn(['actor_id'], 'Actors'));

        return $rules;
    }
}
