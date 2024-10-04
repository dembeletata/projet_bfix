<style>

* {
  font-family: 'Human Sans', sans-serif;
}

</style>

<style>



    .bdemande{
        color: rgb(0, 178, 42);
        border: 1px solid rgb(0, 178, 42);
        border-radius: 25px;
        padding: 10px;

    }
    .bdemande:hover{
        color: rgb(255, 255, 255);
        background-color: rgb(0, 178, 42);
    }
    .bregister{
        color: rgb(255, 255, 255);

        border: 1px solid white;
        border-radius: 25px;
        padding: 10px;
        width: 100%;
        background-color: rgb(0, 178, 42);
        margin: 10px;


    }
    .bregister:hover{
        color: rgb(255, 255, 255);
        background-color: rgb(2, 169, 41);
    }
    .arrow-iconH {
                  display: none;
              }
              .arrow-iconH.visible {
                  display: inline-block;
              }
              .monButton{
                  border-radius: 50px;
                  padding: 10px ;
                  padding-left: 15px ;
                  padding-right: 15px ;
               }

    .imgG {
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              transform: scale(1);
              }

              .imgG:hover {
                  transform: scale(1.05);
              }
    .cont {
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              transform: scale(1);
              }

              .cont:hover {
                  transform: scale(1.05);
              }
      .image_bfix{
          border-radius: 20px;
          }
      nav{
          box-shadow: 2px 0px 4px black;

      }
      .mon-drop {
          display: none;
      }
      .mon-drop.visible {
          display: inline-block;
      }


      .card {
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              transform: scale(1);
              }

              .card:hover {
                  transform: scale(1.05);
                  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
              }

              .fiber-optic-background {
    position: relative;
    background-color: rgb(0, 0, 0);
    overflow: hidden;
    border-radius: 40px;
}

.fiber-optic {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    overflow: hidden;
}

.fiber-optic::before, .fiber-optic::after,
.fiber-optic .fiber1, .fiber-optic .fiber2 {
    content: '';
    position: absolute;
    width: 2px;
    height: 150%;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.8), transparent);
    animation: fiber-move 4s linear infinite;
    opacity: 0.7;
    transform: rotate(45deg);
}

.fiber-optic::before {
    left: 20%;
    background: linear-gradient(45deg, transparent, rgba(255, 0, 0, 0.8), transparent);
}

.fiber-optic::after {
    left: 40%;
    animation-delay: 1s;
    background: linear-gradient(45deg, transparent, rgba(0, 255, 0, 0.8), transparent);
}

.fiber-optic .fiber1 {
    left: 60%;
    animation-delay: 2s;
    background: linear-gradient(45deg, transparent, rgba(0, 0, 255, 0.8), transparent);
}

.fiber-optic .fiber2 {
    left: 80%;
    animation-delay: 3s;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 0, 0.8), transparent);
}

@keyframes fiber-move {
    0% {
        bottom: -100%;
    }
    100% {
        bottom: 100%;
    }
}

.second-div {
    margin-top: -30px;
}





  </style>

