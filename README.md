# XPRIZE-deep_dive

Created: December 5, 2022 4:42 PM

# Announcement
- [notion](https://www.notion.so/plan-van-aanpak-238ef291a6b34060a8ce0c22e93d5e78)
- Vanwege`.htacesse`, kan het html bestand niet worden geopend in localhost, je kunt de `App/.htaccess` code **verwijderen** of **uitcommentariëren**, verander code terug voor het uploaden!

# Installation

1. Clone repository to `htdcos`, The folder must be under `htdocs` to run, path: **`XAMPP/xamppfiles/htdocs/XPRIZE-deep_dive`**

    ```bash
    $ git clone git@github.com:MartijnKerpentier/XPRIZE-deep_dive.git
    ```

2. Open **test.sql** and copy the code into the console of the database.
3. Open the **XPRIZE-deep_dive** folder with the command line:

    ```bash
    $ cd App
    $ composer i
    $ composer dump-autoload
    ```

4. The site is up and running!