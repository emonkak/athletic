<?php
/**
 * User: zach
 * Date: 6/21/13
 * Time: 3:41 PM
 */

namespace Athletic\Factories;


use Pimple\Container;

/**
 * Class AbstractFactory
 * @package Athletic\Factories
 */
abstract class AbstractFactory
{
    /** @var  Pimplel\Container */
    protected $container;


    /**
     * @param Pimple\Container $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

}
