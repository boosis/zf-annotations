<?php
/**
 * Annotated Router module for Zend Framework 2
 *
 * @link      https://github.com/alex-oleshkevich/zf2-annotated-routerfor the canonical source repository
 * @copyright Copyright (c) 2014 Alex Oleshkevich <alex.oleshkevich@gmail.com>
 * @license   http://en.wikipedia.org/wiki/MIT_License MIT
 */

namespace ZfAnnotation\Annotation;

/**
 * A route annotation.
 * @Annotation
 */
class Controller extends Service
{
    /**
     * @var string
     */
    public $serviceManagerKey = 'controllers';
}
