# ownCloud: Wordpress

[![](https://images.microbadger.com/badges/image/owncloud/wordpress.svg)](https://microbadger.com/images/owncloud/wordpress "Get your own image badge on microbadger.com")

This is our basic ownCloud webserver image that shares the functionality for the ownCloud community and enterprise edition, it is based on our [Ubuntu container](https://registry.hub.docker.com/u/owncloud/ubuntu/).


## Usage

```bash
docker run -ti \
  --name wordpress \
  owncloud/wordpress:latest
```


## Build locally

The available versions should be already pushed to the Docker Hub, but in case you want to try a change locally you can always execute the following command to get this image built locally:

```
IMAGE_NAME=owncloud/wordpress ./hooks/build
```


## Versions

* [latest](https://github.com/owncloud-docker/wordpress/tree/master) available as ```owncloud/wordpress:latest``` at [Docker Hub](https://registry.hub.docker.com/u/owncloud/wordpress/)


## Volumes

* /var/www/wordpress
* /mnt/data


## Ports

* 80
* 443


## Available environment variables

```
WORDPRESS_DOMAIN ${HOSTNAME}
WORDPRESS_DEBUG false
WORDPRESS_DB_HOST mariadb
WORDPRESS_DB_NAME wordpress
WORDPRESS_DB_USERNAME
WORDPRESS_DB_PASSWORD
WORDPRESS_DB_TIMEOUT 180
WORDPRESS_DB_FAIL true
WORDPRESS_MAIL_HOST mail.owncloud.com
WORDPRESS_MAIL_PORT
WORDPRESS_MAIL_USERNAME
WORDPRESS_MAIL_PASSWORD
WORDPRESS_MAIL_SECURITY ssl
WORDPRESS_MAIL_FROM norepy@owncloud.com
WORDPRESS_MAIL_NAME WordPress Admin
WORDPRESS_AUTH_KEY # Generated if not present
WORDPRESS_SECURE_AUTH_KEY # Generated if not present
WORDPRESS_LOGGED_IN_KEY # Generated if not present
WORDPRESS_NONCE_KEY # Generated if not present
WORDPRESS_AUTH_SALT # Generated if not present
WORDPRESS_SECURE_AUTH_SALT # Generated if not present
WORDPRESS_LOGGED_IN_SALT # Generated if not present
WORDPRESS_NONCE_SALT # Generated if not present
```


## Issues, Feedback and Ideas

Open an [Issue](https://github.com/owncloud-docker/wordpress/issues)


## Contributing

Fork -> Patch -> Push -> Pull Request


## Authors

* [Thomas Boerger](https://github.com/tboerger)
* [Sarah Kriesch](https://github.com/skriesch)


## License

MIT


## Copyright

```
Copyright (c) 2017 Thomas Boerger <tboerger@owncloud.com>
```
