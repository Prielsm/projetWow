<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Donjons/Raid</title>

    <!-- BOOTSTRAP -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <!-- ICONES -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <!-- POLICE -->
    <link rel="stylesheet" href="fonts/Saudagar/stylesheet.css" />

    
    <!-- MON STYLE -->
    <link rel="stylesheet" href="style_donjon.css" />
    <!-- ACCES AUX INFOS DE WOWHEAD-->
    <script>
      const whTooltips = {
        colorLinks: true,
        iconizeLinks: true,
        renameLinks: false,
      };
    </script>
    <script src="https://wow.zamimg.com/widgets/power.js"></script>
  </head>

  <body class="body_donjons">
    <!-- implémentation des drops des donjons -->
    <?php
      // include "./classesPHP/DropDonjon.class.php";
      

    ?>
    
    
    <!-- fleche du haut -->
    <a href="#haut_page"><i class="fas fa-chevron-circle-up fleche"></i></a>

    <!-- Menu -->
    <div class="menu">
      <h1>Menu</h1>
      
      <!-- Donjon de la tempête -->

      <div class="d-flex">
        <p>Donjon de la tempête:</p>
        <button id="btnTempete">
          <i class="flecheMenu fas fa-caret-down"></i>
        </button>
      </div>

      
      <ul id="ulTempete" class="hide">
      <?php    
        function creerMenuListe($href_name, $item, $nom)
        {
            echo "<li><a href='#".$href_name."' data-wowhead='item=".$item."'>".$nom."</a></li>";
        }   
        foreach ($donjonTempete as $key => $value) {
          $href = $value->href_name;          
          // $value->creerMenuListe($href, $value->getItem(), $value->nom);
        }
      ?>
      </ul>

      <!-- <ul id="ulTempete" class="hide">
        <li>
          <a href="#cendres_alar" data-wowhead="item=32458">Cendres d'Al'ar</a>
        </li>
        <li>
          <a href="#jeune_faucon_phenix" data-wowhead="item=97557"
            >Jeune faucon-phénix</a
          >
        </li>
        <li>
          <a href="#saccageur_de_poche" data-wowhead="item=97555"
            >Saccageur de poche</a
          >
        </li>
        <li>
          <a href="#implorateur_du_vide" data-wowhead="item=97556"
            >Implorateur du Vide inférieur</a
          >
        </li>
        <li>
          <a href="#baton_ethereum" data-wowhead="item=29981"
            >Bâton de vie de l'Ethereum</a
          >
        </li>
        <li>
          <a href="#tranchecoeur" data-wowhead="item=29962">Tranchecoeur</a>
        </li>      
      </ul> -->


      <script>
        var btnTempeteID = document.getElementById("btnTempete");
        var ulTempeteID = document.getElementById("ulTempete");

        btnTempeteID.addEventListener("click", function () {
          if (ulTempeteID.style.display === "block") {
            ulTempeteID.style.display = "none";
            btnTempeteID.innerHTML =
              '<i class="flecheMenu fas fa-caret-down"></i>';
          } else {
            ulTempeteID.style.display = "block";
            btnTempeteID.innerHTML =
              '<i class="flecheMenu fas fa-caret-up"></i>';
          }
        });
      </script>

      <!-- Salles Sethekk -->
      <div class="d-flex">
        <p>Les salles de Sethekk</p>
        <div>
          <button id="btnSethekk">
            <i class="flecheMenu fas fa-caret-down"></i>
          </button>
        </div>
      </div>

      <ul id="ulSethekk">
        <li>
          <a href="#renes_seigneur_corbeau" data-wowhead="item=32768"
            >Rênes du seigneur corbeau</a
          >
        </li>
        <li>
          <a href="#espingole" data-wowhead="item=32780">L'Espingole</a>
        </li>
        <li>
          <a href="#batombre_terokk" data-wowhead="item=29355"
            >Bâtombre de Terokk</a
          >
        </li>
      </ul>

      <script>
        var btnSethekkID = document.getElementById("btnSethekk");
        var ulSethekkID = document.getElementById("ulSethekk");

        btnSethekk.addEventListener("click", function () {
          if (ulSethekk.style.display === "block") {
            ulSethekk.style.display = "none";
          } else {
            ulSethekk.style.display = "block";
          }
        });
      </script>

      <!-- trone du tonnerre -->
      <div class="d-flex">
        <p>Trône du tonnerre</p>
        <div>
          <button id="btnSethekk">
            <i class="flecheMenu fas fa-caret-down"></i>
          </button>
        </div>
      </div>
      <ul>
        <li>
          <a href="#rejeton_horridon" data-wowhead="item=93666"
            >Rejeton d'Horridon</a
          >
        </li>
        <li>
          <a href="#couvee_ji_kun" data-wowhead="item=95059"
            >Couvée de Ji Kun</a
          >
        </li>
      </ul>

      <!-- Caveaux Mogu’shan  -->
      <p>Caveaux Mogu’shan</p>
      <ul>
        <li>
          <a href="#griffe_de_pierre" data-wowhead="item=167047"
            >Griffe de pierre</a
          >
        </li>
        <li>
          <a href="#dague_sept_etoiles" data-wowhead="item=87012"
            >Dague des Sept étoiles</a
          >
        </li>
        <li>
          <a href="#corselet_croc_pierre" data-wowhead="item=89929"
            >Corselet croc-de-pierre</a
          >
        </li>
        <li>
          <a href="#drape_eclat_esprit" data-wowhead="item=89819"
            >Drapé d'éclat d'esprit (bleu)</a
          >
        </li>
        <li>
          <a href="#tigre_hurlant" data-wowhead="item=87046">Tigre hurlant</a>
        </li>
        <li>
          <a href="#drape_eclat_esprit2" data-wowhead="item=89936"
            >Drapé d'éclat d'esprit (rose)</a
          >
        </li>
        <li>
          <a href="#jambieres_subetai" data-wowhead="item=87047"
            >Jambières de rapine de Subetaï</a
          >
        </li>
        <li>
          <a href="#serpent_astral" data-wowhead="item=87777"
            >Rênes du serpent-nuage astral</a
          >
        </li>
        <li>
          <a href="#cadeau_celeste" data-wowhead="item=167049"
            >Cadeau céleste</a
          >
        </li>
        <li>
          <a href="#brise_etoile" data-wowhead="item=87061"
            >Brise-étoile (rouge)</a
          >
        </li>
        <li>
          <a href="#elegion" data-wowhead="item=87062"
            >Elegion, le croissant denté</a
          >
        </li>
      </ul>
    </div>

    <!-- barre d'info -->
    <header class="header_donjons d-flex">
      <span>DONJONS/RAIDS</span>
      <a name="haut_page"></a>
      <span><a href="index.html">| Retour menu |</a></span>
    </header>

    <!-- <div class="row">
      <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <img src="images/arak.jpg" alt="" />
      </article>
      <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <img src="images/arak.jpg" alt="" />
      </article>
      <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <img src="images/arak.jpg" alt="" />
      </article>
    </div> -->

    <main class="main_donjons">
      

      <!-- section donjon de la tempête -->
      <section class="section_donjons">
        <h1>Donjon de la tempête</h1>
        <img src="images/donjon_tempete.jpg" alt="" />
        <p>Raz-de-Néant | OUTRETERRE</p>

        <nav class="d-flex butins">
          <i class="fas fa-coins coins"></i>
          <h2>Butins</h2>
        </nav>

        <!-- boss -->
        <a
          class="boss"
          href="https://fr.wowhead.com/npc=19622/kael-thas-haut-soleil"
          data-wowhead="npc=19622"
          >Kael'thas Haut-Soleil</a
        >

        <!-- liaison à href du menu -->
        <a name="cendres_alar"></a>

        <!-- essai image alar avec transparent apd css -->
        <div class="container">
          <img src="images/cendres_alar.jpg" alt="Avatar" style="width:100%">
          <div class="content">
            <i class="fas fa-check-circle checkCircle"></i>
          </div>
        </div>

        <!-- essai image alar avec transparent vert avec bootstrap-->
        <!-- https://mdbootstrap.com/snippets/jquery/temp/2596955?action=prism_export#html-tab-view -->
        <!-- <div class="view">
          <img src="images/cendres_alar.jpg" alt="sample image" class="img-fluid"/>
          <div class="mask flex-center rgba-green-strong">
            <i class="fas fa-check-circle checkCircle"></i>
          </div>
        </div> -->

        <!-- onclick evenement sur l'image d'Al'al -->
        <input type="checkbox" id="imageOnclick" />
        <label class="eventImageOnclick" for="imageOnclick">
          <img src="images/cendres_alar.jpg" alt="" />
        </label>

        <!-- onclick evenement sur image alar avec script et get by element -->
        <img src="images/cendres_alar.jpg" id="imgAlar"/>
        <script>
        var imgAlarID = document.getElementById("imgAlar");

        imgAlarID.addEventListener("click", function () {
          if (ulTempeteID.style.display === "block") {
            ulTempeteID.style.display = "none";
            btnTempeteID.innerHTML =
              '<i class="flecheMenu fas fa-caret-down"></i>';
          } else {
            ulTempeteID.style.display = "block";
            btnTempeteID.innerHTML =
              '<i class="flecheMenu fas fa-caret-up"></i>';
          }
        });
        </script>

        

 


        <!-- boss -->
        <a href="https://fr.wowhead.com/npc=19514/alar" data-wowhead="npc=19514"
          >Al'ar</a
        >
        <a name="jeune_faucon_phenix"></a>
        <img src="images/jeune_faucon_phénix.png" alt="" />


        <!-- boss -->
        <a
          href="https://fr.wowhead.com/npc=19516/saccageur-du-vide"
          data-wowhead="npc=19516"
          >Saccageur du vide</a
        >
        <a name="saccageur_de_poche"></a>
        <img src="images/saccageur_de_poche.png" alt="" />


        <!-- boss -->
        <a
          href="https://fr.wowhead.com/npc=18805/grande-astromancienne-solarian"
          data-wowhead="npc=18805"
          >Grande astromancienne Solarian</a
        >
        <a name="implorateur_du_vide"></a>
        <img src="images/implorateur_du_vide.png" alt="" />

        <a name="baton_ethereum"></a>
        <img src="images/baton_ethereum.png" alt="" />

        <a name="tranchecoeur"></a>
        <img src="images/tranchecoeur.png" alt="" />

        <a href="https://fr.wowhead.com/zones/instances">| Liste donjon |</a>
      </section>

      <!-- section salles de sethekk -->
      <section class="section_donjons">
        <h1>Les salles des Sethekk</h1>
        <img src="images/salles_sethekk2.png" alt="" />
        <p>Forêt de Terokkar | OUTRETERRE</p>
        <img src="images/salles_sethekk.png" alt="" />
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/b1DIERrDZ88"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <nav class="d-flex butins">
          <i class="fas fa-coins coins"></i>
          <h2>Butins</h2>
        </nav>

        <span><strong>Anzu</strong> </span> <br />
        <p>Mode héroïque!</p>
        <a name="renes_seigneur_corbeau"></a>
        <img src="images/renes_seigneur_corbeau3.jpg" alt="" />
        <a name="espingole"></a>
        <img src="images/espingole.png" alt="" />

        <span>Roi-Serre Ikiss</span>
        <a name="batombre_terokk"></a>
        <img src="images/batombre_terokk.png" alt="" />
      </section>

      <!-- trône du tonnerre -->
      <section class="section_donjons">
        <h1>Trône du tonnerre</h1>
        <img src="images/trone_tonnerre.jpg" alt="" />
        <p>Île du tonnerre | PANDARIE</p>
        <p>! Mode héroïque</p>
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/eH-8NvGL0xc"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <nav class="d-flex butins">
          <i class="fas fa-coins coins"></i>
          <h2>Butins</h2>
        </nav>

        <span>Horridon</span>
        <a name="rejeton_horridon"></a>
        <img src="images/rejeton_horridon.jpg" alt="" />

        <span>Ji Kun</span>
        <a name="couvee_ji_kun"></a>
        <img src="images/couvee_jin_kun.jpg" alt="" />
      </section>

      <!-- Caveaux Mogu’shan -->
      <section class="section_donjons">
        <h1>Caveaux Mogu’shan</h1>
        <img src="images/caveaux_mogushan.jpg" alt="" />
        <p>Sommet de Kun-Lai | PANDARIE</p>
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/DmXR0bJFd9I"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <nav class="d-flex butins">
          <i class="fas fa-coins coins"></i>
          <h2>Butins</h2>
        </nav>

        <!--  -->
        <a
          href="https://fr.wowhead.com/npc=60047/gardien-d-am%C3%A9thyste"
          data-wowhead="npc=60047"
          >La garde de pierre (Gardien d'améthyste)</a
        >

        <a name="griffe_de_pierre"></a>
        <img src="images/griffe_de_pierre.png" alt="" />

        <p>! Mode héroïque</p>

        <a name="dague_sept_etoiles"></a>
        <img src="images/dague_sept_etoiles.png" alt="" />

        <a name="corselet_croc_pierre"></a>
        <img src="images/corselet_croc_pierre.png" alt="" />

        <!--  -->
        <a
          href="https://fr.wowhead.com/npc=60708/meng-le-d%C3%A9ment"
          data-wowhead="npc=60708"
          >Les esprits-roi (Meng le Dément)</a
        >

        <a name="drape_eclat_esprit"></a>
        <img src="images/drape_eclat_esprit.png" alt="" />

        <p>! Mode héroïque</p>

        <a name="tigre_hurlant"></a>
        <img src="images/tigre_hurlant2.png" alt="" />

        <a name="drape_eclat_esprit2"></a>
        <img src="images/drape_eclat_esprit2.png" alt="" />

        <a name="jambieres_subetai"></a>
        <img src="images/jambieres_subetai.png" alt="" />

        <!--  -->
        <a
          href="https://fr.wowhead.com/npc=60410/elegon"
          data-wowhead="npc=60410"
          >Elegon</a
        >

        <a name="serpent_astral"></a>
        <img src="images/serpent_nuage_astral.jpg" alt="" />

        <a name="cadeau_celeste"></a>
        <img src="images/cadeau_celeste.png" alt="" />

        <p>! Mode héroïque</p>

        <a name="brise_etoile"></a>
        <img src="images/brise_etoile.png" alt="" />

        <a name="elegion"></a>
        <img src="images/elegion.png" alt="" />
      </section>

      <!-- bastion du crépuscule -->
      <section class="section_donjons">
        <h1>Le bastion du crépuscule</h1>
        <img src="images/bastion_crepuscule.jpg" alt="" />
        <p>Hautes-terres du crépuscule | ROYAUME DE L'EST</p>
        <img src="images/carte_bastion_crepuscule.png" alt="" />

        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/udpG864nod8"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <nav class="d-flex butins">
          <i class="fas fa-coins coins"></i>
          <h2>Butins</h2>
        </nav>
      </section>

      <!-- bataille du mont hyjal -->
      <section class="section_donjons">
        <h1>La bataille du mont Hyjal</h1>
        <img src="images/grottes_du_temps.jpg" alt="" />
        <p>Tanaris (Grottes du temps) | KALIMDOR</p>
        <p>
          On peut y accéder en vol ou au vieux dalaran dans la citadelle
          pourpre.
        </p>

        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/_C4pbFzGtps"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <nav class="d-flex butins">
          <i class="fas fa-coins coins"></i>
          <h2>Butins</h2>
        </nav>
      </section>

      <!-- citadelle de la couronne de glace -->
      <section class="section_donjons">
        <h1>Citadelle de la couronne de glace</h1>
        <img src="images/citadelle_couronne_glace.jpg" alt="" />
        <p>Couronne de glace | NORFENDRE</p>

        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/TBxqYBYSrUw"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>

        <nav class="d-flex butins">
          <i class="fas fa-coins coins"></i>
          <h2>Butins</h2>
        </nav>
      </section>

      <section class="section_donjons">
        NB: Pöur ceux de BFA, directement dans l'outils de tag. <br />
        Pour ceux de Legion, Timaer à Dalaran vers le fort pourpre, tu y parles
        et c'est bon. <br />
        Pour WOD, un pnj orc (côté alliance) dans ton fief, vers la gauche de
        l'entrée du batiment principal. <br />
        Pour MOP, c'est un PNJ au palais mogushan (il faut changer la
        temporalité en parlant à Zidormi sur la map avant) <br />
      </section>
    </main>
  </body>
</html>
