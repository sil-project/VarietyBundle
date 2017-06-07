<?php

/*
 * This file is part of the Blast Project package.
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU LGPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Librinfo\VarietiesBundle\Entity\Test\Unit;

/*
 * Generated by PHPUnit_SkeletonGenerator on 2017-05-29 at 15:20:42.
 */

use PHPUnit\Framework\TestCase;
use Librinfo\VarietiesBundle\Entity\VarietyDescriptionPlant;

class VarietyDescriptionPlantTest extends TestCase
{
    /**
     * @var VarietyDescriptionPlant
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new VarietyDescriptionPlant();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testGetFieldset()
    {
        $test = $this->object->getFieldset();
        $this->assertEquals($test, 'plant');
    }
}
