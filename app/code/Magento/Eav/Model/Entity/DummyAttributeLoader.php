<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Eav\Model\Entity;

use Magento\Framework\DataObject;

/**
 * Class DummyAttributeLoader
 */
class DummyAttributeLoader implements AttributeLoaderInterface
{
    /**
     * Retrieve configuration for all attributes
     *
     * @param AbstractEntity $resource
     * @param DataObject|null $object
     * @return AbstractEntity
     */
    public function loadAllAttributes(AbstractEntity $resource, DataObject $object = null)
    {
        return $resource;
    }
}
