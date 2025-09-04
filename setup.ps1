# setup.ps1
# ttl118
# Laravel setup automation script

Write-Output "=== Setting up environment file ==="
if (-Not (Test-Path ".env")) {
    Copy-Item ".env.example" ".env" -Force
    Write-Output ".env file created."
} else {
    Write-Output ".env already exists, skipping..."
}

Write-Output "=== Clearing composer cache ==="
composer clear-cache

Write-Output "=== Installing composer packages ==="
composer install --no-interaction --prefer-dist

Write-Output "=== Installing npm packages ==="
npm install

Write-Output "=== Installing DaisyUI ==="
npm install -D daisyui@latest

Write-Output "=== Clearing Laravel cache ==="
php artisan optimize:clear

Write-Output "=== Generating application key ==="
php artisan key:generate --force

# Optional: Create DB if not exists (needs MySQL root access)
# Write-Output "=== Creating MySQL database ==="
# mysql -u root -e "CREATE DATABASE IF NOT EXISTS aap_ams_laravel CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

Write-Output "=== Running migrations ==="
php artisan migrate --force

Write-Output "=== Setup completed. Ready to serve 🚀 ==="
