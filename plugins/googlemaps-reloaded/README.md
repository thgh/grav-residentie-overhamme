# Temp

## About

The **Google Maps** plugin provides the Google Maps Javascript API as shortcode.

## Installation

Typically a plugin should be installed via [GPM](http://learn.getgrav.org/advanced/grav-gpm) (Grav Package Manager):

```bash
# Not available
bin/gpm install googlemaps-reloaded
```

Alternatively it can be installed via the [Admin Plugin](http://learn.getgrav.org/admin-panel/plugins)

## Configuration

There is currently only one main plugin option for **Google Maps** and that is to set a [Google API Key](https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key).

```
enabled: true
google_api_key:
```

## Quick Example

```
[googlemaps-reloaded width='100%' lat=44.540 lng=-78.546 zoom=13 scrollwheel=true panControl=true iconurl='/absolute/path/to/marker/icon.png']
***My Place***
This is my place
[/googlemaps-reloaded]
```

## Available Parameters

* `width` - map width in px or % | default 600px
* `height` - map height in px or % | default 400px
* `lat` - center of map and marker latitude | default 44.540
* `lng` - center of map and marker longitude | default -78.546
* `zoom` - map zoom | default 8
* `scrollwheel` - if false, disables scrollwheel zooming on the map | default true
* `draggable` - if false, prevents the map from being dragged | default true
* `panControl` - the enabled/disabled state of the pan control. | default true
* `iconurl` - absolute path to a custom marker icon

the optional wrapped content is the **infowindow** content
