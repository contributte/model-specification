<?php

/**
 * Test: Minetro\Model\Specification\Sorter\SorterRule
 */

require_once __DIR__ . '/../../bootstrap.php';

use Minetro\Model\Specification\Sorter\SorterRule;
use Tester\Assert;
use Tester\TestCase;

final class SorterRuleTest extends TestCase
{

    public function testConstructor()
    {
        $column = 'column';
        $inst = new SorterRule($column);

        Assert::same($column, $inst->getColumn());
        Assert::same(SorterRule::DESCENDING, $inst->getDirection());
    }

    public function testMethods()
    {
        $inst1 = new SorterRule(1234);

        Assert::same(SorterRule::DESCENDING, $inst1->getDirection());
        Assert::true($inst1->isDescending());

        $inst2 = new SorterRule(1234, SorterRule::ASCENDING);

        Assert::same(SorterRule::ASCENDING, $inst2->getDirection());
        Assert::true($inst2->isAscending());
    }

}

(new SorterRuleTest())->run();
