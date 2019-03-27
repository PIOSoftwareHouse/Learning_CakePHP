<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesByFilmCategory Model
 *
 * @method \App\Model\Entity\SalesByFilmCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesByFilmCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalesByFilmCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesByFilmCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesByFilmCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesByFilmCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesByFilmCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesByFilmCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class SalesByFilmCategoryTable extends Table
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

        $this->setTable('sales_by_film_category');
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
            ->scalar('category')
            ->maxLength('category', 25)
            ->requirePresence('category', 'create')
            ->allowEmptyString('category', false);

        $validator
            ->decimal('total_sales')
            ->allowEmptyString('total_sales');

        return $validator;
    }
}
