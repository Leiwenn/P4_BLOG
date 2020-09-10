<!DOCTYPE html>
<html lang="fr">
    <head>
        <script type="text/javascript" src="public/tarteaucitron/tarteaucitron.js"></script>
        <script type="text/javascript">
            tarteaucitron.init({
                "privacyUrl": "", /* Privacy policy url => A REDIGER cf .txt */

                "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
                "cookieName": "tarteaucitron", /* Cookie name */

                "orientation": "middle", /* Banner position (top - bottom) */
                "showAlertSmall": true, /* Show the small banner on bottom right */
                "cookieslist": true, /* Show the cookie list */

                "adblocker": false, /* Show a Warning if an adblocker is detected */
                "DenyAllCta" : true, /* Show the deny all button */
                "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
                "highPrivacy": true, /* Disable auto consent is forbiden in UE */
                "handleBrowserDNTRequest": false, /* If Do Not Track set in browser == 1, disallow all */

                "removeCredit": false, /* Remove credit link if true */
                "moreInfoLink": true, /* Show more info link */
                "useExternalCss": false, /* If false, the tarteaucitron.css (css line 514 and after) file will be loaded else{my css file} */

                //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for subdomain website */

                "readmoreLink": "/cookiespolicy", /* Change the default readmore link pointing to tarteaucitron.io */
        
                "mandatory": false /* Show a message about mandatory cookies */
            });
            (tarteaucitron.job = tarteaucitron.job || []).push('facebook');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f2c3a49501.js"></script>
        <link rel="stylesheet" type="text/css" href="public/css/styleFrontOffice.css">
        <title> <?= $title ?> </title>
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    </head>

    <body>
        <div class="container-fluid">
            
            <?= $header ?>

            <?= $content ?>
            
            <footer id="footer" class="p-4">
                <p>Mentions légales</p>
                <p>Images</p>
            </footer>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>