<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Ceci est le titre de la page</title>
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
  </head>
  <body>
    <table>
      <tr>
        <td>
        Faites un choix :
        </td>
        <td>
          <select onchange="catsel(this)">
          <!--<option value="-1">None</option>!-->
            <option value="1">Choix 1</option>
            <option value="2">Choix 2</option>
            <option value="3">Choix 3</option>
            <option value="4">Choix 4</option>
            <option value="5">Choix 5</option>
            <option value="6">Choix 6</option>
            <option value="7">Choix 7</option>
            <option value="8">Choix 8</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div id="1" style="display:block">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 1</td></tr></table>
          </div>
          <div id="2" style="display:none">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 2</td></tr></table>
          </div>
          <div id="3" style="display:none">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 3</td></tr></table>
          </div>
          <div id="4" style="display:none">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 4</td></tr></table>
          </div>
          <div id="5" style="display:none">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 5</td></tr></table>
          </div>
          <div id="6" style="display:none">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 6</td></tr></table>
          </div>
          <div id="7" style="display:none">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 7</td></tr></table>
          </div>
          <div id="8" style="display:none">
            <table border="0" cellspacing="3" cellpadding="0"><tr><td>blabla 8</td></tr></table>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>
