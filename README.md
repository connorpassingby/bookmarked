# bookmarked
Bookmarked is a user-based platform for book reviews across all genres.

## how to run

### windows w/ xampp

1. clone repo to 

    ```
    D:/Programming/xampp/htdocs
    ```

2. open your httpd-vhosts.conf file. location is in:
        
    ```
    D:/Programming/xampp/apache/conf/extra
    ```


3. add the ff. codeblock to the bottom:

    ```
    <VirtualHost *:80>
        DocumentRoot "D:/Programming/xampp/htdocs"
        ServerName localhost
    </VirtualHost>

    <VirtualHost *:80>
        DocumentRoot "D:/Programming/xampp/htdocs/bookmarked/Sites/test/public"
        ServerName bookmarked.test
    </VirtualHost>
    ```

    dont forget to replace the document root to the path of your xampp folder