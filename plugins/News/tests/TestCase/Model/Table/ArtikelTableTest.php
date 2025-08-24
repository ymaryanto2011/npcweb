<?php
declare(strict_types=1);

namespace News\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use News\Model\Table\ArtikelTable;

/**
 * News\Model\Table\ArtikelTable Test Case
 */
class ArtikelTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \News\Model\Table\ArtikelTable
     */
    protected $Artikel;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.News.Artikel',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Artikel') ? [] : ['className' => ArtikelTable::class];
        $this->Artikel = $this->getTableLocator()->get('Artikel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Artikel);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \News\Model\Table\ArtikelTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
