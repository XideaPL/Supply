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
interface ProductInterface
{
    /**
     * Returns the id.
     * 
     * @return mixed The id
     */
    function getId();

    /**
     * Returns the sku.
     *
     * @return string
     */
    function getSku();
    
    /**
     * Returns the name.
     *
     * @return string
     */
    function getName();
    
    /**
     * Returns the supplier items.
     *
     * @return array
     */
    function getSupplierItems();
    
    /**
     * Adds the supplier item.
     * 
     * @param SupplierItemInterface $supplierItem
     */
    function addSupplierItem(SupplierItemInterface $supplierItem);
    
    /**
     * Removes the supplier item.
     * 
     * @param SupplierItemInterface $supplierItem
     */
    function removeSupplierItem(SupplierItemInterface $supplierItem);
}
