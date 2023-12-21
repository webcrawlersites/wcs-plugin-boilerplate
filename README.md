
# WCS Plugin Boilerplate

A WordPress plugin boilerplate built from the WordPress Plugin Boilerplate Generator. It includes autoloading, namespaces and a well-structured OOP approach to plugin development.

## Set Up

You can use the `npx` command to run the generator.
To run the generator, run:

```terminal
  npx wcs-pb-generator make-plugin <plugin-folder-name>
```

Here is the values it will ask you for replacement:

| Type | Type     | Description                |
| :-------- | :------- | :------------------------- |
| Plugin Name | `WCS Plugin Boilerplate` | Replace with your plugin's name |
| Plugin Slug | `wcs-plugin-boilerplate` | Replace with your plugin's slug |
| Plugin Namespace | `Plugin_Namespace` | Replace with your main plugin's namespace |
| Plugin Version | `WCSPB_VERSION` | Replace with your plugin's version constant |
| Plugin Path | `WCSPB_PATH` | Replace with your plugin's path constant |
| Plugin Author Name | `Plugin Author` | Replace with your plugin author's name |
| Plugin Author Email | `authorEmail` | Replace with your plugin author's email |

## Composer Set Up

Once all the placeholders have been properly set, go into `composer.json` and change the name to match your project's `VenderName\PluginName`. *Usually* you will only have to change the vendor name as the plugin name will be set to your plugin slug.

Next, edit the content in the `authors` section to match your information.

Once everything is set, run `composer install` to create the vendor folder with the autoloader files.
## Authors

- [@webcrawlersites](https://github.com/webcrawlersites)