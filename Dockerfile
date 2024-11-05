# Utilisation de l'image PHP 8.2 avec Apache
FROM php:8.2.0-apache AS base

# Définition du répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers de l'application dans le conteneur
COPY . /var/www/html

# Activation de Mod Rewrite pour Apache
RUN a2enmod rewrite

# Installation des bibliothèques Linux nécessaires
RUN apt-get update -y && \
    apt-get install -y --no-install-recommends \
        libicu-dev \
        libmariadb-dev \
        unzip zip \
        zlib1g-dev \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
    && rm -rf /var/lib/apt/lists/*

# Installation de Composer (multi-stage build pour limiter la taille de l'image finale)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuration d'Apache
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# Installation et configuration des extensions PHP nécessaires
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gettext intl pdo_mysql gd

# Exposition du port par défaut pour Apache
EXPOSE 80

# Lancement d'Apache en mode foreground
CMD ["apache2-foreground"]
