cd /home/sergeysozonov/Desktop/openVas/scan
ipscan -sq -f:range 192.168.1.1 192.168.1.10 -o scannedIp.txt
grep -E -o "([0-9]{1,3}[\.]){3}[0-9]{1,3}" scannedIp.txt > ipToScan.txt
cd /opt/lampp/htdocs/yobouekale
python lunchScan.py
python mv_to_db.py
