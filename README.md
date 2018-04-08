# SEC_Hackathon2018

### connecting to your EC2 server
<your_ubuntu_server>the server for now is ubuntu@ec2-18-222-14-83.us-east-2.compute.amazonaws.com
<your.pem-file> olemiss.pem
 1. ssh -i "<your.pem-file>" <your_ubuntu_server>
 
 ### to install apache server
 sudo su <br />
apt-get update <br />
apt-get upgrade -y <br />
apt-get dist-upgrade -y <br />
apt-get autoremove -y <br />
apt-get install apache2 php7.0 php7.0-cli php7.0-fpm php7.0-gd php-ssh2 libapache2-mod-php7.0 php7.0-mcrypt mysql-server  php7.0-mysql git unzip zip postfix php7.0-curl mailutils php7.0-json phpmyadmin -y <br />
php5enmod mcrypt <br />
<br />
nano /etc/apache2/sites-enabled/000-default.conf <br />
--ADD LINE-- <br />
Include /etc/phpmyadmin/apache.conf <br />
<br />
service apache2 restart <br />
<br />
### to connect myphpadmin to RDS
nano /etc/phpmyadmin/config.inc.php <br />
(just before authentication)
--ADD LINES BELOW THE PMA CONFIG AREA AND FILL IN DETAILS-- <br />
$i++; <br />
$cfg['Servers'][$i]['host']          = '__FILL_IN_DETAILS__'; <br />
$cfg['Servers'][$i]['port']          = '3306'; <br />
$cfg['Servers'][$i]['socket']        = ''; <br />
$cfg['Servers'][$i]['connect_type']  = 'tcp'; <br />
$cfg['Servers'][$i]['extension']     = 'mysql'; <br />
$cfg['Servers'][$i]['compress']      = FALSE; <br />
$cfg['Servers'][$i]['auth_type']     = 'config'; <br />
$cfg['Servers'][$i]['user']          = '__FILL_IN_DETAILS__'; <br />
$cfg['Servers'][$i]['password']      = '__FILL_IN_DETAILS__';\ <br />

### Helpful for connecting your ubuntu to Apache Server
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04
