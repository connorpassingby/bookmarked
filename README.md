# bookmarked
Bookmarked is a user-based platform for book reviews across all genres.

## how to run

### windows w/ xampp

1. clone repo to 

    ```
    xampp/htdocs
    ```

2. open your httpd-vhosts.conf file. location is in:
        
    ```
    xampp/apache/conf/extra
    ```


3. add the ff. codeblock to the bottom:

    ```
    <VirtualHost *:80>
    DocumentRoot "D:/Programming/xampp/htdocs"
    ServerName localhost
    </VirtualHost>
    ```