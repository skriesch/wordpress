FROM owncloud/ubuntu:latest
MAINTAINER ownCloud DevOps <devops@owncloud.com>

VOLUME ["/var/www/wordpress", "/mnt/data"]

EXPOSE 80
EXPOSE 443

ENTRYPOINT ["/usr/local/bin/entrypoint"]
CMD ["/usr/local/bin/wordpress"]

RUN apt-get update -y && \
  apt-get install -y \
    apache2 \
    libapache2-mod-php \
    php-gd \
    php-mysql \
    php-curl \
    php-intl \
    php-mcrypt \
    php-imagick \
    php-zip \
    php-xml \
    php-mbstring \
    php-soap \
    php-apcu \
    mysql-client \
    gettext-base && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /etc/apache2/sites-available/default-ssl.conf && \
  a2enmod rewrite headers env dir mime ssl expires && \
  mkdir -p /var/www/wordpress /mnt/data/files /mnt/data/config /mnt/data/certs && \
  chown -R www-data:www-data /var/www/wordpress /mnt/data && \
  chsh -s /bin/bash www-data

ENV WORDPRESS_VERSION 4.7.1
ENV WORDPRESS_SHA1 8e56ba56c10a3f245c616b13e46bd996f63793d6

RUN curl -o wordpress.tar.gz -fSL "https://wordpress.org/wordpress-${WORDPRESS_VERSION}.tar.gz" && \
  echo "$WORDPRESS_SHA1 *wordpress.tar.gz" | sha1sum -c - && \
  tar -xzf wordpress.tar.gz -C /usr/src/ && \
  rm wordpress.tar.gz && \
  chown -R www-data:www-data /usr/src/wordpress

COPY rootfs /

ARG VERSION
ARG BUILD_DATE
ARG VCS_REF

LABEL org.label-schema.version=$VERSION
LABEL org.label-schema.build-date=$BUILD_DATE
LABEL org.label-schema.vcs-ref=$VCS_REF
LABEL org.label-schema.vcs-url="https://github.com/owncloud-docker/wordpress.git"
LABEL org.label-schema.name="ownCloud Wordpress"
LABEL org.label-schema.vendor="ownCloud GmbH"
LABEL org.label-schema.schema-version="1.0"
