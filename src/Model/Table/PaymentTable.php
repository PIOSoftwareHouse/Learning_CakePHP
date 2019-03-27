<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payment Model
 *
 * @property \App\Model\Table\CustomerTable|\Cake\ORM\Association\BelongsTo $Customer
 * @property \App\Model\Table\StaffTable|\Cake\ORM\Association\BelongsTo $Staff
 * @property \App\Model\Table\RentalTable|\Cake\ORM\Association\BelongsTo $Rental
 *
 * @method \App\Model\Entity\Payment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Payment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Payment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Payment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payment findOrCreate($search, callable $callback = null, $options = [])
 */
class PaymentTable extends Table
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

        $this->setTable('payment');
        $this->setDisplayField('payment_id');
        $this->setPrimaryKey('payment_id');

        $this->belongsTo('Customer', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Staff', [
            'foreignKey' => 'staff_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Rental', [
            'foreignKey' => 'rental_id'
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
            ->allowEmptyString('payment_id', 'create');

        $validator
            ->decimal('amount')
            ->requirePresence('amount', 'create')
            ->allowEmptyString('amount', false);

        $validator
            ->dateTime('payment_date')
            ->requirePresence('payment_date', 'create')
            ->allowEmptyDateTime('payment_date', false);

        $validator
            ->dateTime('last_update')
            ->allowEmptyDateTime('last_update');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customer'));
        $rules->add($rules->existsIn(['staff_id'], 'Staff'));
        $rules->add($rules->existsIn(['rental_id'], 'Rental'));

        return $rules;
    }
}