<nav class="align-items-center navbar navbar-expand-lg  fixed-top " style="background-color: rgb(255, 255, 255)" >
  <div class="container-fluid align-items-center" style="padding: 10px;padding-left: 50px;
                padding-right: 50px;">

            <img src="{{ asset('images/bfix.png') }}" class="img-fluid image_bfix " alt="image_bfix" width="150" style="padding: 10px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">

        <li class="nav-item ">
          <a class="nav-link" href="/" role="button" data-bs-toggle="" aria-expanded="false" style="color: rgb(0, 178, 42)">
            ACCUEIL
          </a>

        </li>
        <li class="nav-item dropdown " id="monlien1">
            <div class=" align-items-center" style="display: flex; flex-direction:row">
                <a class="nav-link" href="/a_propos" style="color: rgb(0, 178, 42)">
                    A PROPOS
                </a>

                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="" aria-expanded="false" id="monlien1" style="color: rgb(0, 178, 42)">
                </a>
            </div>

            <ul class="dropdown-menu mon-drop" id="mondrop1">
                <li><a class="dropdown-item" href="/equipe">Notre équipe</a></li>
                <li><a class="dropdown-item" href="/organisation_du_bfix">Organisation du BFIX</a></li>
                <li><a class="dropdown-item" href="/gouvernance">Gouvernance du BFIX</a></li>
                <li><a class="dropdown-item" href="/reglement">Réglement et Statut</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown " id="monlien2">
            <div class=" align-items-center" style="display: flex; flex-direction:row">
                <a class="nav-link" href="/adhesion" style="color: rgb(0, 178, 42)">
                    ADHESION
                </a>

                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="" aria-expanded="false" id="monlien2" style="color: rgb(0, 178, 42)">
                </a>
            </div>
          <ul class="dropdown-menu mon-drop" id="mondrop2">
            <li><a class="dropdown-item" href="/procedure_adhesion">Procédure d'adhésion</a></li>
            <li><a class="dropdown-item" href="/accords_du_peering">Accords du PEERING</a></li>
            <li><a class="dropdown-item" href="/fiche_adhesion">Fiche d'adhésion</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown " id="monlien3">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="" aria-expanded="false" id="monlien3"style="color: rgb(0, 178, 42)">
            MEMBRES
          </a>
          <ul class="dropdown-menu mon-drop" id="mondrop3">
            <li><a class="dropdown-item" href="/portail_membre">Portail des membres</a></li>

            <li class="nav-item dropdown " id="monlien7">
              <a class="dropdown-item dropdown-toggle" role="button" href="#" aria-expanded="false">Liste des membres</a>
              <ul class="dropdown-menu mon-drop" id="mondrop7">
                <li>

                  <button type="button" class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    BFIX-Ouaga
                  </button>

                </li>


                <li>
                  <button type="button" class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropB">
                    BFIX-Bobo
                  </button>


                </li>

              </ul>

            </li>

          </ul>
        </li>
        <li class="nav-item dropdown " id="monlien4">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="" aria-expanded="false" id="monlien4"style="color: rgb(0, 178, 42)">
            SERVICES
          </a>
          <ul class="dropdown-menu mon-drop" id="mondrop4">
            <li>
              <button type="button" class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#sOuaga">
                BFIX-Ouaga
              </button>

            </li>
            <li>
              <button type="button" class="dropdown-item btn btn-primary" data-bs-toggle="modal" data-bs-target="#sBobo">
                BFIX-Bobo
              </button>

            </li>
            <li><a class="dropdown-item" href="">Caches</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown " id="monlien5">
          <a class="nav-link " href="/actualites" role="button" data-bs-toggle="" aria-expanded="false" id="" style="color: rgb(0, 178, 42)">
            ACTUALITES
          </a>
          {{-- <ul class="dropdown-menu mon-drop" id="mondrop5">
            <li><a class="dropdown-item" href="#">Media BFIX 2022</a></li>
            <li><a class="dropdown-item" href="#">Media BFIX 2023</a></li>
            <li><a class="dropdown-item" href="#">Media BFIX 2024</a></li>

          </ul> --}}
        </li>
        <li class="nav-item dropdown " id="monlien6">

          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="" aria-expanded="false" id="monlien6" style="color: rgb(0, 178, 42)">
            OUTILS
          </a>
          <ul class="dropdown-menu mon-drop" id="mondrop6">
            <li><a class="dropdown-item" href="">WIKI BFIX</a></li>
            <li><a class="dropdown-item" href="/connexion" >Monitoring</a></li>
            <li><a class="dropdown-item" href="">BFIX LOOKING GLASS</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link " href="#" role="button" data-bs-toggle="" aria-expanded="false" style="color: rgb(0, 178, 42)" >
            <button type="button" class="dropdown-item btn bdemande" data-bs-toggle="modal" data-bs-target="#message" >
                CONTACTEZ-NOUS
            </button>

          </a>

        </li>
        <li class="nav-item dropdown ">
            <a class="nav-link " href="#" role="button" data-bs-toggle="" aria-expanded="false" style="color: rgb(0, 178, 42)">

                <button type="button" class="dropdown-item btn bdemande" data-bs-toggle="modal" data-bs-target="#demande" >
                    Créer un compte
                </button>



            </a>


        </li>


      </ul>
    </div>
  </div>

