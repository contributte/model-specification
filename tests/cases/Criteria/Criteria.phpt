<?php

/**
 * Test: Minetro\Model\Specification\Criteria\Criteria
 */

require_once __DIR__ . '/../../bootstrap.php';

use Minetro\Model\Specification\Criteria\Criteria;
use Tester\Assert;
use Tester\TestCase;

final class CriteriaTest extends TestCase
{

    /**
     *
     */
    public function testFactory()
    {
        $criteria = ['foobar' => 1];
        $inst = Criteria::factory($criteria);
        Assert::same($criteria['foobar'], $inst->getCriterion('foobar')->getValue());
        Assert::null($inst->getCriterion(time()));
        Assert::count(1, $inst->getCriteria());
    }

    public function testMethods()
    {
        $inst = new Criteria();
        $inst->create('foobar', 5);

        Assert::same(5, $inst->getCriterion('foobar')->getValue());
        Assert::null($inst->getCriterion(time()));
        Assert::count(1, $inst->getCriteria());
    }

}

(new CriteriaTest())->run();
