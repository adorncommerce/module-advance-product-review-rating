var config = {
    map: {
        "*": {
            rateyo: 'Adorncommerce_ProductReviewRating/js/jquery.rateyo.min',
            modal_overlay: 'Adorncommerce_ProductReviewRating/js/modal_overlay',
            'Magento_Review/js/process-reviews':
                'Adorncommerce_ProductReviewRating/js/process-reviews',
            lightGallery: "Adorncommerce_ProductReviewRating/js/lightgallery"
        }
    },
    shim: {
        rateyo: {
            deps: ['jquery']
        },
        "Adorncommerce_ProductReviewRating/js/lightgallery.min": ["jquery"]
    }
};
