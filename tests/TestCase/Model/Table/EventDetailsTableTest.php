<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventDetailsTable Test Case
 */
class EventDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventDetailsTable
     */
    public $EventDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.event_details',
        'app.events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EventDetails') ? [] : ['className' => EventDetailsTable::class];
        $this->EventDetails = TableRegistry::get('EventDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EventDetails);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
