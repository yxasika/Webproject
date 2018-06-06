<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online-Journal</title>
    <meta charset="utf-8" lang="de">
    <meta name="viewport" content="width = device-width, height = device-height, initial-scale=1.0,
  user-scalable=yes">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/loginPopup.css">
    <script rel="script" type="text/javascript" src="../scripts/loginPopup.js"></script>
    <script rel="script" type="text/javascript" src="../scripts/jquery.rotate.1-1.js"></script>
    <script type="text/javascript" src="../scripts/search.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/search.css">
</head>

<body>
<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php"><img src="../src/imgs/logo.png" alt="logo" align="center"
                                                 onclick="$(this).rotate(45)"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="archive.php">ARCHIVE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">PROFILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="editor.php">EDITOR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="author.php">AUTHOR</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <form class="form-inline my-2 my-lg-0" id="searchForm">
                <input class="searchInput form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                       id="searchInput">
            </form>
            <a class="btn btn-primary icon my-2 mr-2" role="button" href="notification.php">
                <i class="material-icons">notifications</i><span class="badge">4</span></a>
            <button class="btn btn-primary my-2 mr-2"
                    onclick="document.getElementById('login-wrapper').style.display='block'">LOG IN
            </button>
            <button class="btn btn-primary my-2 sm-0"
                    onclick="document.getElementById('register-wrapper').style.display='block'">SIGN UP
            </button>
        </ul>
    </div>
</nav>
<--Login Form-->
<div id="login-wrapper" class="modali">
    <form class="modali-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('login-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <i alt="Avatar" class="avatar material-icons">account_circle</i>
            <h1 style="text-align:center">Log In</h1>
        </div>
        <div class="container">
            <input type="text" placeholder="Enter E-Mail" name="uname">
            <input type="password" placeholder="Enter Password" name="psw">
            <button class="popupBtn btn btn-primary my-2 my-sm-0" type="submit">Log In</button>
            <input type="checkbox" style="margin:26px 30px;"> Remember me
            <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
        </div>
    </form>
</div>

<--Register Form-->
<div id="register-wrapper" class="modali">
    <form class="modali-content animate">
        <div class="imgcontainer">
            <span onclick="document.getElementById('register-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <i alt="Avatar" class="avatar material-icons">account_circle</i>
            <h1 style="text-align:center">Registration</h1>
        </div>
        <div class="container">
            <input type="text" placeholder="Enter First Name" name="fname">
            <input type="text" placeholder="Enter Last Name" name="lname">
            <input type="text" placeholder="Enter E-Mail" name="email">
            <input type="password" placeholder="Enter Password" name="psw">
            <input type="password" placeholder="Repeat Password" name="psw2">
            <button class="popupBtn btn btn-primary my-2 my-sm-0" type="submit">Register</button>
        </div>
    </form>

