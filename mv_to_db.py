from __future__ import print_function
from datetime import date, datetime, timedelta
import mysql.connector

cnx = mysql.connector.connect(user='root', password='', host='127.0.0.1', database='yoboukale')
                              
ip = '192.168.1.10'
ip_modif = '192_168_1_10_'

with open('192_168_1_10_.xml', 'r') as myfile:
    report=myfile.read()

cursor = cnx.cursor()

now = datetime.now().date()

filename = str(ip_modif)+str(now)

add_scan = ("INSERT INTO reports "
               "(ip, report_file_name, report, admin, status, upload_date, update_date) "
               "VALUES (%s, %s, %s, %s, %s, %s, %s)")

data_scan = (ip, filename, report, 'admin', '1', now, now)

# Insert new employee
cursor.execute(add_scan, data_scan)
emp_no = cursor.lastrowid

# Make sure data is committed to the database
cnx.commit()

cursor.close()
cnx.close()
cnx.close()
