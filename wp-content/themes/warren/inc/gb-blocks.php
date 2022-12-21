<?php

add_action("acf/init", "exponentialGrowth_acf_block");

function exponentialGrowth_acf_block() {

    if (function_exists("exponentialGrowth_acf_block")) {

        // Hero Section

        acf_register_block_type([

            "name" => __("Hero Section"),

            "title" => __("Hero Section"),

            "description" => __("Hero Section on home page"),

            "render_template" => "inc/blocks/hero-sec.php",

            "category" => "warren",

            "icon" => "block-default",

            "keywords" => ["Hero Section", ""],
        ]);


        // About Section

        acf_register_block_type([

            "name" => __("About Section"),

            "title" => __("About Section"),

            "description" => __("About Section on home page"),

            "render_template" => "inc/blocks/about.php",

            "category" => "warren",

            "icon" => "block-default",

            "keywords" => ["About Section", ""],
        ]);

        // Article one

        acf_register_block_type([

            "name" => __("Article One"),

            "title" => __("Article One"),

            "description" => __("Article One on home page"),

            "render_template" => "inc/blocks/featured-articles.php",

            "category" => "warren",

            "icon" => "block-default",

            "keywords" => ["Article One", ""],
        ]);

        // Latest Articles

        acf_register_block_type([

            "name" => __("Latest Articles"),

            "title" => __("Latest Articles"),

            "description" => __("Latest Articles on home page"),

            "render_template" => "inc/blocks/latest-articles.php",

            "category" => "warren",

            "icon" => "block-default",

            "keywords" => ["Latest Articles", ""],
        ]);

        // FAQ's

        acf_register_block_type([

            "name" => __("FAQ"),

            "title" => __("FAQ"),

            "description" => __("FAQ on home page"),

            "render_template" => "inc/blocks/faq.php",

            "category" => "warren",

            "icon" => "block-default",

            "keywords" => ["FAQ", ""],
        ]);
    }
}