</nav>
<br>
<br>
<br>
<br>
<br>


                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable " style="max-width: 100%">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(0, 178, 42)">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white">Membres connectés à Ouagadougou</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container text-center">
                              <div class="collapse" id="orange" data-bs-theme="">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">NOM DE LA STRUCTURE</th>
                                      <th scope="col">URL</th>
                                      <th scope="col">ASN</th>
                                      <th scope="col">CAPACITE DU PORT</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">ORANGE BF SA</th>
                                      <td><a href="http://www.orange.bf/">www.orange.bf</a></td>
                                      <td>37577</td>
                                      <td>10 Gbps</td>
                                    </tr>
                                  </tbody>
                                </table>

                              </div>

                            <div class="collapse" id="moov" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">MOOV AFRICA BF/ONATEL</th>
                                    <td><a href="http://www.onatel.bf/">www.onatel.bf</a></td>
                                    <td>25543</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="vts" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Virtual Technologies and Solutions</th>
                                    <td><a href="http://www.vts.bf/">www.vts.bf</a></td>
                                    <td>37721</td>
                                    <td>40 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="anptic" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Agence Nationale de Promotion des Technologies de l'information et de la Communication (ANPTIC)		</th>
                                    <td><a href="http://	www.anptic.gov.bf/">	www.anptic.gov.bf</a></td>
                                    <td>327871</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="sancfis" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">SANCFIS SA 	 	</th>
                                    <td><a href="http://www.burkinafaso.sancfis.net/">www.burkinafaso.sancfis.net</a></td>
                                    <td>37008</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="pav" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Point d'Attérisssement Virtuel BURKINA (PAV-BF)	</th>
                                    <td><a href="http://www.pav.bf/">	www.pav.bf</a></td>
                                    <td>328316</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="ipsys" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">IPSYS TELECOM</th>
                                    <td><a href="http://www.ipsys-bf.com/">www.ipsys-bf.com</a></td>
                                    <td>37163</td>
                                    <td>-</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="ipp" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Internet Puissance Plus			</th>
                                    <td><a href="http://www.internetpplus.com/">www.internetpplus.com</a></td>
                                    <td>37073</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="vipnet" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Afrique Technologies & Services (VipNet)</th>
                                    <td><a href="http://www.vipnet.ci/">www.vipnet.ci</a></td>
                                    <td>37381</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="unicom" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">UNICOM SA		</th>
                                    <td><a href="http://www.unicom-sa.com	/">www.unicom-sa.com	</a></td>
                                    <td>328215</td>
                                    <td>100 Mbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="pch" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Anycast DNS PCH			</th>
                                    <td><a href="http://www.pch.net/">www.pch.net</a></td>
                                    <td>42 & 3856</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="afreenet" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">AFREENET</th>
                                    <td><a href="http://www.afrinet-bf.com/">www.afrinet-bf.com</a></td>
                                    <td>328534</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="facebook" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">FACEBOOK</th>
                                    <td><a href="http://www.facebook.com/">	www.facebook.com</a></td>
                                    <td>63293</td>
                                    <td>10 Gbps </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="google" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Peer Direect Google </th>
                                    <td><a href="http://www.google.com/">	www.google.com</a></td>
                                    <td>15169</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="cloud" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Cloudflare</th>
                                    <td><a href="http://www.cloudflare.com/">www.cloudflare.com</a></td>
                                    <td>13335</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="canalbox" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Canal Box GVA	</th>
                                    <td><a href="http://www.canalbox.bf/">www.canalbox.bf</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                          </div>
                          <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-1">
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/R.jpeg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#orange" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>

                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/moov.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#moov" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>


                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-vts.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#vts" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-anptic.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#anptic" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-sancfis.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sancfis" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-pav-bfaso.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-ipsys.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ipsys" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                     </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-ipp.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ipp" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-vip-net.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#vipnet" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-unicom-sa.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#unicom" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/pch.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pch" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-freeafrique.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#freenet" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                        </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-meta-fb.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#facebook" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo_google.PNG') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#google" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                           </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/cloud.jpeg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#cloud" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/canalbox.jpeg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#canalbox" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>


                            </div>
                          </div>








                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="staticBackdropB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable " style="max-width: 100%">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(0, 178, 42)">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white">Membres connectés à Bobo Dioulasso</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container text-center">
                              <div class="collapse" id="orange" data-bs-theme="">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">NOM DE LA STRUCTURE</th>
                                      <th scope="col">URL</th>
                                      <th scope="col">ASN</th>
                                      <th scope="col">CAPACITE DU PORT</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">ORANGE BF SA</th>
                                      <td><a href="http://www.orange.bf/">www.orange.bf</a></td>
                                      <td>37577</td>
                                      <td>10 Gbps</td>
                                    </tr>
                                  </tbody>
                                </table>

                              </div>

                            <div class="collapse" id="moov" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">MOOV AFRICA BF/ONATEL</th>
                                    <td><a href="http://www.onatel.bf/">www.onatel.bf</a></td>
                                    <td>25543</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="vts" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Virtual Technologies and Solutions</th>
                                    <td><a href="http://www.vts.bf/">www.vts.bf</a></td>
                                    <td>37721</td>
                                    <td>40 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="anptic" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Agence Nationale de Promotion des Technologies de l'information et de la Communication (ANPTIC)		</th>
                                    <td><a href="http://	www.anptic.gov.bf/">	www.anptic.gov.bf</a></td>
                                    <td>327871</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="sancfis" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">SANCFIS SA 	 	</th>
                                    <td><a href="http://www.burkinafaso.sancfis.net/">www.burkinafaso.sancfis.net</a></td>
                                    <td>37008</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="pav" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Point d'Attérisssement Virtuel BURKINA (PAV-BF)	</th>
                                    <td><a href="http://www.pav.bf/">	www.pav.bf</a></td>
                                    <td>328316</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="ipsys" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">IPSYS TELECOM</th>
                                    <td><a href="http://www.ipsys-bf.com/">www.ipsys-bf.com</a></td>
                                    <td>37163</td>
                                    <td>-</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="ipp" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Internet Puissance Plus			</th>
                                    <td><a href="http://www.internetpplus.com/">www.internetpplus.com</a></td>
                                    <td>37073</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="vipnet" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Afrique Technologies & Services (VipNet)</th>
                                    <td><a href="http://www.vipnet.ci/">www.vipnet.ci</a></td>
                                    <td>37381</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="unicom" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">UNICOM SA		</th>
                                    <td><a href="http://www.unicom-sa.com	/">www.unicom-sa.com	</a></td>
                                    <td>328215</td>
                                    <td>100 Mbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="pch" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Anycast DNS PCH			</th>
                                    <td><a href="http://www.pch.net/">www.pch.net</a></td>
                                    <td>42 & 3856</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="afreenet" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">AFREENET</th>
                                    <td><a href="http://www.afrinet-bf.com/">www.afrinet-bf.com</a></td>
                                    <td>328534</td>
                                    <td>1 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <div class="collapse" id="facebook" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">FACEBOOK</th>
                                    <td><a href="http://www.facebook.com/">	www.facebook.com</a></td>
                                    <td>63293</td>
                                    <td>10 Gbps </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="google" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Peer Direect Google </th>
                                    <td><a href="http://www.google.com/">	www.google.com</a></td>
                                    <td>15169</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="cloud" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Cloudflare</th>
                                    <td><a href="http://www.cloudflare.com/">www.cloudflare.com</a></td>
                                    <td>13335</td>
                                    <td>10 Gbps</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                            <div class="collapse" id="canalbox" data-bs-theme="">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NOM DE LA STRUCTURE</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">ASN</th>
                                    <th scope="col">CAPACITE DU PORT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Canal Box GVA	</th>
                                    <td><a href="http://www.canalbox.bf/">www.canalbox.bf</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>

                          </div>
                          <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-1">
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/R.jpeg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#orange" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>

                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-anptic.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#anptic" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-sancfis.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sancfis" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>
                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-pav-bfaso.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/pch.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pch" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo-meta-fb.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#facebook" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                          </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="col">
                                <div class="p-3">
                                  <div class="card" style="width: 6rem;" id="monlogo" >
                                    <img src="{{ asset('Logo_Membres/logo_google.PNG') }}" class="card-img-top" alt="...">
                                    <div class="card-body">

                                        <div class="container-fluid">
                                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#google" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="color: rgb(0, 178, 42)">
                                            Détail>>
                                           </button>
                                        </div>

                                    </div>
                                  </div>

                                </div>
                              </div>




                            </div>
                          </div>








                        </div>
                      </div>
                    </div>
                  </div>


                  {{-- service --}}


                  <div class="modal fade" id="sOuaga" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable " style="max-width: 100%">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(0, 178, 42)">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white">Au point d'échange <strong>BFIX Ouaga,</strong> nous vous fournissons les services suivants </h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white"></button>
                        </div>
                        <div class="modal-body">

                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Typologie de service</th>
                                <th scope="col">Statut & disponibilité au BFIX</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Peering local</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Google global  cache / GGC</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">BGP Route Server</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Facebook cache / FNA</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Anycast DNS PCH</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Peer Direct GOOGLE</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Cloudflare</th>
                                <td>Disponible et en service</td>

                              </tr>

                            </tbody>
                          </table>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="sBobo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable " style="max-width: 100%">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(0, 178, 42)">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white">Au point d'échange <strong>BFIX Bobo,</strong> nous vous fournissons les services suivants </h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white"></button>
                        </div>
                        <div class="modal-body">

                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Typologie de service</th>
                                <th scope="col">Statut & disponibilité au BFIX</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Peering local</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Google global  cache / GGC</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">BGP Route Server</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Facebook cache / FNA</th>
                                <td>Disponible et en service</td>

                              </tr>
                              <tr>
                                <th scope="row">Anycast DNS PCH</th>
                                <td>Non Disponible</td>

                              </tr>


                            </tbody>
                          </table>

                        </div>
                      </div>
                    </div>
                  </div>





                  <div class="fermer container fiber-optic-background" style="border-radius: 40px; padding:20px; position: relative;">
                    <div class="fiber-optic"></div>
                    <div class="row d-flex justify-content-around align-items-center" style="position: relative; z-index: 1;">

                        <div class="col-md-6 col-sm-12" style="padding: 4%;">
                            <h1 style="color: #ffffff;"><strong>Le réseau qui interconnecte les réseaux</strong></h1>

                            <p class="text-break fs-6" style="font-family: sans-serif; color: #ffffff;">
                                <strong>Burkina Faso</strong> Internet eXchange Point <strong>(BFIX)</strong> <br>
                                Récépissé N00000882701 du 20/08/2020 IFU 00143784S
                            </p>

                            <a href="https://youtu.be/TKNQ1lgguM8">
                                <button id="toggleButtonH" class="btn monButton fs-5" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42);">
                                    Apprendre encore plus
                                    <span id="arrowIconH" class="arrow-iconH">&rarr;</span>
                                </button>
                            </a>
                        </div>

                        <div class="col-md-5 col-sm-12 text-center" style="padding: 5%;">
                            <img src="{{ asset('images/globe4.png') }}" class="img-fluid image_bfix imgG" alt="image_bfix">
                        </div>

                    </div>
                </div>

                <div class="fermer container cont text-center second-div" style="border-radius: 30px; background-color: rgb(255, 255, 255); width: 60%; box-shadow: 0px 2px 10px, 2px 0px 10px rgba(0, 0, 0, 0.537)"  >
                    <div class="row align-items-center" >
                    <div class="col cont">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16" style="color: rgb(0, 178, 42); margin: 25px;">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                        </svg>
                        <h6 style="padding: 10px; color black;"> +226 74 92 10 10</h6>
                    </div>
                    <div class="col cont">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16" style="color: rgb(0, 178, 42); margin: 25px;">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                        </svg>
                        <h6 style="padding: 10px; color black;">contact@bfix.bf | www.bfix.bf</h6>

                    </div>
                    <div class="col cont">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16" style="color: rgb(0, 178, 42); margin: 25px;">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        <h6 style="padding: 10px; color black;">11 BP 1931 Ouagadougou CMS 11 <br> Arrondissement N°12</h6>

                    </div>
                    </div>
                </div>




                <div class="modal fade" id="message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-scrollable " style="max-width: 100%">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: rgb(0, 178, 42)">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white"><strong>Envoyez un message a BFIX</strong></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white"></button>
                              </div>

                            <div class="modal-body">
                                <div class="container text-center">
                                    <div class="  border-0 shadow-lg my-5" style="border-radius: 20px">
                                        <div class="card-body p-0">

                                            <div class="row align-items-center" style="border-radius: 20px">
                                                <div class="col-lg-5 d-none d-lg-block bg-register-image">
                                                    <img src="{{ asset('images/message.png') }}" class="img-fluid image_bfix imgG" alt="image_bfix" width="">

                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="p-5">


                                                        <form class="user" action="/message" method="POST" onsubmit="return alert('Voulez avez envoyer message !');">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0" style="padding: 5px">
                                                                    <input type="text" class="form-control form-control-user" name="nom" placeholder="Nom" required>
                                                                </div>
                                                                <div class="col-sm-6" style="padding: 5px">
                                                                    <input type="text" class="form-control form-control-user" name="prenom" placeholder="Prenom" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" style="padding: 5px">
                                                                <input type="email" class="form-control form-control-user" name="email" placeholder="Adresse Email" required>
                                                            </div>
                                                            <div class="form-group" style="padding: 5px">
                                                                <input type="text" class="form-control form-control-user" name="sujet" placeholder="Sujet" required>
                                                            </div>
                                                            <div class="form-group" style="padding: 5px">
                                                                <label for="contenue">Message</label>
                                                                <textarea class="form-control form-control-user"  name="message" rows="3" required></textarea>

                                                            </div>

                                                            <button type="submit" class="btn bregister">
                                                                Envoyer le message
                                                            </button>
                                                        </form>
                                                                                                <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                  </div>


                  <div class="modal fade" id="demande" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-scrollable " style="max-width: 100%">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: rgb(0, 178, 42)">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white"><strong>Envoyez une demande de création de compte</strong></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white"></button>
                              </div>

                            <div class="modal-body">
                                <div class="container text-center">
                                    <div class="  border-0 shadow-lg my-5" style="border-radius: 20px">
                                        <div class="card-body p-0">
                                            <!-- Nested Row within Card Body -->
                                            <div class="row align-items-center" style="border-radius: 20px">
                                                <div class="col-lg-5 d-none d-lg-block bg-register-image">
                                                    <img src="{{ asset('images/register.png') }}" class="img-fluid image_bfix imgG" alt="image_bfix" width="">

                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="p-5">


                                                        <form class="user" action="/demande/envoie" method="POST" onsubmit="alert('Voulez avez envoyer une demande de creation de compte !');">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0" style="padding: 5px">
                                                                    <input type="text" class="form-control form-control-user" name="nom" placeholder="Nom" required>
                                                                </div>
                                                                <div class="col-sm-6" style="padding: 5px">
                                                                    <input type="text" class="form-control form-control-user" name="prenom" placeholder="Prenom" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" style="padding: 5px">
                                                                <input type="email" class="form-control form-control-user" name="email" placeholder="Adresse Email" required>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0" style="padding: 5px">
                                                                    <input type="text" class="form-control form-control-user" name="nom_service" placeholder="Service" required>
                                                                </div>
                                                                <div class="col-sm-6" style="padding: 5px">
                                                                    <input type="number" class="form-control form-control-user" name="id_service" placeholder="Identifiant" required>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn bregister">
                                                                Envoyer la Demande
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                  </div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
      const toggleButtonH = document.getElementById('toggleButtonH');
      const arrowIconH = document.getElementById('arrowIconH');

      toggleButtonH.addEventListener('mouseover', function() {
          arrowIconH.classList.add('visible');
      });

      toggleButtonH.addEventListener('mouseout', function() {
          arrowIconH.classList.remove('visible');
      });
  });

