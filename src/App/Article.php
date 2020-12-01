<?php

namespace App;

class Article
{

    public $title;

    public function getSlug()
    {
       $slug = $this->title;

       //$slug = str_replace(' ','_', $slug);

        /**
         * \s will match any whitespace character including spaces, newlines and tabs
         */
        $slug = preg_replace('/\s+/','_', $slug);

        /**
         * \s will match any whitespace character including spaces, newlines and tabs
         */
        $slug = preg_replace('/[^\w]+/','', $slug);

        /**
         * trim function to remove any leading or trailing underscore characters
         */
       $slug = trim($slug, "_");

       return $slug;
    }
}
