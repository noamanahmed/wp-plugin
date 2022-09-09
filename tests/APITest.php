<?php
/**
 * Class SampleTest
 *
 * @package Noaman
 */

/**
 * Sample test case.
 */
class APITest extends WP_UnitTestCase
{

    /**
     * A single example test.
     */
    public function test_api_can_fetch_images()
    {
        $response = get_images_from_api([]);

        $this->assertIsArray($response);
        $this->assertCount(3, $response);
        
        $single_picture= $response[0];
        $this->assertArrayHasKey('url', $single_picture);
        $this->assertArrayHasKey('height', $single_picture);
        $this->assertArrayHasKey('width', $single_picture);
    }

    public function test_api_can_fetch_multiple_images()
    {
        $response = get_images_from_api(['limit' => 10]);

        $this->assertIsArray($response);
        $this->assertCount(10, $response);
        
        $single_picture= $response[0];
        $this->assertArrayHasKey('url', $single_picture);
        $this->assertArrayHasKey('height', $single_picture);
        $this->assertArrayHasKey('width', $single_picture);
    }
}
