# web-mysql
## configuration in server
- ```sudo apt update```
- ```sudo apt install apache2 php php-mysql mysql-client -y```
- ```sudo systemctl enable apache2```
- ```sudo systemctl start apache2```
- ```mysql -h <endpoint database> -u <username> -p```
- ```cd /var/www/html/<taruh file>```
- ```systemctl restart apache2```
---
## create database 
```sql
CREATE DATABASE <nama database>;
USE <nama database>;

CREATE TABLE <nama table> (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
SELECT * FROM <nama table>;
exit;
```
---
