<?php

return [
    // Configuration for the Jenkins integration
    'jenkins' => [
        'base_url' => 'http://13.250.16.126:8080',
        'username' => 'Faruk',
        'token'    => 'Umarfaruk01',
    ],

    // Configuration for artifact storage
    'artifacts' => [
        'storage_path' => '/var/www/artifacts', // Path where build artifacts are stored
    ],

    // Configuration for SonarQube integration
    'sonarqube' => [
        'host'     => 'http://sonarqube-server-url',
        'login'    => 'sonarqube-login-token',
        'project_key' => 'php_project_key',
    ],

    // Custom PHP Service for CI/CD process
    'ci_service' => [
        'build_directory' => '/var/www/builds', // Directory where builds are processed
        'environment'     => 'staging',        // Default environment (staging/production)
    ],

    // Database configuration (if needed)
    'database' => [
        'host'     => '172.31.42.220',
        'username' => 'homestead',
        'password' => 'Password.1',
        
    ],

    // Add any other custom services as required
];

