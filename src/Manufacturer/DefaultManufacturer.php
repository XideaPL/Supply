<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Supply\Manufacturer;

use Xidea\Supply\ManufacturerInterface;

/**
 */
class DefaultManufacturer implements ManufacturerInterface
{
    /*
     * @var mixed
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $name;
    
    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }
}
