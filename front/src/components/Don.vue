<template>
    <div class="row">
                <section class="don_parrainage">
                    <h2><span class="span1">1-</span>Mon don</h2> <br/>
                    <div id="don">
                        <hr>
                        <h3>Choissisez l'importance de votre don</h3><br/>
                        <div class="click_et_c_donner">
                            <form action="charge.php" method="POST" class="bouton_stripe">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                        data-amount="1500"
                                        data-label="15€"
                                        data-name="Yalla pour les enfants"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-zip-code="true"
                                        data-currency="eur">
                                </script>
                            </form>
                            <form action="" method="POST" class="bouton_stripe">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                        data-amount="3000"
                                        data-label="30 €"
                                        data-name="Yalla pour les enfants"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-zip-code="true"
                                        data-currency="eur">
                                </script>
                            </form>
                            <form action="" method="POST" class="bouton_stripe">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                        data-amount="4500"
                                        data-label="45€"
                                        data-name="Yalla pour les enfants"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-zip-code="true"
                                        data-currency="eur">
                                </script>

                            </form>

                        </div>
                        <div class="votre_don_compte">
                            <h4>L’importance des dons réguliers</h4>
                            <p>
                                Pour répondre à nombreuses de vos questions, nous n’organisons pas de parrainage
                                individuel et personnalisé en raison de nos ressources,
                                limitées, et de notre principe d’équité, de ne pas faire de différence entre
                                nos écoliers. Toutefois, le don régulier de nos adhérents et
                                sympathisants n’en reste pas moins crucial pour le bon déroulement de
                                l’année scolaire. il permettra aux enfants d’avoir une scolarité
                                ininterrompue, ce qui est indispensable à son équilibre et à sa progression.
                                En donnant 15 euros par mois, vous couvrez les frais de
                                scolarisation d’un enfant syrien pendant une semaine.
                                Il suffit pour cela d’autoriser un virement automatique de votre compte en
                                banque sur celui de Yalla! en indiquant en objet : “Parrainage Yalla!”.
                            </p>
                        </div>
                        <br/>

                    </div>
                    <div id="parrainage">
                        <hr>
                        <h3>Entrez le montant mensuel de votre parrainage</h3>
                        <div class="click_et_c_donner">
                            <form action="" method="POST" class="bouton_stripe">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                        data-amount="2800"
                                        data-label="28€"
                                        data-name="Yalla pour les enfants"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-zip-code="true"
                                        data-currency="eur">
                                </script>

                            </form>
                            <form action="" method="POST" class="bouton_stripe">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                        data-amount="5000"
                                        data-label="50€"
                                        data-name="Yalla pour les enfants"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-zip-code="true"
                                        data-currency="eur">
                                </script>

                            </form>
                            <form action="" method="POST" class="bouton_stripe">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                        data-amount="10000"
                                        data-label="100€"
                                        data-name="Yalla pour les enfants"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-zip-code="true"
                                        data-currency="eur">
                                </script>
                            </form>
                        </div>
                    </div>
                </section>
                <section class="informations_personnel">
                    <h2><span class="span2">2-</span>Nos <br/> corrdonnées</h2> <br/>
                    <div id="corrdonnees">
                        <hr class="hr_parrainage">
                        <h3>Vous pouvez à tout moment faire un don par :</h3><br/>

                        <div class="coordonnee_paiement">
                            <ul>
                                <li>chèque bancaire à l’ordre de « Yalla! Pour les Enfants », adressé à <br/>
                                    Yalla! 13, rue René Villermé 75011 Paris
                                </li>
                                <br/><br/>
                                <li>
                                    virement bancaire sur le compte de notre association
                                </li>
                                <li>
                                    don en ligne sur le site de notre partenaire <a href="https://www.w4.org/fr/project/empecher-la-descolarisation-des-enfants-syriens-refugies/" class="lien_WWW">la plateforme de financement participatif W4
                                    (Women’s WorldWide Web)</a>. C’est simple et rapide, tout nous est reversé (pas de commission), et les dons sont déductibles d’impôts !
                                </li>
                                <br/><br/>
                                <li>

                                    <h4> Coordonnées bancaires de Yalla! Pour les Enfants</h4>
                                    Attention : changement de banque en mai 2016
                                    <br/><br/>
                                    CREDIT COOPERATIF
                                    <br/><br/>
                                    RIB : 42559 00005 41020040979 04
                                    <br/><br/>
                                    IBAN : FR76 4255 9000 0541 0200 4097 904
                                    <br/><br/>
                                    BIC : CCOPFRPPXXX
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="api_stripe">
                    <h2><span class="span3">3-</span>Régler</h2> <br/>
                    <hr class="hr_parrainage">
                    <h3>Regler en toute sécurité</h3><br/>
                    <div class="securite_stripe">
                        <p>Toutes vos informations bancaires sont séurisées avec:</p>
                        <img src="img-content/stripe-retirer-argent.png" alt="sécurité des données sensibles">
                    </div>

                    <form action="" method="post" class="bouton_stripe">
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_lJfOILh69t8jvZsAgnmUTRJb"
                                data-label="Donner 5€"
                                data-amount="500"
                                data-description="Don pour l'éducation">
                        </script>
                    </form>
                    <div class="securite_stripe_adresse">
                        <p>Nota Bene: suspendez à tout moment votre don mensuel, ou votre parrainage, sur simple lettre de votre part</p>
                        <address> Adresse postale <br><br>
                            Yalla! Pour les Enfants <br><br>
                            13, rue René Villerme – 75011 PARIS </address>
                    </div>
                </section>
            </div>
