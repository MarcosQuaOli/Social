<?php

// Timezone
date_default_timezone_set('America/Sao_Paulo');

// Settings
$settings = [];

// Path settings
$settings['root'] = dirname(__DIR__);

// Error Handling Middleware settings
$settings['error'] = function() {
    return [
      'displayErrorDetails' => true,
      'logErrors' => true,
      'logErrorDetails' => true
    ];
};

return $settings;

?>