<?php

namespace Minetro\Model\Specification;

use Minetro\Model\Specification\Criteria\Criteria;
use Minetro\Model\Specification\Pagination\Paginator;
use Minetro\Model\Specification\Sorter\Sorter;
use Nette\Object;

/**
 * Configuration
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 *
 * @property Paginator $paginator
 * @property Sorter $sorter
 * @property Criteria $criteria
 */
class Specification extends Object
{

    /** @var Paginator */
    protected $paginator;

    /** @var Sorter */
    protected $sorter;

    /** @var Criteria */
    protected $criteria;

    /**
     * @param Criteria $criteria
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
    }

    /**
     * @return Criteria
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param Paginator $paginator
     */
    public function setPaginator($paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * @return Paginator
     */
    public function getPaginator()
    {
        return $this->paginator;
    }

    /**
     * @param Sorter $sorter
     */
    public function setSorter($sorter)
    {
        $this->sorter = $sorter;
    }

    /**
     * @return Sorter
     */
    public function getSorter()
    {
        return $this->sorter;
    }

    /**
     * FACTORIES ***************************************************************
     */

    /**
     * @param Criteria $criteria
     * @param Paginator $paginator
     * @param Sorter $sorter
     * @return Specification
     */
    public static function factory(Criteria $criteria = NULL, Paginator $paginator = NULL, Sorter $sorter = NULL)
    {
        $inst = new Specification();

        if ($criteria) {
            $inst->setCriteria($criteria);
        }

        if ($sorter) {
            $inst->setSorter($sorter);
        }

        if ($paginator) {
            $inst->setPaginator($paginator);
        }

        return $inst;
    }

    /**
     * @return Sorter
     */
    public function createSorter()
    {
        $this->sorter = new Sorter();

        return $this->sorter;
    }

    /**
     * @return Criteria
     */
    public function createCriteria()
    {
        $this->criteria = new Criteria();

        return $this->criteria;
    }

    /**
     * @return Paginator
     */
    public function createPaginator()
    {
        $this->paginator = new Paginator();

        return $this->paginator;
    }

}
