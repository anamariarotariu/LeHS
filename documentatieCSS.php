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
        <p>Principalul rol al fi??ierelor CSS este de a stiliza fi??ierele HTML. ??ns??, acest lucru este posibil doar dac?? se vor conecta cele dou?? fi??iere. Acest lucru se face cu ajutorul tag-ului <i>link</i>, la care vom ad??uga atributul <i>href=</i>, iar ??ntre ghilimele vom introduce numele fi??ierului CSS. Astfel, toate caracteristicile componentelor HTML se vor aplica acestora.</p>
        <p>
            <span>De re??inut!</span>
            Tag-ul link este indicat s?? fie plasat ??n partea de head a documentului HTML, deoarece este un element care nu este vizibil ??n con??inutul propriu-zis al paginii.
        </p>

    </div>
    <div id="Selectors" class="documentation">
        <h3>Selectori</h3>
        <p>Pentru a putea stiliza elementele HTML, acestea trebuie selectate. Acest lucru este posibil fie ??n func??ie de tag-ul pe care ??l are elementul respectiv, fie adaug??ndu-i o clas?? sau un id. Exist?? ??i un selector special, <span>*</span>, care selecteaz?? toate elementele aflate ??n pagin??. ??n cazul ??n care elementului ??i va fi adaugat?? o clas??, sintaxa din fi??ierul CSS este <span>.nume_clas??</span> , iar dac?? se adaug?? un id, sintaxa este <span>#nume_id</span>. Ambele structuri vor fi urmate de acolade ??n interiorul c??rora se vor afla propriet????ile necesare stiliz??rii ??mpreun?? cu valorile.</p>
        <p>
            <span>De re??inut!</span>
            Este indicat?? folosirea clasei atunci c??nd dorim s?? stiliz??m elemente multiple ??i a id-ului atunci c??nd caracteristicile sunt aplicate unui singur element.
        </p>
        <p>De asemenea, unui element i se pot ad??uga mai multe clase sau at??t clase, c??t ??i id-uri ??n func??ie de stilizarea pe care dorim s?? i-o aplic??m. Pentru a aplica acela??i stil mai multor elemente le putem concatena folosind <span>,</span> . Pentru a selecta un element care se afl?? ??n interiorul unui element care are o clas?? sau un id anume se va scrie: <span> .nume_clasa_parinte/#id_element_parinte .nume_clasa_copil/#id_copil</span>.</p>

    </div>
    <div id="Specificity" class="documentation">
        <h3>Specificitate</h3>
        <p>Specificitatea este un aspect important al CSS-ului ??n momentul ??n care unui element i se pot realiza mai multe stiliz??ri pe baza selec??iei pe baza claselor, id-urilor ??i a tag-urilor. Aceasta poate fi privit?? ca pe un scor pe care ??l prime??te fiecare declarare a stiliz??rii care se calculeaz?? pe baza unei ierarhii.</p>
        <p>
            Cel mai specific mod de a ad??uga o stilizare unui element este s?? o facem inline ??n codul HTML. Totu??i, aceast?? metod??
            nu este recomandat?? din cauza faptului c?? apare foarte mult cod duplicat, iar ??n cazul ??n care se dore??te modificarea
            unei propriet????i sau a valorii acesteia, este dificil s?? se corecteze ??n fiecare loc.
            Urm??torul ca specificitate este id-ul, deoarece este unic pentru fiecare element.
        </p>

        <p> Elementul al treilea ??n ierarhie este alc??tuit din clase, pseudo-clase (precum <span>hover, focus, active</span>) sau
            atribute. Cel de-al patrulea element este tag-ul ??i pseudo-elementele, precum <span>before, after</span>. </p>
        <p>Cel mai pu??in specific element este selectorul universal, *. Pentru a calcula specificitatea, se poate folosi un calculator special creat pentru acest lucru.</p>

    </div>
    <div id="Border" class="documentation">
        <h3>Border</h3>
        <p>
            Pentru a eviden??ia un element i se poate ad??uga o bordur??. Pentru a face asta se folose??te proprietatea <span>border</span>, care poate lua valorile <span>l????ime, tipul de bordur?? (este absolut necesar) ??i culoarea acesteia.</span>. Putem opta pentru a ad??uga bordur?? doar pe laterala unui element, folosind propriet????ile <span>border-left, border-right, border-top, border-bottom</span>, dar ??n cazul ??n care nu este specificat, se va ad??uga pe toate lateralele. Vom detalia pu??in fiecare valoare.
        </p>
        <p>L????imea unei borduri este indicat s?? fie exprimat?? ??n pixeli, fiind o valoare numeric??.</p>
        <p>
            Stilurile pe care le poate avea o bordur?? sunt <span>punctat (dotted), solid, dubl?? (double)</span>, dar mai exist?? ??i altele.
        </p>
        <p> Exist?? o varietate de culori pe care le poate avea o bordur??, neexist??nd niciun fel de restric??ie din acest punct de vedere.</p>

    </div>
    <div id="Padding" class="documentation">
        <h3>Padding</h3>
        <p>Padding-ul este spa??iul dintre con??inut ??i bordur??. Acesta poate fi setat individual pentru fiecare lateral??, folosind <span>padding-left, padding-right, padding-top, padding-bottom</span> sau se poate folosi proprietatea <span>padding</span>, care va seta cu valoarea specificat?? padding-ul pentru anumite laterale.</p>
        <p><span>De re??inut!</span> Valoarea padding-ului poate fi exprimat?? folosind unit????i de m??sur?? (precum px, em, rem), cu ajutorul procentelor sau poate fi setat <span>inherit</span>, adic?? va mo??teni valoarea elementului p??rinte, dar nu se pot folosi valori negative.</p>
        <p>Alt lucru foarte important despre padding este c??, atunci c??nd un element are setat?? o valoare pentru l????ime, padding-ul va fi adunat la valoarea l????imii. Dac?? se dore??te p??strarea valorii l????imii, se va folosi proprietatea <span>box-sizing</span>.</p>
    </div>
    <div id="Margin" class="documentation">
        <h3>Margin</h3>
        <p>Marginea unui element este o proprietatea folosit?? pentru a crea spa??iu ??ntre elemente.</p>
        <p><span>De re??inut!</span> Valoarea pentru margine poate fi setat?? folosind unit????i de m??sur?? (precum px, em, rem), cu ajutorul procentelor, poate fi setat?? ca fiind <span>inherit</span>, adic?? va mo??teni valoarea elementului p??rinte sau poate fi declarat?? <span>auto</span>, caz ??n care browser-ul o va calcula. </p>

    </div>
    <div id="Position" class="documentation">
        <h3>Position</h3>
        <p>Proprietatea <span>position</span> specific?? modul ??n care un element este pozi??ionat, fiind afectat ??i modul ??n care sunt pozi??ionate ??i celelalte elemente.</p>
        <p><span>De re??inut!</span> Exist?? 5 valori pe care le poate avea aceast?? proprietate ??i anume, <span>static, relative, fixed, absolute, sticky</span>. Valoarea default este <span>static</span>. Cele mai folosite valori sunt absolute ??i relative. Absolute va pozi??iona elementul ??n raport cu primul p??rinte care are pozi??ia diferit?? de cea default, iar relative ??l va pozi??iona ??n raport cu pozi??ia sa default. Propriet????ile absolut necesare atunci c??nd se folose??te <span>position: absolute;</span> sunt <span>top, right, bottom ??i left</span>.
        </p>
        <p>Valoarea <span>sticky</span> a unui element va lipi acel element de un altul atunci c??nd are loc ac??iunea de scroll, iar <span>fixed</span> va plasa elementul ??ntr-o pozi??ie fix?? indiferent de modific??rile ce au loc ??n pagin??.</p>

    </div>
    <div id="MediaQuery" class="documentation">
        <h3>Media Query</h3>
        <p>Media query-urile sunt folosite pentru a realiza un site <span>responsive</span>, ??n sensul c?? acesta ????i va modifica propriet????ile ??n func??ie de dimensiunea dispozitivului de pe care este accesat.</p>
        <p>Sintaxa standard este <span>@media (breakpoint) {propriet????i modificate} </span>, unde breakpoint reprezint?? dimensiunea ecranului de la care se aplic?? acele propriet????i modificate aflate ??ntre acolade. De obicei, breakpoint-ul se seteaz?? folosind propriet????ile <span>max-width</span> ??i <span>min-width</span>.</p>
        <p class="final_paragraph"> Daca doresti sa-ti testezi cunostintele:</p>
        <a href="./chooseCSS.php" id="nivel--btn"> Alege nivel</a>
    </div>

    <script src="documentatie.js"></script>
</body>

</html>