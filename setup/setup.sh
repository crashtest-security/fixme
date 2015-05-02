#!/bin/bash

echo "Setting up database"
mysql-ctl cli < create_db.sql 

echo "Finished..."