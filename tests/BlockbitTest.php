<?php
/**
 * Tests for BlockBit
 */

use PHPUnit\Framework\TestCase;
use Blockbit\Blockbit;

class BlockbitTest extends TestCase {
    private Blockbit $instance;

    protected function setUp(): void {
        $this->instance = new Blockbit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockbit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