</template>

<style>

    /*----page don--*/
    .h1_page_don {
        width: auto;
        font-size: 41px;
        color: #ffffff;
        text-align: center;
        line-height: normal;
        font-weight: 900;
        margin-top: 10%;
        font-family: "Brandon Grotesque Black", sans-serif; }

    #dons {
        width: 80%;
        height: auto;
        margin: 100px auto;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-around;
        align-items: flex-start; }

    .don_parrainage {
        background-color: rgba(161, 109, 113, 0.9);
        border-right: 2px solid #F58C8C;
        box-shadow: 1px  0 #F58C8C;
        padding-bottom: 15px;
        width: 33.33%;
        height: auto; }
    .don_parrainage h2 {
        text-transform: uppercase;
        font-size: 25px;
        width: 100%;
        background-color: #DE9DA0;
        height: 100px;
        color: #ffffff;
        font-family: "Brandon Grotesque Black", sans-serif; }
    .don_parrainage .span1 {
        font-size: 50px;
        border: 3px solid #F58C8C;
        padding: 30px; }

    #don {
        width: 100%;
        margin-bottom: 36px; }

    hr {
        width: 80%;
        text-align: center;
        height: 5px;
        background-color: #F58C8C;
        border: 0;
        margin: 0 auto; }

    .hr_parrainage {
        width: 80%;
        text-align: center;
        height: 5px;
        background-color: #ab6d71;
        border: 0; }

    h3 {
        font-size: 21px;
        line-height: 1.5em;
        color: #ffffff;
        text-align: center;
        margin: 20px;
        font-family: "Brandon Grotesque Medium",sans-serif; }

    .votre_don_compte {
        width: 90%;
        height: auto;
        font-size: 18px;
        font-family: "Brandon Grotesque Regular", sans-serif;
        margin: 10% auto;
        color: #ffffff;
        line-height: 1.5em; }

    .lien_WWW {
        color: #040809;
        font-weight: bold; }

    .coordonnee_paiement {
        width: 90%;
        height: auto;
        font-size: 18px;
        font-family: "Brandon Grotesque Regular", sans-serif;
        margin: 1% auto;
        color: #ffffff;
        line-height: 1.5em; }

    .informations_personnel {
        background-color: rgba(245, 140, 140, 0.9);
        width: 33.33%;
        height: auto;
        padding-bottom: 15px;
        margin-left: 5%;
        border-right: 2px solid #ab6d71;
        box-shadow: 1px 0 #ab6d71; }
    .informations_personnel h2 {
        text-transform: uppercase;
        font-size: 25px;
        text-align: center;
        width: 100%;
        background-color: #ab6d71;
        height: 100px;
        color: #ffffff;
        font-family: "Brandon Grotesque Black", sans-serif; }
    .informations_personnel .span2 {
        font-size: 50px;
        border: 3px solid #ab6d71;
        padding: 30px; }

    #corrdonnees {
        width: 100%; }

    .click_et_c_donner {
        display: flex;
        flex-direction: row; }

    .click_et_c_donner form {
        margin: 0% 5%; }

    #api_stripe {
        background-color: rgba(222, 158, 161, 0.9);
        width: 33.33%;
        height: auto;
        padding-bottom: 15px;
        margin-left: 5%;
        border-right: 2px solid #ab6d71;
        box-shadow: 1px 0 #f58c8c; }
    #api_stripe h2 {
        text-transform: uppercase;
        font-size: 25px;
        width: 100%;
        background-color: #f58c8c;
        height: 100px;
        color: #ffffff;
        font-family: "Brandon Grotesque Black", sans-serif; }
    #api_stripe .span3 {
        font-size: 50px;
        border: 3px solid #ab6d71;
        padding: 30px; }

    .page_charge {
        background-color: #f58c8c;
        width: 50%;
        margin: 0 auto; }

    .payment-errors {
        border: 0; }

    .paiement_complet {
        color: red; }

    @media only screen and (max-width: 480px) {
        #dons {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: auto; }

        .don_parrainage {
            width: 90%;
            margin: 0 5%; }

        .informations_personnel {
            width: 90%;
            margin: 100px 5%; }

        #api_stripe {
            width: 90%;
            margin: 100px 5%; }

        hr {
            margin: 0 auto; }

        form.bouton_stripe {
            margin: 0 5%; }

        body {
            background-size: cover; } }
    @media only screen and (max-width: 1000px) {
        #dons {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: auto; }

        .don_parrainage {
            width: 90%;
            margin: 0 5%; }

        .informations_personnel {
            width: 90%;
            margin: 100px 5%; }

        #api_stripe {
            width: 90%;
            margin: 100px 5%; }

        hr {
            margin: 0 auto; }

        form.bouton_stripe {
            margin: 0 5%; }

        body {
            background-size: cover; } }

    /*# sourceMappingURL=page_don.css.map */

</style>