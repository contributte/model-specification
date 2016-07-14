<?php

namespace Minetro\Model\Specification\Sorter;

use Nette\Object;

/**
 * Sorter Rule
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 *
 * @property-read string $column
 * @property-read string $direction
 */
class SorterRule extends Object
{

    const ASCENDING = 'ASC';
    const DESCENDING = 'DESC';

    /** @var string */
    private $column;

    /** @var string */
    private $direction;

    /**
     * @param string $column
     * @param string $direction
     */
    public function __construct($column, $direction = self::DESCENDING)
    {
        $this->column = $column;
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @return bool
     */
    public function isAscending()
    {
        return $this->direction == self::ASCENDING;
    }

    /**
     * @return bool
     */
    public function isDescending()
    {
        return $this->direction == self::DESCENDING;
    }

}
