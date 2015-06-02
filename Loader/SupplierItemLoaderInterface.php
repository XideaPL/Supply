<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Supply\Loader;

use Xidea\Component\Base\Loader\ModelLoaderInterface;
use Xidea\Component\Supply\Model\SupplierInterface,
    Xidea\Component\Supply\Model\ProductInterface;

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
     * @return \Xidea\Component\Product\Model\SupplierItemInterface
     */
    function load($id);
    
    /**
     * Returns items.
     * 
     * @param SupplierInterface $supplier
     * @param ProductInterface
     * 
     * @return array
     */
    function loadOneBySupplierAndProduct(SupplierInterface $supplier, ProductInterface $product);
}
