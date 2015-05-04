#!/usr/bin/env bash
echo '### Create Virtualhost ###'

block="<VirtualHost *:80>
        ServerName wordpress.local
        DocumentRoot /vagrant

       <Directory /vagrant>
          AllowOverride all
          Order allow,deny
          Allow from all
          Require all granted
          <IfModule mod_rewrite.c>
          Options -MultiViews
          RewriteEngine On
          RewriteCond %{REQUEST_FILENAME} !-f
         RewriteRule ^ index.php [L]
       </IfModule>
</Directory>
</VirtualHost>
"

echo "$block" > "/etc/apache2/sites-available/wordpress.local.conf"
ln -fs "/etc/apache2/sites-available/wordpress.local.conf" "/etc/apache2/sites-enabled/wordpress.local.conf"
service apache2 restart