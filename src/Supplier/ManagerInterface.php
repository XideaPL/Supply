<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\Supplier;

use Xidea\Supply\SupplierInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ManagerInterface
{
    /**
     * Saves a supplier.
     * 
     * @param SupplierInterface $supplier
     */
    function save(SupplierInterface $supplier);

    /**
     * Updates a supplier.
     * 
     * @param SupplierInterface $supplier
     */
    function update(SupplierInterface $supplier);

    /**
     * Deletes a supplier.
     * 
     * @param SupplierInterface $supplier
     */
    function delete(SupplierInterface $supplier);
}
