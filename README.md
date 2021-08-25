# Router Project 

This is a router project without using any framework.This is not my project.
Because I'd learned this project on Creative Coder Myanmar facebook Page.
#crd Creative Coder Myanmar

## Installation

Firstly you need to create mysql database

```bash
  create database todo;
  use todo;
  create table tasks (id int primary key auto_increment,description varchar(120) not null,complete boolean not null);
  create table users (id int primary key auto_increment,names varchar(120) not null);
```
And than you also need to insert into table 
 
 ```bash
    insert into tasks (description,complete) values ("finish homework",0),("go to the store",1);
    insert into users (names) values ("[you can set any names]");
 ```

 Last Installation is "Composer" 
 
 -if your os system is Linux you can follow this instruction
 ```bash
php composer install 

sudo apt install php  (Installing PHP on Ubuntu/Debian and their derivatives.)
sudo dnf install php  (For Redhat family, CentOS, Fedora, etc)
curl -Ss https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer
composer  (complete)
```
    
## Lessons Learned

What did you learn while building this project?

-Answer is clear.

-If you really understand this project A to Z.I belive you,you can easily walk to laravel framework.


  
## dd function 

-I want it to be used that dd function.

-dd mean die_dump.

-You can easily find your error or data.

-I added this function in function.php file.

-So you don't need to extra create this function. 

```php function
function dd($dataName)
{
    echo "<pre>";
    die(var_dump($dataName));
}
```

  
## Run Locally

Clone the project

```bash
  git clone https://github.com/r1d3rzz/Router-Project.git
```

Go to the project directory

```bash
  cd Router-Project
```

Start the server in terminal

```bash
  php -S localhost:8000
```

  
## 🛠 Require Skills
HTML ,PHP , Mysql
