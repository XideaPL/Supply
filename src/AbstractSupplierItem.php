<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AbstractSupplierItem implements SupplierItemInterface
{
    /*
     * @var mixed
     */
    protected $id;
    
    /*
     * @var SupplierInterface
     */
    protected $supplier;
    
    /*
     * @var ManufacturerInterface
     */
    protected $manufacturer;
    
    /*
     * @var ProductInterface
     */
    protected $product;
    
    /*
     * @var string
     */
    protected $symbol;
    
    /*
     * @var int
     */
    protected $qty;
    
    /*
     * @var float
     */
    protected $price;
    
    /*
     * @var float
     */
    protected $discount;
    
    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @inheritDoc
     */
    public function setSupplier(SupplierInterface $supplier)
    {
        $this->supplier = $supplier;
    }
    
    /**
     * @inheritDoc
     */
    public function getSupplier()
    {
        return $this->supplier;
    }
    
    /**
     * @inheritDoc
     */
    public function setManufacturer(ManufacturerInterface $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }
    
    /**
     * @inheritDoc
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
    
    /**
     * @inheritDoc
     */
    public function setProduct(ProductInterface $product)
    {
        $this->product = $product;
    }
    
    /**
     * @inheritDoc
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * @inheritDoc
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }
    
    /**
     * @inheritDoc
     */
    public function getSymbol()
    {
        return $this->symbol;
    }
    
    /**
     * @inheritDoc
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }
    
    /**
     * @inheritDoc
     */
    public function getQty()
    {
        return $this->qty;
    }
    
    /**
     * @inheritDoc
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * @inheritDoc
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @inheritDoc
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    
    /**
     * @inheritDoc
     */
    public function getDiscount()
    {
        return $this->discount;
    }
}
