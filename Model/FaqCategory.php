<?php
/**
 * Class FaqCategory
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_Faq
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
namespace Risecommerce\Faq\Model;

use Magento\Framework\Model\AbstractModel;
use Risecommerce\Faq\Api\Data\FaqCategoryInterface;


class FaqCategory extends AbstractModel implements FaqCategoryInterface
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Risecommerce\Faq\Model\ResourceModel\FaqCategory');
    }

    /**
     * Get Id
     *
     * @return string
     */
    public function getId()
    {
        // TODO: Implement getName() method.
        return $this->getData(self::FAQ_CATEGORY_ID);
    }
    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->getData(self::FAQ_CATEGORY_NAME);
    }

    /**
     * Get Description
     *
     * @return string|null
     */
    public function getDescription()
    {
        // TODO: Implement getDescription() method.
        return $this->getData(self::FAQ_CATEGORY_DESCRIPTION);
    }

    /**
     * Get SortOrder
     *
     * @return string|null
     */
    public function getSortOrder()
    {
        // TODO: Implement getSortOrder() method.
        return $this->getData(self::SORT_ORDER);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime()
    {
        // TODO: Implement getCreationTime() method.
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        // TODO: Implement getUpdateTime() method.
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive()
    {
        // TODO: Implement isActive() method.
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set Id
     *
     * @param string $id id
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setId($id)
    {
        // TODO: Implement setName() method.
        return $this->setData(self::FAQ_CATEGORY_ID, $id);
    }
    /**
     * Set Name
     *
     * @param string $name name
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setName($name)
    {
        // TODO: Implement setName() method.
        return $this->setData(self::FAQ_CATEGORY_NAME, $name);
    }

    /**
     * Set Desription
     *
     * @param string $desription desription
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setDescription($desription)
    {
        // TODO: Implement setDescription() method.
        return $this->setData(self::FAQ_CATEGORY_DESCRIPTION, $desription);
    }

    /**
     * Set Sortorder
     *
     * @param string $sortorder sortorder
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setSortOrder($sortorder)
    {
        // TODO: Implement setSortOrder() method.
        return $this->setData(self::SORT_ORDER, $sortorder);
    }

    /**
     * Set creation time
     *
     * @param string $creationTime creationTime
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setCreationTime($creationTime)
    {
        // TODO: Implement setCreationTime() method.
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    /**
     * Set update time
     *
     * @param string $updateTime updateTime
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setUpdateTime($updateTime)
    {
        // TODO: Implement setUpdateTime() method.
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Set is active
     *
     * @param int|bool $isActive isActive
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setIsActive($isActive)
    {
        // TODO: Implement setIsActive() method.
        return $this->setData(self::IS_ACTIVE, $isActive);
    }
}
