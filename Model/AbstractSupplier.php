<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Supply\Model;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AbstractSupplier implements SupplierInterface
{
    /*
     * @var mixed
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $symbol;
    
    /*
     * @var string
     */
    protected $name;
    
    /*
     * @var array
     */
    protected $supplierItems;
    
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
