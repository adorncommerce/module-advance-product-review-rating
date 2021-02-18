<?php
/**
 * Copyright 2020 Adorncommerce LLP. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Adorncommerce\ProductReviewRating\Helper;

use Magento\Framework\App\Helper\Context;

/**
 * Class Data
 * @package Adorncommerce\ProductReviewRating\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $_customerSession;

    /**
     * Data constructor.
     * @param Context $context
     * @param \Magento\Customer\Model\Session $customerSession
     */
    public function __construct(
        Context $context,
        \Magento\Customer\Model\Session $customerSession
    ) {
        $this->_customerSession = $customerSession;
        parent::__construct($context);
    }

    /**
     * @return mixed
     */
    public function isModuleEnabled()
    {
        return $this->scopeConfig->getValue('rating/general/enable');
    }

    public function isPopupEnabled()
    {
        return $this->scopeConfig->getValue('rating/general/popup');
    }

    /**
     * @return mixed
     */
    public function getColorCode()
    {
        return$this->scopeConfig->getValue('rating/general/star_color_option');
    }

    public function getGraphicCircle()
    {
        return$this->scopeConfig->getValue('rating/general/graphic_circle');
    }

    public function getRecipientEmail()
    {
        return $this->scopeConfig->getValue('rating/general/review_email_send_identity');
    }

    public function getCustomerSession()
    {
        return $this->_customerSession;
    }

    public function getAdminReplyEmailTemplate()
    {
        return $this->scopeConfig->getValue('rating/general/admin_reply_email_template');
    }

    public function getAdminReceiveEmailTemplate()
    {
        return $this->scopeConfig->getValue('rating/general/admin_review_email_template');
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        if ($this->isModuleEnabled()) {
            $template =  'Adorncommerce_ProductReviewRating::product/view/list.phtml';
        } else {
            $template = 'Magento_Review::product/view/list.phtml';
        }
        return $template;
    }
    public function getFormTemplate()
    {
        if ($this->isModuleEnabled()) {
            $template =  'Adorncommerce_ProductReviewRating::form.phtml';
        } else {
            $template = 'Magento_Review::form.phtml';
        }
        return $template;
    }
    public function getCustomerReviewTemplate()
    {
        if ($this->isModuleEnabled()) {
            $template =  'Adorncommerce_ProductReviewRating::customer/view.phtml';
        } else {
            $template = 'Magento_Review::customer/view.phtml';
        }
        return $template;
    }
    public function getReviewTemplate()
    {
        if ($this->isModuleEnabled()) {
            $template =  'Adorncommerce_ProductReviewRating::review.phtml';
        } else {
            $template = 'Magento_Review::review.phtml';
        }
        return $template;
    }
}
