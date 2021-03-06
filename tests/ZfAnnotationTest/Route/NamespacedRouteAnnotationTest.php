<?php

namespace ZfAnnotationTest\Route;

use ZfAnnotationTest\AbstractAnnotationTestCase;

/**
 * @group namespaced
 */
class NamespacedRouteAnnotationTest extends AbstractAnnotationTestCase
{

    public function testChildNodesAdded()
    {
        $config = $this->parse('ZfAnnotationTest\Route\TestController\NamespacedController')['router']['routes'];

        $expected = array(
            'root' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/root/:id/:method',
                    'defaults' => array(
                        'controller' => 'namespaced',
                        'action' => 'index'
                    ),
                    'constraints' => array(
                        'id' => '\\d+',
                        'method' => '\\w+'
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'index' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => '/root/:id/:method',
                            'defaults' => array(
                                'controller' => 'nobase',
                                'action' => 'complete-definition-action'
                            ),
                            'constraints' => array(
                                'id' => '\\d+',
                                'method' => '\\w+'
                            )
                        ),
                        'may_terminate' => true,
                        'child_routes' => array()
                    ),
                    'edit' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/edit',
                            'defaults' => array(
                                'controller' => 'ZfAnnotationTest\Route\TestController\NamespacedController',
                                'action' => 'edit'
                            ),
                            'constraints' => null
                        ),
                        'child_routes' => array(),
                        'may_terminate' => true
                    ),
                    'remove' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/remove',
                            'defaults' => array(
                                'controller' => 'ZfAnnotationTest\Route\TestController\NamespacedController',
                                'action' => 'remove'
                            ),
                            'constraints' => null
                        ),
                        'child_routes' => array(),
                        'may_terminate' => true
                    )
                )
            )
        );

        $this->assertEquals($expected, $config);
    }

}
