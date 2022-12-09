# XPRIZE-deep_dive

Created: December 5, 2022 4:42 PM

# Announcement
- [notion](https://www.notion.so/plan-van-aanpak-238ef291a6b34060a8ce0c22e93d5e78)
- Vanwege`.htacesse`, kan het html bestand niet worden geopend in localhost, je kunt de `App/.htaccess` code **verwijderen** of **uitcommentariëren**, verander code terug voor het uploaden!
- Vanwege de routes van het framework verwacht het project dat je bestanden in de root van je localhost
directory staan. Zet het bestand dus of direct in je localhost directory, of pas de documentroot aan in de configuratie van je Apache.

# Installation

1. Clone repository to `htdcos`, The folder must be under `htdocs` to run, path: **`XAMPP/xamppfiles/htdocs/XPRIZE-deep_dive`**

    ```bash
    $ git clone git@github.com:MartijnKerpentier/XPRIZE-deep_dive.git
    ```

2. Open **phpmyadmin**, first create a database, which can be named "test". Then click on the import option -> select file, click **test.sql** and open it, finally at the bottom of the page click on import and the database is built!
3. Please note that the default database location for this project is **localhost**, if you want to customize it, please go to `App/resources/Services/Database.php` to change the parameters.
4. Open the **XPRIZE-deep_dive** folder with the command line:

    ```bash
    $ cd App
    $ composer i
    $ composer dump-autoload
    ```

5. The site is up and running!
