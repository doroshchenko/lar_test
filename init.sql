CREATE DATABASE IF NOT EXISTS test;
USE test;

update user set host='%' where host='localhost';
