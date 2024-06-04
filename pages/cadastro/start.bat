


@echo off
start php -S localhost:5500
browser-sync start --proxy "localhost:5500" --files "*.php, *.css"
