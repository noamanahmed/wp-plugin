jQuery(document).ready(
    function () {

        let selector = jQuery('.magnific-popup-image')
        if (selector.length === 0) { return;
        }

        selector.magnificPopup(
            {
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300 // don't foget to change the duration also in CSS
                }
            }
        );
    }
);