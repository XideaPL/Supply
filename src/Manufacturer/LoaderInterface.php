<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\Manufacturer;

use Xidea\Base\Model\LoaderInterface as ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ManufacturerLoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a supplier by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Supply\ManufacturerInterface
     */
    function load($id);
}
