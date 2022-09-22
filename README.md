# bookmarked
Bookmarked is a user-based platform for book reviews across all genres.

## how to run

### windows w/ xampp

note: dont forget to replace all paths to the location of xampp in your machine
<details>
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

4. open your system's hosts file on vscode/any text editor. file is located in:

    ```
    C:\Windows\System32\drivers\etc\hosts
    ```

5. at the very bottom, add the following: 

    ```
    127.0.0.1	localhost
    127.0.0.1	bookmarked.test
    ```

6. open xampp control panel, start apache and mysql

7. go to bookmarked.test on your browser

</details>