<?php

namespace Minetro\Model\Specification\Criteria;

/**
 * Criterion
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 *
 * @property-read string $key
 * @property-read string $value
 */
class Criterion
{

    /** @var string */
    private $key;

    /** @var string */
    private $value;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
