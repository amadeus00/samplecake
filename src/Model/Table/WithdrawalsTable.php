<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Withdrawals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Buytrades
 *
 * @method \App\Model\Entity\Withdrawal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Withdrawal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Withdrawal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Withdrawal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Withdrawal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Withdrawal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Withdrawal findOrCreate($search, callable $callback = null)
 */
class WithdrawalsTable extends Table
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

        $this->table('withdrawals');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Buytrades', [
            'foreignKey' => 'buytrade_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->integer('buyvalue')
            ->allowEmpty('buyvalue');

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
        $rules->add($rules->existsIn(['buytrade_id'], 'Buytrades'));

        return $rules;
    }
}
