<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Supply\Loader;

use Xidea\Component\Base\Loader\ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface SupplierLoaderInterface extends ModelLoaderInterface
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
