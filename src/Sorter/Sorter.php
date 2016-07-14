<?php

namespace Minetro\Model\Specification\Sorter;

use Nette\Object;

/**
 * Sorter
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 *
 * @property-read SorterRule[] $rules
 */
class Sorter extends Object
{

    /** @var SorterRule[] */
    private $rules = [];

    /**
     * @param string $column
     * @param bool $asc
     * @return SorterRule
     */
    public function create($column, $asc = FALSE)
    {
        $this->add($rule = new SorterRule($column, $asc ? SorterRule::ASCENDING : SorterRule::DESCENDING));

        return $rule;
    }

    /**
     * @param SorterRule $rule
     */
    public function add(SorterRule $rule)
    {
        $this->rules[] = $rule;
    }

    /**
     * @return SorterRule[]
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * FACTORY *****************************************************************
     */

    /**
     * @param array $rules
     * @return Sorter
     */
    public static function factory(array $rules)
    {
        $inst = new Sorter();

        foreach ($rules as $column => $asc) {
            $inst->create($column, $asc);
        }

        return $inst;
    }

}
