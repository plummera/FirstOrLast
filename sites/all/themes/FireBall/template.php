<?php

    // ADD REFERENCE TO EXTERNAL stylesheets
    function bartiksub_preprocess_html(&$variables) {
        drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
        drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
    }
