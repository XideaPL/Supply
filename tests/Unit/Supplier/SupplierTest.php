<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\Tests\Unit;

use Xidea\Supply\Supplier\DefaultSupplier;
use Xidea\Supply\SupplierItem\DefaultSupplierItem;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class SupplierTest extends \PHPUnit_Framework_TestCase
{
    public function testSymbol()
    {
        $supplier = $this->createSupplier();
        $this->assertNull($supplier->getSymbol());
        
        $symbol = 'SUPP1';
        
        $supplier->setSymbol($symbol);
        $this->assertEquals($symbol, $supplier->getSymbol());
    }
    
    public function testName()
    {
        $supplier = $this->createSupplier();
        $this->assertNull($supplier->getName());
        
        $name = 'Supplier 1';
        
        $supplier->setName($name);
        $this->assertEquals($name, $supplier->getName());
    }
    
    public function testSupplierItem()
    {
        $supplier = $this->createSupplier();
        $this->assertEquals(0, count($supplier->getSupplierItems()));
        
        $item = $this->createSupplierItem();
        
        $supplier->addSupplierItem($item);
        $this->assertEquals(1, count($supplier->getSupplierItems()));
    }
    
    protected function createSupplier()
    {
        return new DefaultSupplier();
    }
    
    protected function createSupplierItem()
    {
        return new DefaultSupplierItem();
    }
}
