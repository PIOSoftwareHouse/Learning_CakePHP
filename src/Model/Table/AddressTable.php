<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Address Model
 *
 * @property \App\Model\Table\CityTable|\Cake\ORM\Association\BelongsTo $City
 *
 * @method \App\Model\Entity\Addres get($primaryKey, $options = [])
 * @method \App\Model\Entity\Addres newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Addres[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Addres|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Addres|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Addres patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Addres[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Addres findOrCreate($search, callable $callback = null, $options = [])
 */
class AddressTable extends Table
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

        $this->setTable('address');
        $this->setDisplayField('address_id');
        $this->setPrimaryKey('address_id');

        $this->belongsTo('City', [
            'foreignKey' => 'city_id',
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
            ->allowEmptyString('address_id', 'create');

        $validator
            ->scalar('address')
            ->maxLength('address', 50)
            ->requirePresence('address', 'create')
            ->allowEmptyString('address', false);

        $validator
            ->scalar('address2')
            ->maxLength('address2', 50)
            ->allowEmptyString('address2');

        $validator
            ->scalar('district')
            ->maxLength('district', 20)
            ->requirePresence('district', 'create')
            ->allowEmptyString('district', false);

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 10)
            ->allowEmptyString('postal_code');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->requirePresence('phone', 'create')
            ->allowEmptyString('phone', false);

        $validator
            ->scalar('location')
            ->requirePresence('location', 'create')
            ->allowEmptyString('location', false);

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
        $rules->add($rules->existsIn(['city_id'], 'City'));

        return $rules;
    }
}
