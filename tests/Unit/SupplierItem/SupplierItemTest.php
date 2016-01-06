<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\Tests\Unit;

use Xidea\Supply\SupplierItem\DefaultSupplierItem;
use Xidea\Supply\Supplier\DefaultSupplier;
use Xidea\Supply\Product\DefaultProduct;
use Xidea\Supply\Manufacturer\DefaultManufacturer;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class SupplierItemTest extends \PHPUnit_Framework_TestCase
{
    public function testSupplier()
    {
        $supplierItem = $this->createSupplierItem();
        $this->assertNull($supplierItem->getSupplier());

        $product = $this->createSupplier();
        
        $supplierItem->setSupplier($product);
        
        $this->assertNotNull($supplierItem->getSupplier());
        $this->assertSame($product, $supplierItem->getSupplier());
    }
    
    public function testProduct()
    {
        $supplierItem = $this->createSupplierItem();
        $this->assertNull($supplierItem->getProduct());

        $product = $this->createProduct();
        
        $supplierItem->setProduct($product);
        
        $this->assertNotNull($supplierItem->getProduct());
        $this->assertSame($product, $supplierItem->getProduct());
    }
    
    public function testManufacturer()
    {
        $supplierItem = $this->createSupplierItem();
        $this->assertNull($supplierItem->getManufacturer());

        $manufacturer = $this->createManufacturer();
        
        $supplierItem->setManufacturer($manufacturer);
        
        $this->assertNotNull($supplierItem->getManufacturer());
        $this->assertSame($manufacturer, $supplierItem->getManufacturer());
    }
    
    public function testSymbol()
    {
        $supplierItem = $this->createSupplier();
        $this->assertNull($supplierItem->getSymbol());
        
        $symbol = 'SUPP1';
        
        $supplierItem->setSymbol($symbol);
        $this->assertEquals($symbol, $supplierItem->getSymbol());
    }
    
    public function testQty()
    {
        $supplierItem = $this->createSupplierItem();
        $this->assertNull($supplierItem->getQty());
        
        $qty = 10;
        
        $supplierItem->setQty($qty);
        $this->assertEquals($qty, $supplierItem->getQty());
    }
    
    public function testPrice()
    {
        $supplierItem = $this->createSupplierItem();
        $this->assertNull($supplierItem->getPrice());
        
        $price = 9.90;
        
        $supplierItem->setPrice($price);
        $this->assertEquals($price, $supplierItem->getPrice());
    }
    
    public function testDiscount()
    {
        $supplierItem = $this->createSupplierItem();
        $this->assertNull($supplierItem->getDiscount());
        
        $discount = 35;
        
        $supplierItem->setDiscount($discount);
        $this->assertEquals($discount, $supplierItem->getDiscount());
    }
    
    protected function createSupplierItem()
    {
        return new DefaultSupplierItem();
    }
    
    protected function createSupplier()
    {
        return new DefaultSupplier();
    }
    
    protected function createProduct()
    {
        return new DefaultProduct();
    }
    
    protected function createManufacturer()
    {
        return new DefaultManufacturer();
    }
}