</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const monlien1 = document.getElementById('monlien1');
      const mondrop1 = document.getElementById('mondrop1');

      monlien1.addEventListener('mouseover', function() {
          mondrop1.classList.add('visible');
      });

      monlien1.addEventListener('mouseout', function() {
          mondrop1.classList.remove('visible');
      });
  });
  document.addEventListener('DOMContentLoaded', function() {
      const monlien2 = document.getElementById('monlien2');
      const mondrop2 = document.getElementById('mondrop2');

      monlien2.addEventListener('mouseover', function() {
          mondrop2.classList.add('visible');
      });

      monlien2.addEventListener('mouseout', function() {
          mondrop2.classList.remove('visible');
      });
  });
  document.addEventListener('DOMContentLoaded', function() {
      const monlien3 = document.getElementById('monlien3');
      const mondrop3 = document.getElementById('mondrop3');

      monlien3.addEventListener('mouseover', function() {
          mondrop3.classList.add('visible');
      });

      monlien3.addEventListener('mouseout', function() {
          mondrop3.classList.remove('visible');
      });
  });
  document.addEventListener('DOMContentLoaded', function() {
      const monlien4 = document.getElementById('monlien4');
      const mondrop4 = document.getElementById('mondrop4');

      monlien4.addEventListener('mouseover', function() {
          mondrop4.classList.add('visible');
      });

      monlien4.addEventListener('mouseout', function() {
          mondrop4.classList.remove('visible');
      });
  });
  document.addEventListener('DOMContentLoaded', function() {
      const monlien5 = document.getElementById('monlien5');
      const mondrop5 = document.getElementById('mondrop5');

      monlien5.addEventListener('mouseover', function() {
          mondrop5.classList.add('visible');
      });

      monlien5.addEventListener('mouseout', function() {
          mondrop5.classList.remove('visible');
      });
  });
  document.addEventListener('DOMContentLoaded', function() {
      const monlien6 = document.getElementById('monlien6');
      const mondrop6 = document.getElementById('mondrop6');

      monlien6.addEventListener('mouseover', function() {
          mondrop6.classList.add('visible');
      });

      monlien6.addEventListener('mouseout', function() {
          mondrop6.classList.remove('visible');
      });
  });
  document.addEventListener('DOMContentLoaded', function() {
      const monlien7 = document.getElementById('monlien7');
      const mondrop7 = document.getElementById('mondrop7');

      monlien7.addEventListener('mouseover', function() {
          mondrop7.classList.add('visible');
      });

      monlien7.addEventListener('mouseout', function() {
          mondrop7.classList.remove('visible');
      });
  });
</script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
