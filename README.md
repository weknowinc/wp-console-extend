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
