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
interface SupplierItemInterface
{
    /**
     * Returns the id.
     * 
     * @return mixed The id
     */
    function getId();
    
    /**
     * Sets the supplier.
     *
     * @param SupplierInterface $supplier
     */
    function setSupplier(SupplierInterface $supplier);
    
    /**
     * Returns the supplier.
     *
     * @return SupplierInterface
     */
    function getSupplier();
    
    /**
     * Sets the manufacturer.
     *
     * @param ManufacturerInterface $manufacturer
     */
    function setManufacturer(ManufacturerInterface $manufacturer);
    
    /**
     * Returns the manufacturer.
     *
     * @return ManufacturerInterface
     */
    function getManufacturer();
    
    /**
     * Sets the product.
     *
     * @param ProductInterface $product
     */
    function setProduct(ProductInterface $product);
    
    /**
     * Returns the product.
     *
     * @return ProductInterface
     */
    function getProduct();

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
     * Sets the qty.
     *
     * @param string $qty
     */
    function setQty($qty);
    
    /**
     * Returns the qty.
     *
     * @return string
     */
    function getQty();
    
    /**
     * Sets the price.
     *
     * @param string $price
     */
    function setPrice($price);
    
    /**
     * Returns the price.
     *
     * @return string
     */
    function getPrice();
    
    /**
     * Sets the discount.
     *
     * @param float $discount
     */
    function setDiscount($discount);
    
    /**
     * Returns the discount.
     *
     * @return float
     */
    function getDiscount();
}
