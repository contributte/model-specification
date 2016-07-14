<?php

namespace Minetro\Model\Specification\Pagination;

use Nette\Utils\Paginator as NettePaginator;

/**
 * Paginator
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
class Paginator extends NettePaginator
{

    /**
     * FACTORY *****************************************************************
     */

    /**
     * @param int $itemsPerPage
     * @return Paginator
     */
    public static function factory($itemsPerPage = 10)
    {
        $inst = new Paginator();
        $inst->setItemsPerPage($itemsPerPage);

        return $inst;
    }

}
