<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\SupplierItem;

use Xidea\Supply\SupplierItemInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface SupplierItemManagerInterface
{
    /**
     * Saves a supplier item.
     * 
     * @param SupplierItemInterface $supplierItem
     */
    function save(SupplierItemInterface $supplierItem);

    /**
     * Updates a supplier item.
     * 
     * @param SupplierItemInterface $supplierItem
     */
    function update(SupplierItemInterface $supplierItem);

    /**
     * Deletes a supplier item.
     * 
     * @param SupplierItemInterface $supplierItem
     */
    function delete(SupplierItemInterface $supplierItem);
}
