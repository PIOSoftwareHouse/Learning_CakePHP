<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StaffList Model
 *
 * @method \App\Model\Entity\StaffList get($primaryKey, $options = [])
 * @method \App\Model\Entity\StaffList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StaffList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StaffList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StaffList|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StaffList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StaffList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StaffList findOrCreate($search, callable $callback = null, $options = [])
 */
class StaffListTable extends Table
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

        $this->setTable('staff_list');
        $this->setDisplayField('name');
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
            ->requirePresence('ID', 'create')
            ->allowEmptyString('ID', false);

        $validator
            ->scalar('name')
            ->maxLength('name', 91)
            ->allowEmptyString('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 50)
            ->requirePresence('address', 'create')
            ->allowEmptyString('address', false);

        $validator
            ->scalar('zip code')
            ->maxLength('zip code', 10)
            ->allowEmptyString('zip code');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->requirePresence('phone', 'create')
            ->allowEmptyString('phone', false);

        $validator
            ->scalar('city')
            ->maxLength('city', 50)
            ->requirePresence('city', 'create')
            ->allowEmptyString('city', false);

        $validator
            ->scalar('country')
            ->maxLength('country', 50)
            ->requirePresence('country', 'create')
            ->allowEmptyString('country', false);

        $validator
            ->requirePresence('SID', 'create')
            ->allowEmptyString('SID', false);

        return $validator;
    }
}
