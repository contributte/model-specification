<?php

/**
 * Test: Minetro\Model\Specification\Specification
 */

require_once __DIR__ . '/../bootstrap.php';

use Minetro\Model\Specification\Criteria\Criteria;
use Minetro\Model\Specification\Pagination\Paginator;
use Minetro\Model\Specification\Sorter\Sorter;
use Minetro\Model\Specification\Specification;
use Tester\Assert;
use Tester\TestCase;

final class SpecificationTest extends TestCase
{

    public function testNullFactory()
    {
        $inst = Specification::factory();
        Assert::null($inst->getCriteria());
        Assert::null($inst->getPaginator());
        Assert::null($inst->getSorter());
    }

    public function testCriteriaFactory()
    {
        $criteria = ['foobar' => 1];
        $criteriaInstance = Criteria::factory($criteria);

        $inst = Specification::factory(
            $criteriaInstance
        );

        Assert::same($criteriaInstance, $inst->getCriteria());
        Assert::equal($criteria['foobar'], $inst->getCriteria()->getCriteria()[0]->getValue());
        Assert::null($inst->getPaginator());
        Assert::null($inst->getSorter());
    }

    public function testPaginatorFactory()
    {
        $paginatorInstance = Paginator::factory(150);

        $inst = Specification::factory(
            NULL,
            $paginatorInstance
        );

        Assert::null($inst->getCriteria());
        Assert::same($paginatorInstance, $inst->getPaginator());
        Assert::null($inst->getSorter());
    }

    public function testSorterFactory()
    {
        $sorterInstance = new Sorter();

        $inst = Specification::factory(
            NULL,
            NULL,
            $sorterInstance
        );

        Assert::null($inst->getCriteria());
        Assert::null($inst->getPaginator());
        Assert::same($sorterInstance, $inst->getSorter());
    }

    public function testFields()
    {
        $inst = new Specification();

        $criteriaInstance = new Criteria();
        $paginatorInstance = new Paginator();
        $sorterInstance = new Sorter();

        $inst->setCriteria($criteriaInstance);
        $inst->setPaginator($paginatorInstance);
        $inst->setSorter($sorterInstance);

        Assert::same($criteriaInstance, $inst->getCriteria());
        Assert::same($paginatorInstance, $inst->getPaginator());
        Assert::same($sorterInstance, $inst->getSorter());
    }

}

(new SpecificationTest())->run();
