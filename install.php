<?php

run(
    'Installing Composer dependencies...',
    'composer install',
);

run(
    'Installing NPM dependencies...',
    'npm install',
);

run(
    'Copying .env file...',
    (PHP_OS_FAMILY == 'Windows' ? 'copy' : 'cp') . ' .env.example .env',
);

run(
    'Generating Laravel application key...',
    'php artisan key:generate'
);

run(str_repeat('*', 32));
run('✨ Your VILT stack project is ready.');
run(str_repeat('*', 32));

function run(string $message, string $command = null) : void {
    echo $message . PHP_EOL;
    if ($command) exec($command);
}
