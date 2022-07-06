<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogTest extends TestCase
{
    /**
     * Test if the blog gets validated correctly
     *
     * @return void
     */
    public function test_blog_gets_validated_correctly()
    {
        $this->post('/blog', ['title' => 'Blog', 'paragraph' => 'Blog paragraph',
            'img_link' => 'https://hz.nl/assets/svg/hz-logo.svg'])
            ->assertSessionHasNoErrors()->assertStatus(302);
    }

    /**
     * Test if it gets added to the database correctly
     *
     * @return void
     */
    public function test_blog_gets_added_correctly()
    {
        $this->assertDatabaseHas('blogs', ['title' => 'Blog', 'paragraph' => 'Blog paragraph',
            'img_link' => 'https://hz.nl/assets/svg/hz-logo.svg']);

    }

    public function test_blog_denies_validation_correctly()
    {
        // when all are wrong inputs
        $this->post('/blog', ['title' => 3, 'paragraph' => 45, 'img_link' => 'hi'])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts that img_link fails because 'hi' isn't a link
        $this->post('/blog', ['title' => 'title', 'paragraph' => 'paragraph', 'img_link' => 'hi'])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts title not string
        $this->post('/blog', ['title' => 3, 'paragraph' => 'paragraph'])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts paragraph not string
        $this->post('/blog', ['title' => 'title', 'paragraph' => -19])
            ->assertSessionHasErrors()->assertStatus(302);

        // asserts title too long
        $this->post('/blog', ['title' => '100+string:123456789012345678901234567890123456789012345678901234567890123
        456789012345678901234567890', 'paragraph' => 'paragraph'])->assertSessionHasErrors()->assertStatus(302);
    }

    public function test_blog_does_not_add_validation_failed_rows()
    {
        $this->assertDatabaseMissing('blogs', ['title' => null, 'paragraph' => null, 'img_link' => null]);
        $this->assertDatabaseMissing('blogs', ['title' => 3, 'paragraph' => 45, 'img_link' => 'hi']);
        $this->assertDatabaseMissing('blogs', ['title' => 'title', 'paragraph' => 'paragraph', 'img_link' => 'hi']);
        $this->assertDatabaseMissing('blogs', ['title' => 3, 'paragraph' => 'paragraph']);
        $this->assertDatabaseMissing('blogs', ['title' => 'title', 'paragraph' => -19]);
        $this->assertDatabaseMissing('blogs', ['title' => '100+string:12345678901234567890123456789012345678901234
        5678901234567890123456789012345678901234567890', 'paragraph' => 'paragraph']);
    }
}
