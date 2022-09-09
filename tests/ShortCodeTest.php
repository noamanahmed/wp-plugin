<?php
/**
 * Class SampleTest
 *
 * @package Noaman
 */

/**
 * Sample test case.
 */
class ShortCodeTest extends WP_UnitTestCase
{

    /**
     * A single example test.
     */
    public function test_images_search_shortcode_exists()
    {
        
        $this->assertTrue(shortcode_exists('images_search'));
    }

    public function test_images_search_shortcode_doesnot_throw_error()
    {
        $content = do_shortcode('[images_search]');        
        $this->assertTrue(true);
    }

}
