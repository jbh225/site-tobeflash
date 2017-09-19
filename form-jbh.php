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

                    <h2 style="text-align:center">Vous êtes intéressé par :</h2>
                    <div class="row">
                      <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                        [select menu-230 include_blank "WEB KEY" "CLE USB" "BROCHURE VIDEO"]
                      </div>
                      <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                        <p style="color: red;"><em>Sélectionnez le modèle de votre produit ici</em></p>
                        <select onchange="catsel(this)" class="wpcf7-form-control wpcf7-select form-control">
                          <!--<option value="-1">None</option>!-->
                          <option value="0">---</option>

                          <option value="2">WEB FLYER</option>
                          <option value="8">WEB FLYER SUR MESURE</option>
                          <option value="3">WEB CARD</option>
                          <option value="4">VIDEO FLYER</option>
                          <option value="5">VIDEO CARD</option>
                          <option value="6">VIDEO BOX</option>
                          <option value="9">VIDEO FLYER SUR MESURE</option>
                          <option value="1">CLE USB STANDARD</option>
                          <option value="7">CLE USB SUR MESURE</option>
                        </select>

                      </div>

                      <!--FORMULAIRE CLE USB STANDARD-->
                      <div id="1" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                          <label>REFERENCE
                            [select menu-341 include_blank "CLE USB - (je ne sais pas encore !)" "CLE USB - A-MEX" "CLE USB - ZEPHIR" "CLE USB -
 PEOPLE Mini" "CLE USB - EQUIN" "CLE USB - LEAD" "CLE USB - ALCOBA" "CLE USB - ASTECK" "CLE USB - EQUATEUR" "CLE USB - ICE" "CLE USB -
 CLEO" "CLE USB - CRYSTAL" "CLE USB - CLIP" "CLE USB - SAXO" "CLE USB - BLADE" "CLE USB - CYBER" "CLE USB - CODEX" "CLE USB - CRONO" "CLE USB - BANK" "CLE USB - PEN" "CLE USB - PILLS" "CLE USB - MAGIC" "CLE USB - SECRET" "CLE USB - PUSHY" "CLE USB - RUFF" "CLE USB - STRAP V3" "CLE USB - STRAP V1" "CLE USB - DOMINO" "CLE USB - RUN" "CLE USB - POWO" "CLE USB - ASWOOD" "CLE USB - INDICE" "CLE USB - MINI DYNAMIC" "CLE USB - DYNAMIC" "CLE USB - EXECUTIF" "CLE USB - BOOK" "CLE USB - IMMO" "CLE USB - STEEL" "CLE USB - SHINNY" "CLE USB - CLASS" "CLE USB - DROP" "CLE USB - STEP" "CLE USB - SPARK" "CLE USB - TWIST"]
                          </label>

                        </div>
                      </div>
                      <!--FIN FORMULAIRE CLE USB STANDARD-->

                      <!--FORMULAIRE CLE USB SUR MESURE-->
                      <div id="7" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                          <label>FORMAT
                            [radio radio-528 "cle usb sur-mesure"]
                          </label>

                        </div>
                      </div>
                      <!--FIN FORMULAIRE CLE USB SUR MESURE-->

                      <!--FORMULAIRE WEB FLYER STANDARD-->
                      <div id="2" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                          <label>FORMAT
                            [select menu-269 include_blank "WEB FLYER - (je ne sais pas encore !)" "WEB FLYER - Format A4" "WEB FLYER -
 Format A5" "WEB FLYER - Format allongé (100X210 mm)" "WEB FLYER - Format carré (194X194 mm)" "WEB FLYER - Format A6"]
                          </label>

                        </div>
                      </div>

                      <!--FIN FORMULAIRE WEB FLYER STANDARD-->


                      <!--FORMULAIRE WEB FLYER SUR MESURE-->
                      <div id="8" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                          <label>FORMAT
                            [radio radio-564 "web flyer sur-mesure"]
                          </label>

                        </div>
                      </div>
                      <!--FIN FORMULAIRE WEB FLYER SUR MESURE-->

                      <!--FORMULAIRE WEBCARD-->
                      <div id="3" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                          <label>FORMAT
                            [radio radio-797 "web card - Format 55X90 mm"]
                          </label>
                        </div>
                      </div>

                      <!--FIN FORMULAIRE WEBCARD-->




                      <!--FORMULAIRE VIDEO FLYER STANDARD-->
                      <div id="4" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                          <label>FORMAT
                            [select menu-561 include_blank "VIDEO FLYER - (je ne sais pas encore !)" "VIDEO FLYER - Format DVD (135X190 mm)" "VIDEO FLYER - Format A5" "VIDEO FLYER - Format carré (210X210 mm)" "VIDEO FLYER - Format A4"]
                          </label>

                        </div>
                      </div>
                      <!--FIN FORMULAIRE VIDEO FLYER STANDARD-->

                      <!--FORMULAIRE VIDEO CARD-->
                      <div id="5" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">

                          <label>FORMAT
                            [radio radio-195 "video card - Format A10 Ecran 2.4 pouces | H:50mm L:990mm" ]
                          </label>

                        </div>
                      </div>
                      <!--FIN FORMULAIRE VIDEO CARD-->

                      <!--formulaire VIDEO BOX-->
                      <div id="6" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">

                          <label>FORMAT
                            [radio radio-939  "video box - Format 315X230 mm"]
                          </label>

                        </div>
                      </div>
                      <!--fin formulaire VIDEO BOX-->

                      <!--FORMULAIRE VIDEO FLYER SUR MESURE-->
                      <div id="9" style="display:none">
                        <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                          <label>FORMAT
                            [radio radio-793  "video flyer sur-mesure"]
                          </label>

                        </div>
                      </div>
                      <!--FIN FORMULAIRE VIDEO FLYER SUR MESURE-->

                      <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                        <label>QUANTITÉ SOUHAITÉE
                          [text quantity class:withcheckbox]</label>
                          [checkbox checkbox-quantity-dont-know "Je ne sais pas encore"]

                          <label>VOTRE BUDGET EN €
                            [text budget class:withcheckbox]</label>

                            [checkbox checkbox-budget-dont-know "Je ne sais pas encore"]
                          </div>

                          <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                            <label>DATE DE DÉBUT DE PROJET
                              [date date-988]</label>
                            </div>

                          </div>
                          <h2>Faites-nous part de vos premières idées !</h2>


                          <label> VOTRE MESSAGE
                            [textarea your-message] </label>
                            [submit "ENVOYER"]

                            <script type="text/javascript">
                            function catsel(sel) {
                              //if (sel.value=="-1" ) return;
                              var opt=sel.getElementsByTagName("option" );
                              for (var i=0; i<opt.length; i++) {
                                var x=document.getElementById(opt[i].value);
                                if (x) x.style.display="none";
                              }
                              var cat = document.getElementById(sel.value);
                              if (cat) cat.style.display="block";
                            }
                            </script>

                            <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
                            <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
                            <script>
                            webshims.setOptions('forms-ext', {types: 'date'});
                            webshims.polyfill('forms forms-ext');
                            $.webshims.formcfg = {
                              en: {
                                dFormat: '-',
                                dateSigns: '-',
                                patterns: {
                                  d: "yy-mm-dd"
                                }
                              }
                            };
                            </script>