</div>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <h1>Impressum & Co.</h1>
                <hr>
                <h4>Impressum</h4> Angaben gem. § 5 TMG
                <br>
                <br>
                <h5>Betreiber und Kontakt:</h5>
                Max Mustermann
                <br>
                <br> Musterstr. 1
                <br> 12345 Musterstadt
                <br>
                <br> Telefonnummer: 01234-567890
                <br> E-Mail-Adresse: max.muster@dpad.com
                <br>
                <hr>
                <h4>Disclaimer</h4>
                <h5>Verantwortlicher für journalistisch-redaktionelle Inhalte gem. § 55 II RstV:</h5>
                DPAD Inc
                <br>
                <br>
                <h5>Bilder und Grafiken:</h5>
                Angaben der Quelle für verwendetes Bilder- und Grafikmaterial:
                <br>
                tbd
                <br>
                <br>
                <h5>Online-Streitbeilegung gemäß Art. 14 Abs. 1 ODR-VO</h5>
                Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die Sie unter
                <a href='http://ec.europa.eu/consumers/odr/'>http://ec.europa.eu/consumers/odr/</a> finden.
                <br>
                <br>
                <h5>Haftung für Inhalte</h5>
                <p>Die Erstellung der Inhalte dieser Webseite erfolgte mit größtmöglicher Sorgfalt. Allerdings können
                    wir keine Gewähr für die Vollständigkeit der bereitgestellten Inhalte, ihre Aktualität sowie
                    Richtigkeit übernehmen. Gem. §§ 8 - 10 TMG trifft
                    uns als Dienstanbieter keine Pflicht, fremde Informationen, die übermittelt oder gespeichert wurden,
                    zu überwachen oder nach Anhaltspunkten und Umständen zu forschen, die die Rechtswidrigkeit von
                    Tätigkeiten und Informationen indizieren.</p>
                <p>Eine Verpflichtung unsererseits zur Nutzungssperrung von Inhalten im Rahmen der allgemeinen Gesetze
                    bleibt hiervon stets unberührt. Diese Haftung kommt jedoch erst im Moment der Kenntnisnahme einer
                    konkreten Verletzung von Rechten in Frage.
                    Sollten uns Rechtsverletzungen bekannt werden, so sind die entsprechenden Inhalte von uns
                    unverzüglich zu entfernen.</p>
                <p>Unsere Haftung für eigene Inhalte richtet sich, als Dienstanbieter, nach den allgemeinen
                    Gesetzen.</p>
                <br>
                <h5>Haftung für Links</h5>
                <p>Diese Webseite beinhaltet Verlinkungen zu Webseiten Dritter - sog. externe Links. Die Inhalte dieser
                    externen Links entziehen sich unserer Einflussnahme, sodass eine Gewähr für solche Inhalte
                    unsererseits nicht übernommen wird.</p>
                <p>Die Verantwortung liegt stets beim jeweiligen Betreiber der externen Seiten. Zum Zeitpunkt der
                    Verknüpfung der externen Links waren keine Rechtsverstöße ersichtlich. Die permanente Überwachung
                    fremder Inhalte auf Rechtsverstöße ohne konkrete
                    Hinweise ist uns nicht zumutbar.</p>
                <p>Sollten wir Kenntnis von Rechtsverletzungen erlangen, werden wir die entsprechenden externen Links
                    unverzüglich entfernen.</p>
                <br>
                <h5>Urheberrecht/Leistungsschutzrecht</h5>
                <p>Auf die vom Anbieter auf dieser Seite veröffentlichten Inhalte findet das deutsche Urheber und
                    Leistungsschutzrecht Anwendung. Sofern die Vervielfältigung, Bearbeitung, Verbreitung oder jegliche
                    andere Art der Verwertung außerhalb des deutschen
                    Urheber- und Leistungsschutzrechts liegt, bedarf es einer schriftlichen Zustimmung des jeweiligen
                    Erstellers. Unerlaubtes Kopieren oder Downloaden dieser Seiten ist ausschließlich für den privaten
                    Bereich, nicht jedoch für den kommerziellen,
                    erlaubt. Sofern nicht wir als Betreiber auch als Ersteller der Inhalte fungieren, werden die
                    Urheberrechte von Dritten beachtet. Wir sind stets bemüht solche Inhalte als Inhalte Dritter zu
                    kennzeichnen. Wir bitten Sie für den Fall, dass Ihnen
                    trotz sorgfältiger Arbeit unsererseits, eine Urheberrechtsverletzung auffällt, uns entsprechend
                    darauf hinzuweisen, sodass die Entfernung dieser Inhalte umgehend veranlasst werden kann.</p>
                <hr>
                <h4>Datenschutzerklärung</h4>
                <h5 id="dsg-general-intro"></h5>
                <p>Diese Datenschutzerklärung klärt Sie über die Art, den Umfang und Zweck der Verarbeitung von
                    personenbezogenen Daten (nachfolgend kurz „Daten“) innerhalb unseres Onlineangebotes und der mit ihm
                    verbundenen Webseiten, Funktionen und Inhalte sowie
                    externen Onlinepräsenzen, wie z.B. unser Social Media Profile auf (nachfolgend gemeinsam bezeichnet
                    als „Onlineangebot“). Im Hinblick auf die verwendeten Begrifflichkeiten, wie z.B. „Verarbeitung“
                    oder „Verantwortlicher“ verweisen wir auf
                    die Definitionen im Art. 4 der Datenschutzgrundverordnung (DSGVO).<br>
                </p>
                <h5 id="dsg-general-datatype">Arten der verarbeiteten Daten:</h5>
                <p>- Bestandsdaten (z.B., Namen, Adressen).<br> - Kontaktdaten (z.B., E-Mail, Telefonnummern).<br> -
                    Inhaltsdaten (z.B., Texteingaben, Fotografien, Videos).<br> - Nutzungsdaten (z.B., besuchte
                    Webseiten, Interesse an Inhalten, Zugriffszeiten).<br> - Meta-/Kommunikationsdaten (z.B.,
                    Geräte-Informationen, IP-Adressen).<br>
                </p>
                <h5 id="dsg-general-datasubjects">Kategorien betroffener Personen</h5>
                <p>Besucher und Nutzer des Onlineangebotes (Nachfolgend bezeichnen wir die betroffenen Personen
                    zusammenfassend auch als „Nutzer“).<br>
                </p>
                <h5 id="dsg-general-purpose">Zweck der Verarbeitung</h5>
                <p>- Zurverfügungstellung des Onlineangebotes, seiner Funktionen und Inhalte.<br> - Beantwortung von
                    Kontaktanfragen und Kommunikation mit Nutzern.<br> - Sicherheitsmaßnahmen.<br> -
                    Reichweitenmessung/Marketing<br>
                    <span class="tsmcom"></span></p>
                <h5 id="dsg-general-terms">Verwendete Begrifflichkeiten </h5>
                <p>„Personenbezogene Daten“ sind alle Informationen, die sich auf eine identifizierte oder
                    identifizierbare natürliche Person (im Folgenden „betroffene Person“) beziehen; als identifizierbar
                    wird eine natürliche Person angesehen, die direkt oder
                    indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu
                    Standortdaten, zu einer Online-Kennung (z.B. Cookie) oder zu einem oder mehreren besonderen
                    Merkmalen identifiziert werden kann, die Ausdruck
                    der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen oder
                    sozialen Identität dieser natürlichen Person sind.<br>
                    <br> „Verarbeitung“ ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte Vorgang oder
                    jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten. Der Begriff reicht weit und
                    umfasst praktisch jeden Umgang mit Daten.<br>
                    <br> „Pseudonymisierung“ die Verarbeitung personenbezogener Daten in einer Weise, dass die
                    personenbezogenen Daten ohne Hinzuziehung zusätzlicher Informationen nicht mehr einer spezifischen
                    betroffenen Person zugeordnet werden können, sofern
                    diese zusätzlichen Informationen gesondert aufbewahrt werden und technischen und organisatorischen
                    Maßnahmen unterliegen, die gewährleisten, dass die personenbezogenen Daten nicht einer
                    identifizierten oder identifizierbaren natürlichen Person
                    zugewiesen werden.<br>
                    <br> „Profiling“ jede Art der automatisierten Verarbeitung personenbezogener Daten, die darin
                    besteht, dass diese personenbezogenen Daten verwendet werden, um bestimmte persönliche Aspekte, die
                    sich auf eine natürliche Person beziehen, zu
                    bewerten, insbesondere um Aspekte bezüglich Arbeitsleistung, wirtschaftliche Lage, Gesundheit,
                    persönliche Vorlieben, Interessen, Zuverlässigkeit, Verhalten, Aufenthaltsort oder Ortswechsel
                    dieser natürlichen Person zu analysieren oder vorherzusagen.<br>
                    <br> Als „Verantwortlicher“ wird die natürliche oder juristische Person, Behörde, Einrichtung oder
                    andere Stelle, die allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von
                    personenbezogenen Daten entscheidet, bezeichnet.<br>
                    <br> „Auftragsverarbeiter“ eine natürliche oder juristische Person, Behörde, Einrichtung oder andere
                    Stelle, die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet.<br>
                </p>
                <h5 id="dsg-general-legalbasis">Maßgebliche Rechtsgrundlagen</h5>
                <p>Nach Maßgabe des Art. 13 DSGVO teilen wir Ihnen die Rechtsgrundlagen unserer Datenverarbeitungen mit.
                    Sofern die Rechtsgrundlage in der Datenschutzerklärung nicht genannt wird, gilt Folgendes: Die
                    Rechtsgrundlage für die Einholung von Einwilligungen
                    ist Art. 6 Abs. 1 lit. a und Art. 7 DSGVO, die Rechtsgrundlage für die Verarbeitung zur Erfüllung
                    unserer Leistungen und Durchführung vertraglicher Maßnahmen sowie Beantwortung von Anfragen ist Art.
                    6 Abs. 1 lit. b DSGVO, die Rechtsgrundlage
                    für die Verarbeitung zur Erfüllung unserer rechtlichen Verpflichtungen ist Art. 6 Abs. 1 lit. c
                    DSGVO, und die Rechtsgrundlage für die Verarbeitung zur Wahrung unserer berechtigten Interessen ist
                    Art. 6 Abs. 1 lit. f DSGVO. Für den Fall, dass
                    lebenswichtige Interessen der betroffenen Person oder einer anderen natürlichen Person eine
                    Verarbeitung personenbezogener Daten erforderlich machen, dient Art. 6 Abs. 1 lit. d DSGVO als
                    Rechtsgrundlage.</p>
                <h5 id="dsg-general-securitymeasures">Sicherheitsmaßnahmen</h5>
                <p>Wir treffen nach Maßgabe des Art. 32 DSGVO unter Berücksichtigung des Stands der Technik, der
                    Implementierungskosten und der Art, des Umfangs, der Umstände und der Zwecke der Verarbeitung sowie
                    der unterschiedlichen Eintrittswahrscheinlichkeit
                    und Schwere des Risikos für die Rechte und Freiheiten natürlicher Personen, geeignete technische und
                    organisatorische Maßnahmen, um ein dem Risiko angemessenes Schutzniveau zu gewährleisten.<br>
                    <br> Zu den Maßnahmen gehören insbesondere die Sicherung der Vertraulichkeit, Integrität und
                    Verfügbarkeit von Daten durch Kontrolle des physischen Zugangs zu den Daten, als auch des sie
                    betreffenden Zugriffs, der Eingabe, Weitergabe, der
                    Sicherung der Verfügbarkeit und ihrer Trennung. Des Weiteren haben wir Verfahren eingerichtet, die
                    eine Wahrnehmung von Betroffenenrechten, Löschung von Daten und Reaktion auf Gefährdung der Daten
                    gewährleisten. Ferner berücksichtigen wir
                    den Schutz personenbezogener Daten bereits bei der Entwicklung, bzw. Auswahl von Hardware, Software
                    sowie Verfahren, entsprechend dem Prinzip des Datenschutzes durch Technikgestaltung und durch
                    datenschutzfreundliche Voreinstellungen (Art.
                    25 DSGVO).<br>
                </p>
                <h5 id="dsg-general-coprocessing">Zusammenarbeit mit Auftragsverarbeitern und Dritten</h5>
                <p>Sofern wir im Rahmen unserer Verarbeitung Daten gegenüber anderen Personen und Unternehmen
                    (Auftragsverarbeitern oder Dritten) offenbaren, sie an diese übermitteln oder ihnen sonst Zugriff
                    auf die Daten gewähren, erfolgt dies nur auf Grundlage
                    einer gesetzlichen Erlaubnis (z.B. wenn eine Übermittlung der Daten an Dritte, wie an
                    Zahlungsdienstleister, gem. Art. 6 Abs. 1 lit. b DSGVO zur Vertragserfüllung erforderlich ist), Sie
                    eingewilligt haben, eine rechtliche Verpflichtung dies
                    vorsieht oder auf Grundlage unserer berechtigten Interessen (z.B. beim Einsatz von Beauftragten,
                    Webhostern, etc.). <br>
                    <br> Sofern wir Dritte mit der Verarbeitung von Daten auf Grundlage eines sog.
                    „Auftragsverarbeitungsvertrages“ beauftragen, geschieht dies auf Grundlage des Art. 28 DSGVO.</p>
                <h5 id="dsg-general-thirdparty">Übermittlungen in Drittländer</h5>
                <p>Sofern wir Daten in einem Drittland (d.h. außerhalb der Europäischen Union (EU) oder des Europäischen
                    Wirtschaftsraums (EWR)) verarbeiten oder dies im Rahmen der Inanspruchnahme von Diensten Dritter
                    oder Offenlegung, bzw. Übermittlung von Daten
                    an Dritte geschieht, erfolgt dies nur, wenn es zur Erfüllung unserer (vor)vertraglichen Pflichten,
                    auf Grundlage Ihrer Einwilligung, aufgrund einer rechtlichen Verpflichtung oder auf Grundlage
                    unserer berechtigten Interessen geschieht. Vorbehaltlich
                    gesetzlicher oder vertraglicher Erlaubnisse, verarbeiten oder lassen wir die Daten in einem
                    Drittland nur beim Vorliegen der besonderen Voraussetzungen der Art. 44 ff. DSGVO verarbeiten. D.h.
                    die Verarbeitung erfolgt z.B. auf Grundlage besonderer
                    Garantien, wie der offiziell anerkannten Feststellung eines der EU entsprechenden Datenschutzniveaus
                    (z.B. für die USA durch das „Privacy Shield“) oder Beachtung offiziell anerkannter spezieller
                    vertraglicher Verpflichtungen (so genannte „Standardvertragsklauseln“).</p>
                <h5 id="dsg-general-rightssubject">Rechte der betroffenen Personen</h5>
                <p>Sie haben das Recht, eine Bestätigung darüber zu verlangen, ob betreffende Daten verarbeitet werden
                    und auf Auskunft über diese Daten sowie auf weitere Informationen und Kopie der Daten entsprechend
                    Art. 15 DSGVO.<br>
                    <br> Sie haben entsprechend. Art. 16 DSGVO das Recht, die Vervollständigung der Sie betreffenden
                    Daten oder die Berichtigung der Sie betreffenden unrichtigen Daten zu verlangen.<br>
                    <br> Sie haben nach Maßgabe des Art. 17 DSGVO das Recht zu verlangen, dass betreffende Daten
                    unverzüglich gelöscht werden, bzw. alternativ nach Maßgabe des Art. 18 DSGVO eine Einschränkung der
                    Verarbeitung der Daten zu verlangen.<br>
                    <br> Sie haben das Recht zu verlangen, dass die Sie betreffenden Daten, die Sie uns bereitgestellt
                    haben nach Maßgabe des Art. 20 DSGVO zu erhalten und deren Übermittlung an andere Verantwortliche zu
                    fordern. <br>
                    <br> Sie haben ferner gem. Art. 77 DSGVO das Recht, eine Beschwerde bei der zuständigen
                    Aufsichtsbehörde einzureichen.</p>
                <h5 id="dsg-general-revokeconsent">Widerrufsrecht</h5>
                <p>Sie haben das Recht, erteilte Einwilligungen gem. Art. 7 Abs. 3 DSGVO mit Wirkung für die Zukunft zu
                    widerrufen</p>
                <h5 id="dsg-general-object">Widerspruchsrecht</h5>
                <p>Sie können der künftigen Verarbeitung der Sie betreffenden Daten nach Maßgabe des Art. 21 DSGVO
                    jederzeit widersprechen. Der Widerspruch kann insbesondere gegen die Verarbeitung für Zwecke der
                    Direktwerbung erfolgen.</p>
                <h5 id="dsg-general-cookies">Cookies und Widerspruchsrecht bei Direktwerbung</h5>
                <p>Als „Cookies“ werden kleine Dateien bezeichnet, die auf Rechnern der Nutzer gespeichert werden.
                    Innerhalb der Cookies können unterschiedliche Angaben gespeichert werden. Ein Cookie dient primär
                    dazu, die Angaben zu einem Nutzer (bzw. dem Gerät
                    auf dem das Cookie gespeichert ist) während oder auch nach seinem Besuch innerhalb eines
                    Onlineangebotes zu speichern. Als temporäre Cookies, bzw. „Session-Cookies“ oder „transiente
                    Cookies“, werden Cookies bezeichnet, die gelöscht werden,
                    nachdem ein Nutzer ein Onlineangebot verlässt und seinen Browser schließt. In einem solchen Cookie
                    kann z.B. der Inhalt eines Warenkorbs in einem Onlineshop oder ein Login-Status gespeichert werden.
                    Als „permanent“ oder „persistent“ werden
                    Cookies bezeichnet, die auch nach dem Schließen des Browsers gespeichert bleiben. So kann z.B. der
                    Login-Status gespeichert werden, wenn die Nutzer diese nach mehreren Tagen aufsuchen. Ebenso können
                    in einem solchen Cookie die Interessen der
                    Nutzer gespeichert werden, die für Reichweitenmessung oder Marketingzwecke verwendet werden. Als
                    „Third-Party-Cookie“ werden Cookies bezeichnet, die von anderen Anbietern als dem Verantwortlichen,
                    der das Onlineangebot betreibt, angeboten
                    werden (andernfalls, wenn es nur dessen Cookies sind spricht man von „First-Party Cookies“).<br>
                    <br> Wir können temporäre und permanente Cookies einsetzen und klären hierüber im Rahmen unserer
                    Datenschutzerklärung auf.<br>
                    <br> Falls die Nutzer nicht möchten, dass Cookies auf ihrem Rechner gespeichert werden, werden sie
                    gebeten die entsprechende Option in den Systemeinstellungen ihres Browsers zu deaktivieren.
                    Gespeicherte Cookies können in den Systemeinstellungen
                    des Browsers gelöscht werden. Der Ausschluss von Cookies kann zu Funktionseinschränkungen dieses
                    Onlineangebotes führen.<br>
                    <br> Ein genereller Widerspruch gegen den Einsatz der zu Zwecken des Onlinemarketing eingesetzten
                    Cookies kann bei einer Vielzahl der Dienste, vor allem im Fall des Trackings, über die
                    US-amerikanische Seite <a
                            href="http://www.aboutads.info/choices/">http://www.aboutads.info/choices/</a> oder die
                    EU-Seite <a href="http://www.youronlinechoices.com/">http://www.youronlinechoices.com/</a> erklärt
                    werden. Des Weiteren kann die Speicherung von Cookies mittels deren Abschaltung in den Einstellungen
                    des Browsers erreicht werden.
                    Bitte beachten Sie, dass dann gegebenenfalls nicht alle Funktionen dieses Onlineangebotes genutzt
                    werden können.</p>
                <h5 id="dsg-general-erasure">Löschung von Daten</h5>
                <p>Die von uns verarbeiteten Daten werden nach Maßgabe der Art. 17 und 18 DSGVO gelöscht oder in ihrer
                    Verarbeitung eingeschränkt. Sofern nicht im Rahmen dieser Datenschutzerklärung ausdrücklich
                    angegeben, werden die bei uns gespeicherten Daten
                    gelöscht, sobald sie für ihre Zweckbestimmung nicht mehr erforderlich sind und der Löschung keine
                    gesetzlichen Aufbewahrungspflichten entgegenstehen. Sofern die Daten nicht gelöscht werden, weil sie
                    für andere und gesetzlich zulässige Zwecke
                    erforderlich sind, wird deren Verarbeitung eingeschränkt. D.h. die Daten werden gesperrt und nicht
                    für andere Zwecke verarbeitet. Das gilt z.B. für Daten, die aus handels- oder steuerrechtlichen
                    Gründen aufbewahrt werden müssen.<br>
                    <br> Nach gesetzlichen Vorgaben in Deutschland, erfolgt die Aufbewahrung insbesondere für 10 Jahre
                    gemäß §§ 147 Abs. 1 AO, 257 Abs. 1 Nr. 1 und 4, Abs. 4 HGB (Bücher, Aufzeichnungen, Lageberichte,
                    Buchungsbelege, Handelsbücher, für Besteuerung
                    relevanter Unterlagen, etc.) und 6 Jahre gemäß § 257 Abs. 1 Nr. 2 und 3, Abs. 4 HGB (Handelsbriefe).
                    <br>
                    <br> Nach gesetzlichen Vorgaben in Österreich erfolgt die Aufbewahrung insbesondere für 7 J gemäß §
                    132 Abs. 1 BAO (Buchhaltungsunterlagen, Belege/Rechnungen, Konten, Belege, Geschäftspapiere,
                    Aufstellung der Einnahmen und Ausgaben, etc.),
                    für 22 Jahre im Zusammenhang mit Grundstücken und für 10 Jahre bei Unterlagen im Zusammenhang mit
                    elektronisch erbrachten Leistungen, Telekommunikations-, Rundfunk- und Fernsehleistungen, die an
                    Nichtunternehmer in EU-Mitgliedstaaten erbracht
                    werden und für die der Mini-One-Stop-Shop (MOSS) in Anspruch genommen wird.</p>
                <p></p>
                <h5 id="dsg-registration">Registrierfunktion</h5>
                <p></p>
                <p><span class="ts-muster-content">Nutzer können ein Nutzerkonto anlegen. Im Rahmen der Registrierung werden die erforderlichen Pflichtangaben den Nutzern mitgeteilt und auf Grundlage des Art. 6 Abs. 1 lit. b DSGVO zu Zwecken der Bereitstellung des Nutzerkontos verarbeitet. Zu den verarbeiteten Daten gehören insbesondere die Login-Informationen (Name, Passwort sowie eine E-Mailadresse). Die im Rahmen der Registrierung eingegebenen Daten werden für die Zwecke der Nutzung des Nutzerkontos und dessen Zwecks verwendet. <br>
          <br>
          Die Nutzer können über Informationen, die für deren Nutzerkonto relevant sind, wie z.B. technische Änderungen, per E-Mail informiert werden. Wenn Nutzer ihr Nutzerkonto gekündigt haben, werden deren Daten im Hinblick auf das Nutzerkonto, vorbehaltlich einer gesetzlichen Aufbewahrungspflicht, gelöscht. Es obliegt den Nutzern, ihre Daten bei erfolgter Kündigung vor dem Vertragsende zu sichern. Wir sind berechtigt, sämtliche während der Vertragsdauer gespeicherten Daten des Nutzers unwiederbringlich zu löschen.<br>
          <br>
          Im Rahmen der Inanspruchnahme unserer Registrierungs- und Anmeldefunktionen sowie der Nutzung des Nutzerkontos, speichern wird die IP-Adresse und den Zeitpunkt der jeweiligen Nutzerhandlung. Die Speicherung erfolgt auf Grundlage unserer berechtigten Interessen, als auch der Nutzer an Schutz vor Missbrauch und sonstiger unbefugter Nutzung. Eine Weitergabe dieser Daten an Dritte erfolgt grundsätzlich nicht, außer sie ist zur Verfolgung unserer Ansprüche erforderlich oder es besteht hierzu besteht eine gesetzliche Verpflichtung gem. Art. 6 Abs. 1 lit. c DSGVO. Die IP-Adressen werden spätestens nach 7 Tagen anonymisiert oder gelöscht.<br>
          </span></p>
                <p></p>
                <h5 id="dsg-comments">Kommentare und Beiträge</h5>
                <p></p>
                <p><span class="ts-muster-content">Wenn Nutzer Kommentare oder sonstige Beiträge hinterlassen, können ihre IP-Adressen auf Grundlage unserer berechtigten Interessen im Sinne des Art. 6 Abs. 1 lit. f. DSGVO für 7 Tage gespeichert werden. Das erfolgt zu unserer Sicherheit, falls jemand in Kommentaren und Beiträgen widerrechtliche Inhalte hinterlässt (Beleidigungen, verbotene politische Propaganda, etc.). In diesem Fall können wir selbst für den Kommentar oder Beitrag belangt werden und sind daher an der Identität des Verfassers interessiert.<br>
          <br>
          Des Weiteren behalten wir uns vor, auf Grundlage unserer berechtigten Interessen gem. Art. 6 Abs. 1 lit. f. DSGVO, die Angaben der Nutzer zwecks Spamerkennung zu verarbeiten.<br>
          <br>
          Die im Rahmen der Kommentare und Beiträge angegebenen Daten, werden von uns bis zum Widerspruch der Nutzer dauerhaft gespeichert.</span>
                </p>
                <p></p>
                <h5 id="dsg-contact">Kontaktaufnahme</h5>
                <p></p>
                <p><span class="ts-muster-content">Bei der Kontaktaufnahme mit uns (z.B. per Kontaktformular, E-Mail, Telefon oder via sozialer Medien) werden die Angaben des Nutzers zur Bearbeitung der Kontaktanfrage und deren Abwicklung gem. Art. 6 Abs. 1 lit. b) DSGVO verarbeitet. Die Angaben der Nutzer können in einem Customer-Relationship-Management System ("CRM System") oder vergleichbarer Anfragenorganisation gespeichert werden.<br>
          <br>
          Wir löschen die Anfragen, sofern diese nicht mehr erforderlich sind. Wir überprüfen die Erforderlichkeit alle zwei Jahre; Ferner gelten die gesetzlichen Archivierungspflichten.</span>
                </p>
                <p></p>
                <h5 id="dsg-thirdparty-einleitung">Einbindung von Diensten und Inhalten Dritter</h5>
                <p></p>
                <p><span class="ts-muster-content">Wir setzen innerhalb unseres Onlineangebotes auf Grundlage unserer berechtigten Interessen (d.h. Interesse an der Analyse, Optimierung und wirtschaftlichem Betrieb unseres Onlineangebotes im Sinne des Art. 6 Abs. 1 lit. f. DSGVO) Inhalts- oder Serviceangebote von Drittanbietern ein, um deren Inhalte und Services, wie z.B. Videos oder Schriftarten einzubinden (nachfolgend einheitlich bezeichnet als “Inhalte”). <br>
          <br>
          Dies setzt immer voraus, dass die Drittanbieter dieser Inhalte, die IP-Adresse der Nutzer wahrnehmen, da sie ohne die IP-Adresse die Inhalte nicht an deren Browser senden könnten. Die IP-Adresse ist damit für die Darstellung dieser Inhalte erforderlich. Wir bemühen uns nur solche Inhalte zu verwenden, deren jeweilige Anbieter die IP-Adresse lediglich zur Auslieferung der Inhalte verwenden. Drittanbieter können ferner so genannte Pixel-Tags (unsichtbare Grafiken, auch als "Web Beacons" bezeichnet) für statistische oder Marketingzwecke verwenden. Durch die "Pixel-Tags" können Informationen, wie der Besucherverkehr auf den Seiten dieser Website ausgewertet werden. Die pseudonymen Informationen können ferner in Cookies auf dem Gerät der Nutzer gespeichert werden und unter anderem technische Informationen zum Browser und Betriebssystem, verweisende Webseiten, Besuchszeit sowie weitere Angaben zur Nutzung unseres Onlineangebotes enthalten, als auch mit solchen Informationen aus anderen Quellen verbunden werden.</span>
                </p>
                <p></p>
                <h5 id="dsg-facebook-plugin">Verwendung von Facebook Social Plugins</h5>
                <p></p>
                <p><span class="ts-muster-content">Wir nutzen auf Grundlage unserer berechtigten Interessen (d.h. Interesse an der Analyse, Optimierung und wirtschaftlichem Betrieb unseres Onlineangebotes im Sinne des Art. 6 Abs. 1 lit. f. DSGVO) Social Plugins ("Plugins") des sozialen Netzwerkes facebook.com, welches von der Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Irland betrieben wird ("Facebook"). Die Plugins können Interaktionselemente oder Inhalte (z.B. Videos, Grafiken oder Textbeiträge) darstellen und sind an einem der Facebook Logos erkennbar (weißes „f“ auf blauer Kachel, den Begriffen "Like", "Gefällt mir" oder einem „Daumen hoch“-Zeichen) oder sind mit dem Zusatz "Facebook Social Plugin" gekennzeichnet. Die Liste und das Aussehen der Facebook Social Plugins kann hier eingesehen werden:&nbsp;<a
                        target="_blank" href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a>.<br>
          <br>
          Facebook ist unter dem Privacy-Shield-Abkommen zertifiziert und bietet hierdurch eine Garantie, das europäische Datenschutzrecht einzuhalten (<a
                            target="_blank"
                            href="https://www.privacyshield.gov/participant?id=a2zt0000000GnywAAC&amp;status=Active">https://www.privacyshield.gov/participant?id=a2zt0000000GnywAAC&amp;status=Active</a>).<br>
          <br>
          Wenn ein Nutzer eine Funktion dieses Onlineangebotes aufruft, die ein solches Plugin enthält, baut sein Gerät eine direkte Verbindung mit den Servern von Facebook auf. Der Inhalt des Plugins wird von Facebook direkt an das Gerät des Nutzers übermittelt und von diesem in das Onlineangebot eingebunden. Dabei können aus den verarbeiteten Daten Nutzungsprofile der Nutzer erstellt werden. Wir haben daher keinen Einfluss auf den Umfang der Daten, die Facebook mit Hilfe dieses Plugins erhebt und informiert die Nutzer daher entsprechend unserem Kenntnisstand.<br>
          <br>
          Durch die Einbindung der Plugins erhält Facebook die Information, dass ein Nutzer die entsprechende Seite des Onlineangebotes aufgerufen hat. Ist der Nutzer bei Facebook eingeloggt, kann Facebook den Besuch seinem Facebook-Konto zuordnen. Wenn Nutzer mit den Plugins interagieren, zum Beispiel den Like Button betätigen oder einen Kommentar abgeben, wird die entsprechende Information von Ihrem Gerät direkt an Facebook übermittelt und dort gespeichert. Falls ein Nutzer kein Mitglied von Facebook ist, besteht trotzdem die Möglichkeit, dass Facebook seine IP-Adresse in Erfahrung bringt und speichert. Laut Facebook wird in Deutschland nur eine anonymisierte IP-Adresse gespeichert.<br>
          <br>
          Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook sowie die diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz der Privatsphäre der Nutzer, können diese den Datenschutzhinweisen von Facebook entnehmen:&nbsp;<a
                            target="_blank" href="https://www.facebook.com/about/privacy/">https://www.facebook.com/about/privacy/</a>.<br>
          <br>
          Wenn ein Nutzer Facebookmitglied ist und nicht möchte, dass Facebook über dieses Onlineangebot Daten über ihn sammelt und mit seinen bei Facebook gespeicherten Mitgliedsdaten verknüpft, muss er sich vor der Nutzung unseres Onlineangebotes bei Facebook ausloggen und seine Cookies löschen. Weitere Einstellungen und Widersprüche zur Nutzung von Daten für Werbezwecke, sind innerhalb der Facebook-Profileinstellungen möglich:&nbsp;<a
                            target="_blank" href="https://www.facebook.com/settings?tab=ads">https://www.facebook.com/settings?tab=ads</a> &nbsp;oder über die US-amerikanische Seite&nbsp;<a
                            target="_blank"
                            href="http://www.aboutads.info/choices/">http://www.aboutads.info/choices/</a> &nbsp;oder die EU-Seite&nbsp;<a
                            target="_blank"
                            href="http://www.youronlinechoices.com/">http://www.youronlinechoices.com/</a>. Die Einstellungen erfolgen plattformunabhängig, d.h. sie werden für alle Geräte, wie Desktopcomputer oder mobile Geräte übernommen.</span>
                </p>
                <p></p>
                <h5 id="dsg-thirdparty-twitter">Twitter</h5>
                <p></p>
                <p><span class="ts-muster-content">Innerhalb unseres Onlineangebotes können Funktionen und Inhalte des Dienstes Twitter, angeboten durch die Twitter Inc., 1355 Market Street, Suite 900, San Francisco, CA 94103, USA, eingebunden werden. Hierzu können z.B. Inhalte wie Bilder, Videos oder Texte und Schaltflächen gehören, mit denen Nutzer Ihr Gefallen betreffend die Inhalte kundtun, den Verfassern der Inhalte oder unsere Beiträge abonnieren können. Sofern die Nutzer Mitglieder der Plattform Twitter sind, kann Twitter den Aufruf der o.g. Inhalte und Funktionen den dortigen Profilen der Nutzer zuordnen. Twitter ist unter dem Privacy-Shield-Abkommen zertifiziert und bietet hierdurch eine Garantie, das europäische Datenschutzrecht einzuhalten (<a
                        target="_blank"
                        href="https://www.privacyshield.gov/participant?id=a2zt0000000TORzAAO&amp;status=Active">https://www.privacyshield.gov/participant?id=a2zt0000000TORzAAO&amp;status=Active</a>). Datenschutzerklärung: <a
                        target="_blank" href="https://twitter.com/de/privacy">https://twitter.com/de/privacy</a>, Opt-Out: <a
                        target="_blank"
                        href="https://twitter.com/personalization">https://twitter.com/personalization</a>.</span></p>
                <hr>
                <i>Das Impressum, der Disclaimer und die Datenschutzerklärung sind zum Teil nur zu Musterzwecken
                    erstellt worden.</i>
            </div>
        </div>
    </div>
</main>
<footer class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="col">
        <div class="row">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-center">
                    <a class="nav-link" href="impressum.php">IMPRESSUM</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <p class="text-secondary  mx-auto">&copy; 2018 DPAD</p>
        </div>
    </div>
</footer>
</body>

</html>
