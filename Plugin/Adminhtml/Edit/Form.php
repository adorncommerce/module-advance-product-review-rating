<?php
/**
 * Copyright 2020 Adorncommerce LLP. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Adorncommerce\ProductReviewRating\Plugin\Adminhtml\Edit;

/**
 * Class Form
 * @package Adorncommerce\ProductReviewRating\Plugin\Adminhtml\Edit
 */
class Form
{
    protected $helperData;
    protected $_coreRegistry;

    public function __construct(\Adorncommerce\ProductReviewRating\Helper\Data $helperData,
                                \Magento\Framework\Registry $registry)
    {
        $this->_coreRegistry = $registry;
        $this->helperData = $helperData;
    }

    public function beforeSetForm(\Magento\Review\Block\Adminhtml\Edit\Form $object, $form)
    {
        if (!$this->helperData->isModuleEnabled()) {
            return [$form];
        }
        $review = $this->_coreRegistry->registry('review_data');
        $fieldset = $form->addFieldset(
            'review_details_extra',
            ['legend' => __(''), 'class' => 'fieldset-wide']
        );

        $fieldset->addField(
            'admin_reply',
            'textarea',
            ['label' => __('Admin Reply'), 'required' => false, 'name' => 'admin_reply']
        );
        $fieldset->addField(
            'notify_customer',
            'checkboxes',
            [
                'label' => __('Notify Customer'),
                'name' => 'notify_customer',
                'onchange' => 'this.value = this.checked;',
                'values' => "*If customer is guest, the review email won't be send."
            ]
        );
        $form->setValues($review->getData());

        return [$form];
    }
}
