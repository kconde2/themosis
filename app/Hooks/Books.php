<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Section;
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;
use Themosis\Support\Facades\PostType;

class Books extends Hookable
{
    public function register()
    {
        // Let's create our custom post type
        $books = PostType::make('books', 'Books', 'Book')->set();

        // Attach our metabox to our custom post type

        Metabox::make('properties', 'books')
            ->add(new Section('general', 'General', [
                Field::text('author'),
                Field::text('publisher')
            ]))
            ->add(new Section('details', 'Details', [
                Field::text('isbn'),
                Field::media('cover')
            ]))
            ->set();
    }
}
