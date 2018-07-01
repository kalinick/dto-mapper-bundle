<?php

namespace MapperBundle\Mapping\Annotation\Meta\Strategy;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
class MultiCollectionStrategy extends Annotation
{
    /**
     * @Required
     */
    public $targetClass;

    /**
     * @return string
     */
    public function getTargetClass(): string
    {
        return $this->targetClass;
    }
}
