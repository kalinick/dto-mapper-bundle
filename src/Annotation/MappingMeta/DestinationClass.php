<?php

namespace VKMapperBundle\Annotation\MappingMeta;

use VKMapperBundle\Annotation\MappingMeta\NamingStrategy\NamingStrategyInterface;
use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Annotation\Target("CLASS")
 */
class DestinationClass
{
    /**
     * @var array<VKMapperBundle\Annotation\MappingMeta\NamingStrategy\AbstractNamingStrategy>
     */
    public $namingStrategies;

    /**
     * @return NamingStrategyInterface[]|null
     */
    public function getNamingStrategies(): ?array
    {
        return $this->namingStrategies;
    }
}
