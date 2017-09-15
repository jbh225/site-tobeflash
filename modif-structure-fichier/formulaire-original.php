<div class="row">
  <div class="col-sm-6">
    <label> PRENOM *
      [text* your-surname]</label>
    </div>
    <div class="col-sm-6">
      <label> NOM *
        [text* your-name]</label>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label> TEL
          [text your-tel] </label>
        </div>
        <div class="col-sm-6">
          <label> MAIL *
            [email* your-email] </label>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label> FONCTION
              [text your-function] </label>
            </div>
            <div class="col-sm-6">
              <label> ENTREPRISE *
                [text* your-firm] </label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label> ADRESSE
                  [text your-adress] </label>
                </div>
                <div class="col-sm-6">
                  <label> CODE POSTAL
                    [text your-cp] </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label> VILLE *
                      [text* your-town] </label>
                      <i style="color:red">* champs requis</i>
                    </div>
                    <div class="col-sm-6">
                      <label> PAYS
                        [text your-country] </label>
                      </div>
                    </div>

                    <h2>Vous êtes intéressé par :</h2>
                    <div class="row">
                      <div class="col-sm-6">
                        [select menu-354 include_blank "CLÉ USB" "WEB KEY" "BROCHURE VIDÉO"]
                        <div class="hidden">
                          [checkbox checkbox-31 class:cf7-inline "CLÉ USB" "WEB KEY" "BROCHURE VIDÉO"]
                        </div>
                        <label>RÉFÉRENCE
                          [text reference class:withcheckbox]</label>
                          [checkbox checkbox-reference-dont-know "Je ne sais pas encore"]

                          <label>QUANTITÉ SOUHAITÉE
                            [text quantity class:withcheckbox]</label>
                            [checkbox checkbox-quantity-dont-know "Je ne sais pas encore"]
                            <div class="hidden">
                              <label>VOTRE BUDGET
                                [text budget class:withcheckbox]</label>
                                [checkbox checkbox-budget-dont-know "Je ne sais pas encore"]
                              </div>
                              <label>DATE DE DÉBUT DE PROJET
                                [date date-988]</label>
                              </div>
                            </div>
                            <h2>Faites-nous part de vos premières idées !</h2>


                            <label> VOTRE MESSAGE
                              [textarea your-message] </label>

                              [submit "Envoyer" class:pull-right]
