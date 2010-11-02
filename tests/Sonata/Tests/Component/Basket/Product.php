<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Sonata\Tests\Component\Basket;

use Sonata\Component\Product\BaseProduct;

class Product extends BaseProduct
{
    public $enabled = true;
    public $id = 1;
    public $name = 'fake name';
    public $price = 15;
    public $vat = 19.6;


    public function getOptions() {
        return array(
            'option1' => 'toto',
        );
    }

    public function isRecurrentPayment() {
        return false;
    }

}