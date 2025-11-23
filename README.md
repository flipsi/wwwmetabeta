Flipsi's personal website
=========================

This is the source code for my personal website you can find under
[philippmoers.de](https://philippmoers.de/).



## Development

Edit source in `src`.

Build with `./build.sh`. This will generate `target`.

Host target files in a local webserver with a docker container: `.run.sh`.

To deploy to the live system, copy target directory webserver via `./upload.sh`.

### Localization

Translations for multiple languages are managed with the [GNU gettext system](https://www.gnu.org/software/gettext/).

Translations files are generated, this is done as a build step (see above).

Note that translations may be cached, so you may have to restart the webserver.

