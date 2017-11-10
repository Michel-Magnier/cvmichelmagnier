<?php

// Start the session
session_start();

// Données de configuration
$config = array(
        'DB_HOST' => 'wf3.progweb.fr',
        'DB_USER' => 'michelm',
        'DB_PASSWORD' => 'xxx',
        'DB_DATABASE' => 'michelm_sql0',
        'EMAIL_HOST' => 'smtp.gmail.com',
        'EMAIL_USERNAME' => 'michel.r.magnier',
        'EMAIL_PASSWORD' => 'xxx'
);
// Inclusion de fichiers
require_once __DIR__.'/db.php';
require_once __DIR__.'/functions.php';

// Inclusion de composer
require_once __DIR__.'/../vendor/autoload.php';

// Social Networks
// Create a Page instance with the url information
$socialLinksPage = new SocialLinks\Page([
    'url' => 'http://cv-michel-magnier.lu',
    'title' => 'CV Michel Magnier',
    'text' => 'CV Michel Magnier, Full Stack Developer',
    'image' => '',
    'icon' => '',
    'twitterUser' => '@twitterUser'
]);
?>
