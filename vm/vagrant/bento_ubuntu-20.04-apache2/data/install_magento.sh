cd /var/www/html
sudo composer create-project --repository=https://repo.magento.com/ magento/project-community-edition magento
cd /var/www/html/magento
sudo find var generated vendor pub/static pub/media app/etc -type f -exec chmod g+w {} +
sudo find var generated vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} +

sudo /var/www/html/magento/bin/magento setup:install \
--base-url=http://runners-world/magento \
--db-host=localhost --db-name=magento --db-user=magento --db-password=magento \
--backend-frontname=admin \
--admin-firstname=admin --admin-lastname=admin --admin-email=hay.knock@gmail.com --admin-user=admin --admin-password=admin123 \
--language=en_US --currency=USD --timezone=America/Chicago --use-rewrites=1

sudo /var/www/html/magento/bin/magento module:disable Magento_TwoFactorAuth
sudo /var/www/html/magento/bin/magento cache:flush 


sudo chown -R www-data:www-data /var/www/html/
sudo chmod -R 755 /var/www/html/
sudo chown -R :www-data /var/www/
sudo chmod u+x /var/www/html/magento/bin/magento

sudo systemctl restart php7.4-fpm
sudo systemctl enable php7.4-fpm

sudo systemctl restart apache2
sudo systemctl enable apache2
