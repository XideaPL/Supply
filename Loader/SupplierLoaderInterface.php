<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Loader;

use Xidea\Component\Base\Loader\ObjectLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface SupplierLoaderInterface extends ObjectLoaderInterface
{
    /**
     * Returns a supplier by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Product\Model\SupplierInterface
     */
    function load($id);
}
