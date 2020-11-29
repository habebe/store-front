sudo apt-get install -y mariadb-server mariadb-client
sudo systemctl stop mariadb.service
sudo systemctl start mariadb.service
sudo systemctl enable mariadb.service

sudo mysql_secure_installation
sudo mysql -u root -p < /instance_data/create_magento_database.sql 
cd /var/www/html
sudo composer create-project --repository=https://repo.magento.com/ magento/project-community-edition magento
cd /var/www/html/magento
sudo find var generated vendor pub/static pub/media app/etc -type f -exec chmod g+w {} +
sudo find var generated vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} +

sudo /var/www/html/magento/bin/magento setup:install \
--base-url=http://192.168.33.10 \
--db-host=localhost --db-name=magento --db-user=magento --db-password=magento \
--backend-frontname=admin \
--admin-firstname=admin --admin-lastname=admin --admin-email=hay.knock@gmail.com --admin-user=admin --admin-password=admin123 \
--language=en_US --currency=USD --timezone=America/Chicago --use-rewrites=1

sudo chown -R www-data:www-data /var/www/html/magento/
sudo chmod -R 755 /var/www/html/magento/
sudo chown -R :www-data .
sudo chmod u+x bin/magento

sudo ./bin/magento deploy:mode:set developer
sudo ./bin/magento sampledata:deploy

sudo cp /instance_data/magento.nginx  /etc/nginx/sites-available/magento
sudo ln -snf /etc/nginx/sites-available/magento /etc/nginx/sites-enabled/
sudo systemctl restart nginx.service
