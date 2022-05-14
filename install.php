<?php

run(
    'Installing Composer dependencies...',
    fn () => system('composer install'),
);

run(
    'Installing NPM dependencies...',
    fn () => system('npm install'),
);

run(
    'Copying .env file...',
    fn () => system('cp .env.example .env'),
);

run(
    'Generating Laravel application key...',
    fn () => system('php artisan key:generate'),
);

run(str_repeat('*', 32));
run('✨ Your VILT stack project is ready.');
run(str_repeat('*', 32));

function run(string $message, callable $callback = null) : void {
    echo $message . PHP_EOL;
    call_user_func($callback ?? fn () => null);
}
