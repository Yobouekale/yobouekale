# -*- coding: utf-8 -*-
import os
import subprocess
import sys    
import pexpect
import pxssh
import getpass

fname = 'ipToScan.txt'
password = 'Veirae9nai#73'
hostname = '127.0.0.1'
username = 'sergeysozonov'
openVasUser = 'openvas'
openVasPass = 'bilshriagonf'

with open(fname) as f:
    ips = f.readlines()
  
#for ip in ips:
 #   print '[+] Scanning Ip: %s' %ip.replace('\n', '')
  #  send_command(child, "omp -u openvas -w bilshriagonf -h 127.0.0.1 -p 9390 -g")

try:                                                            
    s = pxssh.pxssh()
    s.login (hostname, username, password)
    s.sendline ('echo [+]  Connected')   # run a command
    s.prompt()
    s.logout()
except pxssh.ExceptionPxssh, e:
    print "pxssh failed on login."
    print str(e)
    

    
    
    
