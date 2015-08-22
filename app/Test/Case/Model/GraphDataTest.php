<?php
App::uses('GraphData', 'Model');

/**
 * GraphData Test Case
 *
 */
class GraphDataTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.graph_data'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GraphData = ClassRegistry::init('GraphData');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GraphData);

		parent::tearDown();
	}

}
