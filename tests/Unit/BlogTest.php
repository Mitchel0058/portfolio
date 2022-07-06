<?php

namespace Tests\Unit;

use Tests\TestCase;

class BlogTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_check_that_regular_link_gets_saved_correctly()
    {
        $this->post('/blog', ['title' => 'testing blog', 'paragraph' => 'testing paragraph',
            'img_link' => 'https://hz.nl/assets/svg/hz-logo.svg'])
            ->assertSessionHasNoErrors()->assertStatus(302);

        $this->assertDatabaseHas('blogs', ['title' => 'testing blog', 'paragraph' => 'testing paragraph',
            'img_link' => 'https://hz.nl/assets/svg/hz-logo.svg']);
    }

    public function test_non_img_link_url_gets_converted_to_null()
    {
        // post a blog with a link that isn't an img link
        $this->post('/blog', ['title' => 'google blog', 'paragraph' => 'google paragraph',
            'img_link' => 'https://www.google.com'])->assertStatus(302);

        // the img_link should be null now, but should be uploaded correctly
        $this->assertDatabaseHas('blogs', ['title' => 'google blog', 'paragraph' => 'google paragraph',
            'img_link' => null]);

        // a second time with a different url to confirm it
        $this->post('/blog', ['title' => 'hz blog', 'paragraph' => 'hz paragraph',
            'img_link' => 'https://hz.nl'])->assertStatus(302);

        $this->assertDatabaseHas('blogs', ['title' => 'hz blog', 'paragraph' => 'hz paragraph',
            'img_link' => null]);
    }
}
