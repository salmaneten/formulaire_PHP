<!DOCTYPE html>
<html>
    <head>

        <title>Contactez-moi !</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container"> 
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-lg-offset-1">
                    <form id="contact-form" method="post" action="" role="form">
                        <div class="row">
                           
                            <div class="col-md-6">
                                <label for="firstname">Prénom<span class="blue"> *</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom<span class="blue"> *</span></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Votre nom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email<span class="blue"> *</span></label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Votre email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre téléphone">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message<span class="blue"> *</span></label>
                                <textarea name="message" id="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>
                                <div class="col-md-12">
                                    <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="button1"  value="Envoyer">
                                </div>

                            </div>
                        


                    </form>
                </div>
            </div>
        </div>
    </body>
</html>