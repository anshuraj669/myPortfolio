#!/usr/bin/env bash
# Renders the PHP portfolio into a static index.html for GitHub Pages.
# Usage: ./build.sh
set -e
cd "$(dirname "$0")"
php index.php > index.html
echo "Built index.html ($(wc -l < index.html) lines)"
