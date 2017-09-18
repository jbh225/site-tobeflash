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
                        <select onchange="catsel(this)" class="wpcf7-form-control wpcf7-select form-control">
                          <!--<option value="-1">None</option>!-->
                            <option value="0">---</option>
                          <option value="1">CLE USB</option>
                          <option value="2">WEB KEY</option>
                          <option value="3">BROCHURE VIDEO</option>
                        </select>

                      </div>

                        <!--formulaire cle usb-->
                        <div id="1" style="display:none">
                          <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                            [radio radio-435 default:1 "standard" "sur-mesure"]
                            <label>REFERENCE CLE USB
                              [select menu-341 include_blank "A-MEX" "ZEPHIR" "PEOPLE Mini" "EQUIN" "LEAD" "ALCOBA" "ASTECK" "EQUATEUR" "ICE" "CLEO" "CRYSTAL" "CLIP" "SAXO" "BLADE" "CYBER" "CODEX" "CRONO" "BANK" "PEN" "PILLS" "MAGIC" "SECRET" "PUSHY" "RUFF" "STRAP V3" "STRAP V1" "DOMINO" "RUN" "POWO" "ASWOOD" "INDICE" "MINI DYNAMIC" "DYNAMIC" "EXECUTIF" "BOOK" "IMMO" "STEEL" "SHINNY" "CLASS" "DROP" "STEP" "SPARK" "TWIST"]
                            </label>
                            [checkbox selectmenu-reference-dont-know "Je ne sais pas encore"]
                          </div>
                        </div>
                        <!--fin formulaire cle usb-->

                        <!--formulaire WEBKEY-->
                        <div id="2" style="display:none">
                          <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                            [radio radio-797 default:1 "web card" "web flyer" "sur-mesure"]
                            <label>FORMAT WEB FLYER
                              [select menu-269 include_blank "A4" "A5" "Format allongé" "Format carré" "A6"]
                            </label>
                            [checkbox selectmenu-reference-dont-know "Je ne sais pas encore"]
                          </div>
                        </div>

                        <!--fin formulaire WEBKEY-->

                        <!--formulaire VIDEO FLYER-->
                        <div id="3" style="display:none">
                          <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                            [radio radio-195 default:1 "video card" "video flyer" "video box" "sur-mesure"]
                            <label>FORMAT VIDEO FLYER
                              [select menu-561 include_blank "DVD" "A5" "Format carré" "A4"]
                            </label>
                            [checkbox selectmenu-reference-dont-know "Je ne sais pas encore"]
                          </div>
                        </div>
                        <!--fin formulaire VIDEO FLYER-->


                      <div class="col-lg-offset-3 col-lg-6 col-sm-12 col-xs-12">
                        <label>QUANTITÉ SOUHAITÉE
                          [text quantity class:withcheckbox]</label>
                          [checkbox checkbox-quantity-dont-know "Je ne sais pas encore"]

                            <label>VOTRE BUDGET
                              [text budget class:withcheckbox]</label>
                              [checkbox checkbox-budget-dont-know "Je ne sais pas encore"]

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
