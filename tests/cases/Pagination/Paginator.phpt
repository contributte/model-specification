<?php

/**
 * Test: Minetro\Model\Specification\Pagination\Paginator
 */

require_once __DIR__ . '/../../bootstrap.php';

use Minetro\Model\Specification\Pagination\Paginator;
use Tester\Assert;
use Tester\TestCase;

final class PaginatorTest extends TestCase
{

    public function testFactory()
    {
        $inst = Paginator::factory();
        Assert::same(10, $inst->getItemsPerPage());

        $inst = Paginator::factory(15);
        Assert::same(15, $inst->getItemsPerPage());
    }

}

(new PaginatorTest())->run();
