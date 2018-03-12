<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso12.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="formden_header">
     <h2>
      BADANIE  SATYSFAKCJI UŻYTKOWNIKÓW  STRONY  INTERNETOWEJ SMP  
     </h2>
     <p>
     www.sandensmp.pl
     </p>
     <hr>
    </div>
    <form method="post" action="ankieta_www.php">

     <div class="form-group" name="">


      <label class="control-label requiredField">
       1.  Czy kiedykolwiek  odwiedziłeś (-aś)   stronę internetową SMP ?
       <span class="asteriskField">
        *
       </span>
      </label>

      <div class="">
       <div class="radio" name="radio1">
        <label class="radio">
         <input name="visit" type="radio" value="TAK"/>
         TAK
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="visit" type="radio" value="NIE"/>
         NIE
        </label>
       </div>
      </div>
     </div>


     <div class="form-group ">
      <label class="control-label ">
      2. Jak często korzystasz ze strony internetowej SMP ?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="frequency" type="radio" value="codziennie "/>
         1. codziennie
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="frequency" type="radio" value="kilka razy w tygodniu "/>
         2. kilka razy w tygodniu
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="frequency" type="radio" value="kilka razy w miesiącu"/>
         3. kilka razy w miesiącu
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="frequency" type="radio" value="rzadziej / okazjonalnie"/>
         4. rzadziej / okazjonalnie
        </label>
       </div>
      </div>
     </div>



     <div class="form-group ">
      <label class="control-label ">
       3.  Jak og&oacute;lnie oceniasz stronę internetową SMP  ?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="rating" type="radio" value="Nie mam zdania."/>
         1. Nie mam zdania.
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="rating" type="radio" value="Strona nie spełnia moich oczekiwań."/>
         2. Strona nie spełnia moich oczekiwań.
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="rating" type="radio" value="Na stronie należałoby wprowadzić wiele zmian."/>
         3. Na stronie należałoby wprowadzić wiele zmian.
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="rating" type="radio" value="Strona podoba mi się, jednak powinno być więcej informacji. "/>
         4. Strona podoba mi się, jednak powinno być więcej informacji.
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="rating" type="radio" value="Treść na stronie jest zadowalająca."/>
         5. Treść na stronie jest zadowalająca.
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="rating" type="radio" value="Strona zawiera istotne informacje. Nie wymaga zmian."/>
         6. Strona zawiera istotne informacje. Nie wymaga zmian.
        </label>
       </div>
      </div>
     </div>



     <div class="form-group ">
      <label class="control-label ">
       4. Jak oceniasz atrakcyjność strony SMP pod względem grafiki i animacji (banery,  ikony, ikonografiki, zmieniający się kolor, kształt ) ?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="attractiveness" type="radio" value="Zdecydowanie atrakcyjna"/>
         1. Zdecydowanie atrakcyjna
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="attractiveness" type="radio" value="Raczej atrakcyjna "/>
         2. Raczej atrakcyjna
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="attractiveness" type="radio" value="Raczej nieatrakcyjna "/>
         3. Raczej nieatrakcyjna
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="attractiveness" type="radio" value="Zdecydowanie nieatrakcyjna"/>
         4. Zdecydowanie nieatrakcyjna
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="attractiveness" type="radio" value="Nie mam zdania "/>
         5. Nie mam zdania
        </label>
       </div>
      </div>
     </div>



     <div class="form-group ">
      <label class="control-label ">
       5.  Czy odpowiada Ci kolorystyka strony?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="color" type="radio" value="Zdecydowanie tak "/>
         1. Zdecydowanie tak
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="color" type="radio" value="Raczej tak "/>
         2. Raczej tak
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="color" type="radio" value="Raczej nie"/>
         3. Raczej nie
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="color" type="radio" value="Zdecydowanie nie"/>
         4. Zdecydowanie nie
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="color" type="radio" value="Nie mam zdania "/>
         5. Nie mam zdania
        </label>
       </div>
      </div>
     </div>



     <div class="form-group ">
      <label class="control-label ">
       6.  Czy udało Ci się odnaleźć informacje, kt&oacute;rych szukałeś ( -aś) ?
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="easy_to_find_info" type="radio" value="Tak"/>
         Tak
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="easy_to_find_info" type="radio" value="Nie"/>
         Nie
        </label>
       </div>
      </div>
     </div>



     <div class="form-group ">
      <label class="control-label " for="textarea">
       7. Jakie treści / informacje Twoim zdaniem powinny być zamieszczone na stronie internetowej SMP  ?
      </label>
      <textarea class="form-control" cols="40" id="textarea" name="ness_info" rows="10"></textarea>
     </div>



     <div class="form-group ">
      <label class="control-label " for="textarea1">
       8.  Jakiego rodzaju treści,  informacji, wydarzeń  powinno być więcej na stronie internetowej SMP ?
      </label>
      <textarea class="form-control" cols="40" id="textarea1" name="info_type" rows="10"></textarea>
     </div>



     <div class="form-group ">
      <label class="control-label ">
       9. Jak oceniasz  spos&oacute;b nawigacji  na stronie SMP Poruszanie się po stronie www SMP jest:
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="nawigation" type="radio" value="bardzo łatwe i intuicyjne"/>
         1. bardzo łatwe i intuicyjne
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="nawigation" type="radio" value="łatwe "/>
         2. łatwe
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="nawigation" type="radio" value="dość trudne "/>
         3.  dość trudne
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="nawigation" type="radio" value="trudne "/>
         4. trudne
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="nawigation" type="radio" value="Nie mam zdania "/>
         5. Nie mam zdania
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="subject">
       Jeśli Twoja odpowiedź na pytanie brzmi: &bdquo;dość trudne&rdquo; lub &bdquo;trudne&rdquo; prosimy o opisanie z jakimi trudnościami się spotkałeś (-aś) :
      </label>
      <input class="form-control" id="subject" name="subject" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       10. Czy uważasz, że strona internetowa SMP wymaga modernizacji  w celu zwiększenia atrakcyjności i 
     funkcjonalności, uzasadnij odpowiedź
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="need_update" type="radio" value="Tak"/>
         Tak
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="need_update" type="radio" value="Nie"/>
         Nie
        </label>
       </div>
      </div>
     </div>
    
     <div class="form-group ">
      <label class="control-label requiredField">
       11 . Jakie media  społecznościowe, Twoim zdaniem, powinny być wykorzystywane na stronie / wspierac funkcjonowanie strony internetowej ?
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class=" ">
       <div class="checkbox">
        <label class="checkbox">
         <input name="ness_social_meadia" type="checkbox" value="Facebook"/>
         1. Facebook
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="ness_social_meadia" type="checkbox" value="Google"/>
         2. Google
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="ness_social_meadia" type="checkbox" value="Youtube"/>
         3.  Youtube
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="ness_social_meadia" type="checkbox" value="Twitter"/>
         4. Twitter
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="ness_social_meadia" type="checkbox" value="LInkedIn"/>
         5. LInkedIn
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="ness_social_meadia" type="checkbox" value="Inne "/>
         6. Inne
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <input class="form-control" id="text" name="optional_social_media" placeholder="jakie ?" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField">
       12. Płeć
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="sex" type="radio" value="Kobieta"/>
         Kobieta
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="sex" type="radio" value="Mężczyzna "/>
         Mężczyzna
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       13. Prosimy o podanie swojego przedziału wiekowego.
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="age" type="radio" value="18-25 lat"/>
         18-25 lat
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="age" type="radio" value="26-35"/>
         26-35
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="age" type="radio" value="36-45"/>
         36-45
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="age" type="radio" value="45-55"/>
         45-55
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="age" type="radio" value="Powyżej "/>
         Powyżej
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label ">
       14.  Charakter pracy:
      </label>
      <div class="">
       <div class="radio">
        <label class="radio">
         <input name="employee_type" type="radio" value="direct"/>
         pracownik bezpośrednio produkcyjny ( direct)
        </label>
       </div>
       <div class="radio">
        <label class="radio">
         <input name="employee_type" type="radio" value="indirect"/>
         pracownik  pośrednio produkcyjny( indirect)
        </label>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-success " name="send" type="submit">
        Wyślij 
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>