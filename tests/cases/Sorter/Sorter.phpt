<?php

/**
 * Test: Minetro\Model\Specification\Sorter\Sorter
 */

require_once __DIR__ . '/../../bootstrap.php';

use Minetro\Model\Specification\Sorter\Sorter;
use Minetro\Model\Specification\Sorter\SorterRule;
use Tester\Assert;
use Tester\TestCase;

final class SorterTest extends TestCase
{

    public function testAddRule()
    {
        $inst = new Sorter();
        $rule = new SorterRule('test');
        $inst->add($rule);

        Assert::same([$rule], $inst->getRules());
    }

    public function testCreateRule()
    {
        $inst = new Sorter();
        $inst->create('test', TRUE);

        Assert::equal([new SorterRule('test', SorterRule::ASCENDING)], $inst->getRules());
    }
}

(new SorterTest())->run();
