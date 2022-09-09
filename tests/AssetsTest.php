<?php
/**
 * Class SampleTest
 *
 * @package Noaman
 */

/**
 * Sample test case.
 */
class AssetsTest extends WP_UnitTestCase
{

    /**
     * A single example test.
     */
    public function test_scripts_enqueued()
    {
        do_action('wp_enqueue_scripts');

        $this->assertTrue(wp_script_is('magnific-popup.min.js'));
        $this->assertTrue(wp_script_is('magnific-popup-init.js'));
        $this->assertTrue(wp_style_is('magnific-popup.min.css'));
        
    }

}
