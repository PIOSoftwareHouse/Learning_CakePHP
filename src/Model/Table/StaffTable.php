<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Staff Model
 *
 * @property \App\Model\Table\AddressTable|\Cake\ORM\Association\BelongsTo $Address
 * @property \App\Model\Table\StoreTable|\Cake\ORM\Association\BelongsTo $Store
 *
 * @method \App\Model\Entity\Staff get($primaryKey, $options = [])
 * @method \App\Model\Entity\Staff newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Staff[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Staff|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Staff patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Staff[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Staff findOrCreate($search, callable $callback = null, $options = [])
 */
class StaffTable extends Table
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

        $this->setTable('staff');
        $this->setDisplayField('staff_id');
        $this->setPrimaryKey('staff_id');

        $this->belongsTo('Address', [
            'foreignKey' => 'address_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Store', [
            'foreignKey' => 'store_id',
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
            ->allowEmptyString('staff_id', 'create');

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
            ->allowEmptyString('picture');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->allowEmptyString('active', false);

        $validator
            ->scalar('username')
            ->maxLength('username', 16)
            ->requirePresence('username', 'create')
            ->allowEmptyString('username', false);

        $validator
            ->scalar('password')
            ->maxLength('password', 40)
            ->allowEmptyString('password');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['address_id'], 'Address'));
        $rules->add($rules->existsIn(['store_id'], 'Store'));

        return $rules;
    }
}
