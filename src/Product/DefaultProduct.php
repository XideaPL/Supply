<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\Product;

use Xidea\Supply\ProductInterface;
use Xidea\Supply\SupplierItemInterface;

/**
 */
class DefaultProduct implements ProductInterface
{
    /*
     * @var mixed
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $sku;
    
    /*
     * @var string
     */
    protected $name;
    
    /*
     * @var array
     */
    protected $supplierItems = [];
    
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
    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    
    /**
     * @inheritDoc
     */
    public function getSku()
    {
        return $this->sku;
    }
    
    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @inheritDoc
     */
    public function getSupplierItems()
    {
        return $this->supplierItems;
    }
    
    /**
     * @inheritDoc
     */
    public function addSupplierItem(SupplierItemInterface $supplierItem)
    {
        $this->supplierItems[] = $supplierItem;
    }
    
    /**
     * @inheritDoc
     */
    public function removeSupplierItem(SupplierItemInterface $supplierItem)
    {
        foreach($this->supplierItems as $key => $item) {
            if($item === $supplierItem) {
                unset($this->supplierItems[$key]);
            }
        }
    }
}
