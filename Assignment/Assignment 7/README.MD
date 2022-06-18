# PHP
  
  What Can PHP Do?
  * PHP can generate dynamic page content.
  * PHP can create, open, read, write, delete, and close files on the server.
  * PHP can collect form data.
  * PHP can send and receive cookies.
  * PHP can add, delete, modify data in your database.
  * PHP can be used to control user-access.
  * PHP can encrypt data.
  
  Syntax:-
    `<?php
        // PHP code goes here 
    ?>`
  
  echo :- The echo is used to display the output of parameters that are passed to it.
 
* we use xampp to execute php files

# What is XAMPP?
XAMPP is an abbreviation where X stands for Cross-Platform, A stands for Apache, M stands for MYSQL, and the Ps stand for PHP and Perl, respectively. It is an open-source package of web solutions that includes Apache distribution for many servers and command-line executables along with modules such as Apache server, MariaDB, PHP, and Perl.

XAMPP helps a local host or server to test its website and clients via computers and laptops before releasing it to the main server. It is a platform that furnishes a suitable environment to test and verify the working of projects based on Apache, Perl, MySQL database, and PHP through the system of the host itself. Among these technologies, Perl is a programming language used for web development, PHP is a backend scripting language, and MariaDB is the most vividly used database developed by MySQL. 


# Installation of Xampp in macOS
* I installed xampp from homebrew using 
`brew install XAMPP` <br>

# Creating a Virtual Hosts



* To shorten to a costom domain like http://hello.local or http://second.local we update our XAMPP Virtual Host File

 Find path to xaamp and open filename 
`/Applications/XAMPP/xamppfiles/etc/original/extra/httpd-vhosts.conf` and Change DocumentRoot and ServerName accordingly

 ```CONF
 <VirtualHost *:80>
    DocumentRoot "/Applications/XAMPP/htdocs/wt-lab-assignment/Assignment/Assignment-7/hello"
    ServerName hello.local
    
</VirtualHost>

<VirtualHost *:80>
    
    DocumentRoot "/Applications/XAMPP/htdocs/wt-lab-assignment/Assignment/Assignment-7/second"
    ServerName second.local
    
</VirtualHost>

 ```
# Update your Window Host File

 * Duplicate the host file in any seperate location.
            
 * Put the dummy alias you entered previously next to  and append ip `127.0.01` accordingly adding your next projects.
```
# localhost name resolution is handled within DNS itself.
# 127.0.0.1       localhost
# ::1             localhost

# resolve ip to localhost first
 127.0.0.1       localhost
 # And then the ip's to our costom domain
  127.0.0.1       hello.local
  127.0.0.1       second.local
```
* This should shorten the path.



  
  
