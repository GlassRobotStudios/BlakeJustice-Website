BlakeJustice-Website
====================

The website for the BlakeJustice game

It may be benificial to set the username and group to www-data and set appropriate permissions.
  
  - chown -R www-data:www-data dir/ (changes the owner of all files and directories)
  - find /home/user/demo -type f -exec chmod 644 {} \;
  - find /var/www/html -type d -exec chmod 755 {} \;
