#!/bin/bash

echo "Setting up database"
mysql --user=che --password=che < create_db.sql

echo "Finished..."