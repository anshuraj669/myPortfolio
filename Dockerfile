# PHP portfolio — served by PHP's built-in web server.
# index.php is fully self-contained (no DB, no Composer), so a plain PHP
# CLI image is all we need.
FROM php:8.2-cli

WORKDIR /var/www/html

# App source (see .dockerignore for what's excluded)
COPY . .

# Render injects $PORT and routes traffic to it; default 10000 for local runs.
ENV PORT=10000
EXPOSE 10000

# Built-in server resolves "/" to index.php first, then index.html, and serves
# assets/ (css, js, images) and Resume.pdf directly.
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t /var/www/html"]
