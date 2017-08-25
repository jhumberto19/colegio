<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocentesTable Test Case
 */
class DocentesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocentesTable
     */
    public $Docentes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.docentes',
        'app.materias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Docentes') ? [] : ['className' => DocentesTable::class];
        $this->Docentes = TableRegistry::get('Docentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Docentes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
