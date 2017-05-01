# WP Console extend

Instructions to extend WP Console adding commands globally.

### Create `~/.wp-console/` directory
Execute the `init` command and select `/Users/YOUR_USER_NAME/.wp-console/` when asked for destination.
```
wp-console init
```

### Install this project:
```
cd ~/.wp-console/

composer create-project \
wp/console-extend:dev-master extend \
--no-dev \
--no-interaction
```

### Update this project
```
cd ~/.wp-console/extend

composer update --no-dev
```
# Supporting Organizations

[![weKnow](https://www.drupal.org/files/weKnow-logo_5.png)](http://weknowinc.com)

[![Anexus](https://www.drupal.org/files/anexus-logo.png)](http://www.anexusit.com/)

> WordPress is a registered trademark of [WordPress Foundation](http://wordpressfoundation.org/2010/trademark/).
