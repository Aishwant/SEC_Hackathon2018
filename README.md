# SEC_Hackathon2018

### connecting to your EC2 server
<your_ubuntu_server>the server for now is ubuntu@ec2-18-188-103-173.us-east-2.compute.amazonaws.com
 1. ssh -i <your.pem-file> <your_ubuntu_server>
 
 ### to install apache server
 sudo su
apt-get update
apt-get upgrade -y
apt-get dist-upgrade -y
apt-get autoremove -y
apt-get install apache2 php7.0 php7.0-cli php7.0-fpm php7.0-gd php-ssh2 libapache2-mod-php7.0 php7.0-mcrypt mysql-server php7.0-mysql git unzip zip postfix php7.0-curl mailutils php7.0-json phpmyadmin -y
php5enmod mcrypt

nano /etc/apache2/sites-enabled/000-default.conf
--ADD LINE-- 
Include /etc/phpmyadmin/apache.conf

service apache2 restart

### to connect myphpadmin to RDS
nano /etc/phpmyadmin/config.inc.php
--ADD LINES BELOW THE PMA CONFIG AREA AND FILL IN DETAILS--
$i++;
$cfg['Servers'][$i]['host']          = '__FILL_IN_DETAILS__';
$cfg['Servers'][$i]['port']          = '3306';
$cfg['Servers'][$i]['socket']        = '';
$cfg['Servers'][$i]['connect_type']  = 'tcp';
$cfg['Servers'][$i]['extension']     = 'mysql';
$cfg['Servers'][$i]['compress']      = FALSE;
$cfg['Servers'][$i]['auth_type']     = 'config';
$cfg['Servers'][$i]['user']          = '__FILL_IN_DETAILS__';
$cfg['Servers'][$i]['password']      = '__FILL_IN_DETAILS__';\


