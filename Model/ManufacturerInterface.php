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
interface ManufacturerInterface
{
    /**
     * Returns the id.
     * 
     * @return mixed The id
     */
    function getId();
    
    /**
     * Returns the name.
     *
     * @return string
     */
    function getName();
}
