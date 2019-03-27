<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Store Model
 *
 * @property \App\Model\Table\StaffTable|\Cake\ORM\Association\BelongsTo $Staff
 * @property \App\Model\Table\AddressTable|\Cake\ORM\Association\BelongsTo $Address
 *
 * @method \App\Model\Entity\Store get($primaryKey, $options = [])
 * @method \App\Model\Entity\Store newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Store[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Store|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Store|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Store patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Store[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Store findOrCreate($search, callable $callback = null, $options = [])
 */
class StoreTable extends Table
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

        $this->setTable('store');
        $this->setDisplayField('store_id');
        $this->setPrimaryKey('store_id');

        $this->belongsTo('Staff', [
            'foreignKey' => 'manager_staff_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Address', [
            'foreignKey' => 'address_id',
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
            ->allowEmptyString('store_id', 'create');

        $validator
            ->dateTime('last_update')
            ->requirePresence('last_update', 'create')
            ->allowEmptyDateTime('last_update', false);

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
        $rules->add($rules->existsIn(['manager_staff_id'], 'Staff'));
        $rules->add($rules->existsIn(['address_id'], 'Address'));

        return $rules;
    }
}
