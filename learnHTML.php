<?php

session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: /LeHS/login.php");
}
?>



<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="learnHTML.css" />
  <title>Learn HTML</title>
</head>

<body>
  <nav class="nav">
    <a href="firstpage.php" id="home_btn"> Acasa</a>
    <div class="username">
      <?php
      if (isset($_SESSION['username'])) :
        echo $_SESSION['username'];
      else :
        echo 'Utilizator';
      endif;

      ?>
      <div class="info">
        <a href="http://localhost:3000/LeHS/userProfile.php">Profil</a>
        <a href="http://localhost:3000/LeHS/statistics.php">Statistici</a>
        <a href="http://localhost:3000/LeHS/login.php">Logheaza-te</a>
        <a href="http://localhost:3000/LeHS/game/highscore.html">Clasament</a>
      </div>
    </div>
  </nav>
  <div class="learn">
    <button class="links" onmouseover="openLink(event, 'Tags')">
      Tag-uri
    </button>
    <button class="links" onmouseover="openLink(event, 'Tabel')">
      Tabele
    </button>
    <button class="links" onmouseover="openLink(event, 'Lists')">
      Liste
    </button>
    <button class="links" onmouseover="openLink(event, 'Images')">
      Imagini
    </button>
    <button class="links" onmouseover="openLink(event, 'Links')">
      Link-uri
    </button>
    <button class="links" onmouseover="openLink(event, 'Buttons')">
      Butoane
    </button>
    <button class="links" onmouseover="openLink(event, 'Forms')">
      Formulare
    </button>
    <button class="links" onmouseover="openLink(event,  'Attributes')">
      Atribute
    </button>
  </div>

  <div id="Tags" class="content">
    <h3>Tag-uri</h3>
    <p>
      O etichetă HTML este un cuvânt sau o literă specială înconjurat de
      paranteze unghiulare.
    </p>

    <p>
      1. <em>html ... /html </em>- Elementul rădăcină Toate paginile web încep
      cu elementul html. Se mai numește și elementul rădăcină, deoarece se
      află la rădăcina arborelui elementelor care alcătuiesc o pagină web.
    </p>

    <p>
      2. <em>head ... /head</em> - Capul documentului Elementul principal
      conține informații despre pagina web, spre deosebire de conținutul
      paginii web în sine.
    </p>
    <p>
      3. <em>title ... /title</em> - Titlul paginii Elementul titlu conține
      titlul paginii. Titlul este afișat în bara de titlu a browserului (bara
      din partea de sus a ferestrei browserului), precum și în marcaje,
      rezultatele motorului de căutare și multe alte locuri.
    </p>
    <p>
      4. <em>body ... /body</em> - Conținutul paginii Elementul body apare
      după elementul head din pagină. Ar trebui să conțină tot conținutul
      paginii dvs. web: text, imagini și așa mai departe.
    </p>
    <p>
      5. <em>h1 ... /h1 </em>- Un titlu de secțiune Titlurile vă permit să
      împărțiți conținutul paginii în bucăți lizibile. Funcționează la fel ca
      titlurile și subtitlurile dintr-o carte sau un raport
    </p>
    <p>
      6. <em>p ... /p </em>- Un paragraf Elementul p vă permite să creați
      paragrafe de text. Majoritatea browserelor afișează paragrafe cu un
      spațiu vertical între fiecare paragraf, separând frumos textul.<br />
    </p>

    <p>
      7. <em> div ... /div</em> - Un container la nivel de bloc pentru
      conținut Elementul div este un container generic pe care îl puteți
      utiliza pentru a adăuga mai multă structură la conținutul paginii.
    </p>
  </div>

  <div id="Tabel" class="content">
    <h3>Tabele</h3>
    <p>
      Eticheta <em>table</em> definește un tabel HTML.<br />
      Fiecare rând de tabel este definit cu o etichetă <em>tr.</em> <br />
      Fiecare antet de tabel este definit cu o etichetă <em>th</em>.<br />
      Fiecare tabel de date / celulă este definit cu o etichetă <em>td</em>.
      În mod implicit, textul din elementele <em>th</em> este îngroșat și
      centrat. În mod implicit, textul din elementele <em>td</em> este regulat
      și aliniat la stânga.
    </p>
  </div>

  <div id="Lists" class="content">
    <h3>Liste</h3>
    <p>
      O listă neordonată începe cu eticheta <em>ul</em>. <br />
      Fiecare articol din listă începe cu eticheta <em>li </em><br />
      Elementele listei vor fi marcate în mod implicit cu bullets.<br />
      <br /><br />
      O listă ordonată începe cu eticheta <em>ol</em>. <br />
      Fiecare articol din listă începe cu eticheta <em>li</em>.<br />
      Elementele listei vor fi marcate în mod implicit cu numere
    </p>
  </div>

  <div id="Images" class="content">
    <h3>Imagini</h3>
    <p>
      Eticheta HTML <em>img</em> este utilizată pentru a încorpora o imagine
      într-o pagină web. Imaginile nu sunt inserate tehnic într-o pagină web;
      imaginile sunt legate de pagini web. Eticheta img creează un spațiu de
      reținere pentru imaginea de referință. Eticheta img este goală, conține
      numai atribute și nu are o etichetă de închidere.<br />

      Eticheta img are <em>două atribute necesare</em>:<br />
      1.<em>src </em>- Specifică calea către imagine<br />
      2.<em>alt </em>- Specifică un text alternativ pentru imagine
    </p>
  </div>

  <div id="Links" class="content">
    <h3>Link uri</h3>
    <p>
      Linkurile HTML sunt hyperlinkuri. Puteți face clic pe un link și săriți
      la un alt document. Când mutați mouse-ul peste un link, săgeata
      mouse-ului se va transforma într-o mână mică.<br />
      <em> Un link nu trebuie să fie text.</em> Un link poate fi o imagine sau
      orice alt element HTML!<br />
      Cel mai important atribut al elementului <em>a</em> este atributul
      <em>href</em>, care indică destinația link-ului.<br />
      Textul linkului este partea care va fi vizibilă pentru cititor. Dând
      clic pe textul linkului, cititorul va fi trimis la adresa URL
      specificată.<br />
    </p>
  </div>

  <div id="Buttons" class="content">
    <h3>Butoane</h3>
    <p>
      Elementul HTML <em>button</em> reprezintă un buton pe care se poate face
      click, utilizat pentru a trimite formulare sau oriunde într-un document
      pentru funcționalitatea accesibilă a butonului standard. <br />
      În mod implicit, butoanele HTML sunt prezentate într-un stil asemănător
      platformei pe care rulează agentul utilizator, dar puteți schimba
      aspectul butoanelor cu CSS
    </p>
  </div>
  <div id="Forms" class="content">
    <h3>Formulare</h3>
    <p>
      Un formular HTML este utilizat pentru a colecta datele introduse de
      utilizator. Intrarea utilizatorului este trimisă cel mai adesea către un
      server pentru procesare.
      <br />
      Elementul <em>form</em> este un container pentru diferite tipuri de
      elemente de intrare, cum ar fi: câmpuri de text, casete de selectare,
      butoane radio, butoane de trimitere. Elementul HTML input este cel mai
      utilizat element de formă. Un element input poate fi afișat în mai multe
      moduri, în funcție de atributul de tip Exemple:<br />
      1.<em>input type="text"</em> <br />
      2.<em>input type="radio"</em><br />
      3.<em>input type="checkbox" </em><br />
      4.<em>input type="submit" </em><br />
      5.<em>input type="button"</em><br />
      <em> Butoanele radio</em> permit unui utilizator să selecteze UNA dintre
      un număr limitat de opțiuni.<br />
      <em>Casetele de selectare </em>permit unui utilizator să selecteze ZERO
      sau MAI MULTE opțiuni dintr-un număr limitat de opțiuni.<br />
      <em> Submit</em>:Butonul trimite datele formularului către server.
      Acesta este o valoare implicită dacă atributul nu este specificat pentru
      butoanele asociate cu un form sau dacă atributul este o valoare goală
      sau nevalidă.<br />
    </p>
  </div>
  <div id="Attributes" class="content">
    <h3>Atribute</h3>
    <p>
      Atributul de clasă este adesea folosit pentru a indica un nume de clasă
      într-o foaie de stil. De asemenea, poate fi folosit de un JavaScript
      pentru a accesa și manipula elemente cu numele clasei specifice.
      Atributul de clasă poate fi utilizat pe orice element HTML. Numele
      clasei este case sensitive.Elementele HTML pot aparține mai multor
      clase. Pentru a defini mai multe clase, separați numele claselor cu un
      spațiu, de ex. div class = "split right". Elementul va fi stilizat în
      conformitate cu toate clasele specificate.<br />
      Atributul id specifică un id unic pentru un element HTML. Valoarea
      atributului id trebuie să fie unică în cadrul documentului HTML.
      Atributul id este utilizat pentru a indica o declarație de stil
      specifică într-o foaie de stil. De asemenea, este folosit de JavaScript
      pentru a accesa și manipula elementul cu ID-ul specific. Sintaxa pentru
      id este: scrieți un caracter hash (#), urmat de un nume de id. Apoi,
      definiți proprietățile CSS în interiorul acoladelor {}.
    </p>
    <p class="final_paragraph"> Daca doresti sa-ti testezi cunostintele:</p>
    <a href="./chooseHTMLLevel.php" id="nivel--btn"> Alege nivel</a>
  </div>

  <script src="learn.js"></script>
</body>

</html>