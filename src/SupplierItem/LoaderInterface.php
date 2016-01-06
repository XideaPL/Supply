<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\SupplierItem;

use Xidea\Base\Model\LoaderInterface as ModelLoaderInterface;
use Xidea\Supply\SupplierInterface,
    Xidea\Supply\ManufacturerInterface,
    Xidea\Supply\ProductInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface SupplierItemLoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns an item by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Supply\SupplierItemInterface
     */
    function load($id);
    
    /**
     * Returns items.
     * 
     * @param SupplierInterface $supplier
     * @param ManufacturerInterface $manufacturer
     * 
     * @return array
     */
    function loadOneBySupplierAndManufacturer(SupplierInterface $supplier, ManufacturerInterface $manufacturer);
    
    /**
     * Returns items.
     * 
     * @param SupplierInterface $supplier
     * @param ProductInterface $product
     * 
     * @return array
     */
    function loadOneBySupplierAndProduct(SupplierInterface $supplier, ProductInterface $product);
}
