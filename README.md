# avaturkey-server

![alt text](http://avaturkey.com/g1_2.png)

Too many files will be accessible.

# Required Tools 

- Python 3.6 > 3.x and pip
- Redis 2.4.5-win64 / redis stable linux
- Mysql
- Php 5.x > (PDO supported) 
- CRON
- Node.js

# CRON SETUP

Add to job for the server to work properly

- 2 min
`//example.com/cron-konfor`
- 15 sec
`//example.com/cron-mod`
- 30 sec
`//example.com/vendor`
- 15 min
`//example.com/guncel-siralama.php`

# UPDATE URL (to get real game updates)
You can acsess all pnz files.
- `https://static-cdn.avaturkey.com/`

## 2 way update your server if you see this error 

![alt text](http://avaturkey.com/gt_1.png)
    
  - if you see this error update from 2. update file "yontem_2_rus.py" its just for russian servers!
  
  `python3 yontem_2_rus.py`
   

# Python files 

- only python files that are up to date will be shared, and old files will remain the same as yours.


# BLOB HASH PNZ 

- Change in php files links and implement your game 'veri' varaible!
- ADD THİS CODE `<iframe id="lazy_loader_1" style="display:none;" src="http://example.com/vendor"></iframe>`
- But you need 2 .htaccess file , 1. public_html , 2. blob folder




