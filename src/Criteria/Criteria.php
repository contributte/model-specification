<?php

namespace Minetro\Model\Specification\Criteria;

use Nette\Object;

/**
 * Criteria
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 *
 * @property-read Criterion[] $criteria
 */
class Criteria extends Object
{

    /** @var Criterion[] */
    private $criteria = [];

    /**
     * @param string $key
     * @param string $value
     * @return Criterion
     */
    public function create($key, $value)
    {
        $this->add($criterion = new Criterion($key, $value));

        return $criterion;
    }

    /**
     * @param Criterion $criterion
     */
    public function add(Criterion $criterion)
    {
        $this->criteria[] = $criterion;
    }

    /**
     * @param string $key
     * @return Criterion
     */
    public function getCriterion($key)
    {
        foreach ($this->criteria as $criteria) {
            if ($criteria->getKey() === $key) {
                return $criteria;
            }
        }

        return NULL;
    }

    /**
     * @return Criterion[]
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * FACTORY *****************************************************************
     */

    /**
     * @param array $criteria
     * @return Criteria
     */
    public static function factory(array $criteria)
    {
        $inst = new Criteria();

        foreach ($criteria as $key => $value) {
            $inst->create($key, $value);
        }

        return $inst;
    }

}
