update mysql.user set plugin='mysql_native_password' where user='root';
CREATE DATABASE IF NOT EXISTS magento;
CREATE USER IF NOT EXISTS 'magento'@'localhost' IDENTIFIED BY 'magento';
GRANT ALL ON magento.* TO 'magento'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;

select user,host from mysql.user;
