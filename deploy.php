<?php

namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'git@github.com:tlerbao/dep.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('137.184.14.98')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/www/wwwroot/dep');

// Hooks

after('deploy:failed', 'deploy:unlock');
