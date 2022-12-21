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

            "category" => "cemeterySearch",

            "icon" => "block-default",

            "keywords" => ["Hero Section", ""],
        ]);
    }
}

