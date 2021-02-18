require(
    [
        'uiComponent',
        'jquery',
        'Magento_Ui/js/modal/modal'
    ],
    function (
        Component,
        $,
        modal,
    ) {
        'use strict';
        if (window.popup === "1") {
            var options = {
                type: 'popup',
                responsive: true,
                innerScroll: false,
                buttons: [{
                    text: $.mage.__('Continue'),
                    class: 'mymodal1',
                    click: function () {
                        this.closeModal();
                    }
                }]
            };
            var popup = modal(options, $('#modal-overlay'));
            $("#write-a-review").on('click', function () {
                $("#modal-overlay").modal("openModal");
                $(".modal-footer").hide();
            });
        }

    }
);
