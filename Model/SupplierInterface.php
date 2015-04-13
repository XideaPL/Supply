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
interface SupplierInterface
{
    /**
     * Returns the id.
     * 
     * @return mixed The id
     */
    function getId();

    /**
     * Sets the symbol.
     *
     * @param string $symbol
     */
    function setSymbol($symbol);
    
    /**
     * Returns the symbol.
     *
     * @return string
     */
    function getSymbol();
    
    /**
     * Sets the name.
     *
     * @param string $name
     */
    function setName($name);
    
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
    function getItems();
    
    /**
     * Adds the supplier item.
     * 
     * @param SupplierItemInterface $item
     */
    function addItem(SupplierItemInterface $item);
}
