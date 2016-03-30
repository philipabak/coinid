scp -r app/Http/routes.php cidtest2:/var/www/html/test.coinid.com/app/Http/.
scp -r app/Http/Controllers/* cidtest2:/var/www/html/test.coinid.com/app/Http/Controllers/.
scp -r resources/views/* cidtest2:/var/www/html/test.coinid.com/resources/views/.
scp -r public/assets/css/* cidtest2:/var/www/html/test.coinid.com/public/assets/css/.
scp -r app/Services cidtest2:/var/www/html/test.coinid.com/app/.
scp -r config/app.php cidtest2:/var/www/html/test.coinid.com/config/.

scp -r app/CID*.php cidtest2:/var/www/html/test.coinid.com/app/.

#scp -r public/assets/images/members/* cidtest2:/var/www/html/test.coinid.com/public/assets/images/members/.
#scp -r public/assets/images/* cidtest2:/var/www/html/test.coinid.com/public/assets/images/.
