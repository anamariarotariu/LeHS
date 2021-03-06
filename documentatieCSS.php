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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="documentatieCSS.css">
    <title>Learn CSS</title>
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
        </div>
    </nav>
    <div class="info disappear">
        <a href="http://localhost:3000/LeHS/userProfile.php">Profil</a>
        <a href="http://localhost:3000/LeHS/statistics.php">Statistici</a>
        <a href="http://localhost:3000/LeHS/login.php">Logheaza-te</a>
        <a href="http://localhost:3000/LeHS/game/highscore.html">Clasament</a>
    </div>
    <div class="choose__topic--section">

        <button class="doclinks" onmouseover="openDoc(event, 'Link')"> Link</button>
        <button class="doclinks" onmouseover="openDoc(event, 'Selectors')"> Selectori</button>
        <button class="doclinks" onmouseover="openDoc(event, 'Specificity')"> Specificity</button>
        <button class="doclinks" onmouseover="openDoc(event, 'Border')"> Border</button>
        <button class="doclinks" onmouseover="openDoc(event, 'Padding')">Padding</button>
        <button class="doclinks" onmouseover="openDoc(event, 'Margin')">Margin</button>
        <button class="doclinks" onmouseover="openDoc(event, 'Position')">Position</button>
        <button class="doclinks" onmouseover="openDoc(event, 'MediaQuery')">Media Query</button>


    </div>
    <div id="Link" class="documentation">
        <h3>Link</h3>
        <p>Principalul rol al fișierelor CSS este de a stiliza fișierele HTML. Însă, acest lucru este posibil doar dacă se vor conecta cele două fișiere. Acest lucru se face cu ajutorul tag-ului <i>link</i>, la care vom adăuga atributul <i>href=</i>, iar între ghilimele vom introduce numele fișierului CSS. Astfel, toate caracteristicile componentelor HTML se vor aplica acestora.</p>
        <p>
            <span>De reținut!</span>
            Tag-ul link este indicat să fie plasat în partea de head a documentului HTML, deoarece este un element care nu este vizibil în conținutul propriu-zis al paginii.
        </p>

    </div>
    <div id="Selectors" class="documentation">
        <h3>Selectori</h3>
        <p>Pentru a putea stiliza elementele HTML, acestea trebuie selectate. Acest lucru este posibil fie în funcție de tag-ul pe care îl are elementul respectiv, fie adaugându-i o clasă sau un id. Există și un selector special, <span>*</span>, care selectează toate elementele aflate în pagină. În cazul în care elementului îi va fi adaugată o clasă, sintaxa din fișierul CSS este <span>.nume_clasă</span> , iar dacă se adaugă un id, sintaxa este <span>#nume_id</span>. Ambele structuri vor fi urmate de acolade în interiorul cărora se vor afla proprietățile necesare stilizării împreună cu valorile.</p>
        <p>
            <span>De reținut!</span>
            Este indicată folosirea clasei atunci când dorim să stilizăm elemente multiple și a id-ului atunci când caracteristicile sunt aplicate unui singur element.
        </p>
        <p>De asemenea, unui element i se pot adăuga mai multe clase sau atât clase, cât și id-uri în funcție de stilizarea pe care dorim să i-o aplicăm. Pentru a aplica același stil mai multor elemente le putem concatena folosind <span>,</span> . Pentru a selecta un element care se află în interiorul unui element care are o clasă sau un id anume se va scrie: <span> .nume_clasa_parinte/#id_element_parinte .nume_clasa_copil/#id_copil</span>.</p>

    </div>
    <div id="Specificity" class="documentation">
        <h3>Specificitate</h3>
        <p>Specificitatea este un aspect important al CSS-ului în momentul în care unui element i se pot realiza mai multe stilizări pe baza selecției pe baza claselor, id-urilor și a tag-urilor. Aceasta poate fi privită ca pe un scor pe care îl primește fiecare declarare a stilizării care se calculează pe baza unei ierarhii.</p>
        <p>
            Cel mai specific mod de a adăuga o stilizare unui element este să o facem inline în codul HTML. Totuși, această metodă
            nu este recomandată din cauza faptului că apare foarte mult cod duplicat, iar în cazul în care se dorește modificarea
            unei proprietăți sau a valorii acesteia, este dificil să se corecteze în fiecare loc.
            Următorul ca specificitate este id-ul, deoarece este unic pentru fiecare element.
        </p>

        <p> Elementul al treilea în ierarhie este alcătuit din clase, pseudo-clase (precum <span>hover, focus, active</span>) sau
            atribute. Cel de-al patrulea element este tag-ul și pseudo-elementele, precum <span>before, after</span>. </p>
        <p>Cel mai puțin specific element este selectorul universal, *. Pentru a calcula specificitatea, se poate folosi un calculator special creat pentru acest lucru.</p>

    </div>
    <div id="Border" class="documentation">
        <h3>Border</h3>
        <p>
            Pentru a evidenția un element i se poate adăuga o bordură. Pentru a face asta se folosește proprietatea <span>border</span>, care poate lua valorile <span>lățime, tipul de bordură (este absolut necesar) și culoarea acesteia.</span>. Putem opta pentru a adăuga bordură doar pe laterala unui element, folosind proprietățile <span>border-left, border-right, border-top, border-bottom</span>, dar în cazul în care nu este specificat, se va adăuga pe toate lateralele. Vom detalia puțin fiecare valoare.
        </p>
        <p>Lățimea unei borduri este indicat să fie exprimată în pixeli, fiind o valoare numerică.</p>
        <p>
            Stilurile pe care le poate avea o bordură sunt <span>punctat (dotted), solid, dublă (double)</span>, dar mai există și altele.
        </p>
        <p> Există o varietate de culori pe care le poate avea o bordură, neexistând niciun fel de restricție din acest punct de vedere.</p>

    </div>
    <div id="Padding" class="documentation">
        <h3>Padding</h3>
        <p>Padding-ul este spațiul dintre conținut și bordură. Acesta poate fi setat individual pentru fiecare laterală, folosind <span>padding-left, padding-right, padding-top, padding-bottom</span> sau se poate folosi proprietatea <span>padding</span>, care va seta cu valoarea specificată padding-ul pentru anumite laterale.</p>
        <p><span>De reținut!</span> Valoarea padding-ului poate fi exprimată folosind unități de măsură (precum px, em, rem), cu ajutorul procentelor sau poate fi setat <span>inherit</span>, adică va moșteni valoarea elementului părinte, dar nu se pot folosi valori negative.</p>
        <p>Alt lucru foarte important despre padding este că, atunci când un element are setată o valoare pentru lățime, padding-ul va fi adunat la valoarea lățimii. Dacă se dorește păstrarea valorii lățimii, se va folosi proprietatea <span>box-sizing</span>.</p>
    </div>
    <div id="Margin" class="documentation">
        <h3>Margin</h3>
        <p>Marginea unui element este o proprietatea folosită pentru a crea spațiu între elemente.</p>
        <p><span>De reținut!</span> Valoarea pentru margine poate fi setată folosind unități de măsură (precum px, em, rem), cu ajutorul procentelor, poate fi setată ca fiind <span>inherit</span>, adică va moșteni valoarea elementului părinte sau poate fi declarată <span>auto</span>, caz în care browser-ul o va calcula. </p>

    </div>
    <div id="Position" class="documentation">
        <h3>Position</h3>
        <p>Proprietatea <span>position</span> specifică modul în care un element este poziționat, fiind afectat și modul în care sunt poziționate și celelalte elemente.</p>
        <p><span>De reținut!</span> Există 5 valori pe care le poate avea această proprietate și anume, <span>static, relative, fixed, absolute, sticky</span>. Valoarea default este <span>static</span>. Cele mai folosite valori sunt absolute și relative. Absolute va poziționa elementul în raport cu primul părinte care are poziția diferită de cea default, iar relative îl va poziționa în raport cu poziția sa default. Proprietățile absolut necesare atunci când se folosește <span>position: absolute;</span> sunt <span>top, right, bottom și left</span>.
        </p>
        <p>Valoarea <span>sticky</span> a unui element va lipi acel element de un altul atunci când are loc acțiunea de scroll, iar <span>fixed</span> va plasa elementul într-o poziție fixă indiferent de modificările ce au loc în pagină.</p>

    </div>
    <div id="MediaQuery" class="documentation">
        <h3>Media Query</h3>
        <p>Media query-urile sunt folosite pentru a realiza un site <span>responsive</span>, în sensul că acesta își va modifica proprietățile în funcție de dimensiunea dispozitivului de pe care este accesat.</p>
        <p>Sintaxa standard este <span>@media (breakpoint) {proprietăți modificate} </span>, unde breakpoint reprezintă dimensiunea ecranului de la care se aplică acele proprietăți modificate aflate între acolade. De obicei, breakpoint-ul se setează folosind proprietățile <span>max-width</span> și <span>min-width</span>.</p>
        <p class="final_paragraph"> Daca doresti sa-ti testezi cunostintele:</p>
        <a href="./chooseCSS.php" id="nivel--btn"> Alege nivel</a>
    </div>

    <script src="documentatie.js"></script>
</body>

</html>