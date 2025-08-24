<?php
declare(strict_types=1);

namespace News\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artikel Model
 *
 * @method \News\Model\Entity\Artikel newEmptyEntity()
 * @method \News\Model\Entity\Artikel newEntity(array $data, array $options = [])
 * @method array<\News\Model\Entity\Artikel> newEntities(array $data, array $options = [])
 * @method \News\Model\Entity\Artikel get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \News\Model\Entity\Artikel findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \News\Model\Entity\Artikel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\News\Model\Entity\Artikel> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \News\Model\Entity\Artikel|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \News\Model\Entity\Artikel saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\News\Model\Entity\Artikel>|\Cake\Datasource\ResultSetInterface<\News\Model\Entity\Artikel>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\News\Model\Entity\Artikel>|\Cake\Datasource\ResultSetInterface<\News\Model\Entity\Artikel> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\News\Model\Entity\Artikel>|\Cake\Datasource\ResultSetInterface<\News\Model\Entity\Artikel>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\News\Model\Entity\Artikel>|\Cake\Datasource\ResultSetInterface<\News\Model\Entity\Artikel> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ArtikelTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('artikel');
        $this->setDisplayField('artikel_judul');
        $this->setPrimaryKey('artikel_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->dateTime('artikel_tanggal')
            ->requirePresence('artikel_tanggal', 'create')
            ->notEmptyDateTime('artikel_tanggal');

        $validator
            ->scalar('artikel_judul')
            ->maxLength('artikel_judul', 255)
            ->requirePresence('artikel_judul', 'create')
            ->notEmptyString('artikel_judul');

        $validator
            ->scalar('artikel_slug')
            ->maxLength('artikel_slug', 255)
            ->requirePresence('artikel_slug', 'create')
            ->notEmptyString('artikel_slug');

        $validator
            ->scalar('artikel_konten')
            ->maxLength('artikel_konten', 4294967295)
            ->requirePresence('artikel_konten', 'create')
            ->notEmptyString('artikel_konten');

        $validator
            ->scalar('artikel_sampul')
            ->maxLength('artikel_sampul', 255)
            ->requirePresence('artikel_sampul', 'create')
            ->notEmptyString('artikel_sampul');

        $validator
            ->integer('artikel_author')
            ->requirePresence('artikel_author', 'create')
            ->notEmptyString('artikel_author');

        $validator
            ->integer('artikel_kategori')
            ->requirePresence('artikel_kategori', 'create')
            ->notEmptyString('artikel_kategori');

        $validator
            ->scalar('artikel_status')
            ->requirePresence('artikel_status', 'create')
            ->notEmptyString('artikel_status');

        $validator
            ->integer('artikel_dilihat')
            ->requirePresence('artikel_dilihat', 'create')
            ->notEmptyString('artikel_dilihat');

        return $validator;
    }
}
