@extends("layouts.web-layout")

@section('content')

<section id="home">
    <h2></h2>
    <h4>A votre disposition</h4>
    <p>Obtenez des informations en temp réel avec les données surlignées par nos soins pour vous permettre de puiser
        des sources fiables et essentielles.</p>
    <p>En un clic et une solution.</p>
    <a href="#" class="btn-reservation home-btn">Bienvenue chez vous</a>
    <div class="find_trip">
        <form action="">
            <div>
                <label>Prenom</label>
                <input type="text" placeholder="Entrez un Prenom">
            </div>
            <div>
                <label>Nom</label>
                <input type="text" placeholder="Entrez un Nom">
            </div>
            <div>
                <label>Promotion</label>
                <input type="text" placeholder="Entrez une Promotion">
            </div>
            <input type="submit" value="voir">
        </form>
    </div>
</section>

<section id="a-propos">
    <h1 class="title">à propos</h1>
    <div class="img-desc">
        <div class="left">
            <video src="images/Vidéo Labo.MP4.mov" autoplay loop></video>
        </div>
        <div class="right">
            <h3>Les éléments inclus dans ce site est un second guide pour les etudiants de l'UCC ayant pour objectif
                de se référer sur la prise de commande d'un cours par un professeur sur une période qui le rend
                disponible.</h3>
            <p>il vous permet de vous conditionner à un rythme de travail qui peut varier selon la tonalité émise
                par le détenteur.</p>
            <a href="#">Accueil mesuré</a>i
        </div>
    </div>

</section>

<!-- section professeurs -->
<section id="popular-professeurs">
    <h1 class="title">Professeurs répertoriés</h1>
    <div class="content">
        <!-- box -->
        <div class="box">
            <img src="images/Pr.MBaki.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Efrem Mbaki</h4>
                    <p>Cours:Langage de programmation.</p>
                    <p>Docteur en sciences de l'ingénieur business(-intelligence) Analiste & professeur des
                        universités. </p>
                    <p>En déplacement a l'etranger pour des raisons professionnels,l'organisation de tout les cours
                        dont il a été détenteur a toujours été millimétre et bien calculé par l'apport des ses
                        assistants.</p>
                    <p>Souvent présent dans la période qui va du début de l'année académique en procèdent par
                        intermittence.</p>

                </div>
            </div>
        </div>
        <!-- box -->
        <!-- box -->
        <div class="box">
            <img src="images/IMG UCC.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Didier Yangonzela</h4>
                    <p>Cours:Droit océanique et maritime & historique politique.</p>
                    <p>Est un docteur en droit et professeur des universités.</p>
                    <p>Sa présence dans les cours qu'il a en sa possesion intervient sur une période allant du mois
                        de FEVRIER à MARS et début AVRIL.</p>
                </div>
            </div>
        </div>
        <!-- box -->
        <!-- box -->
        <div class="box">
            <img src="images/Pr.Manzanza .JPG" alt="">
            <div class="content">
                <div>
                    <h4>Yves Manzanza</h4>
                    <p>Cours:Droit des assurances et droit de la sécurité social.</p>
                    <p>Est un docteur en droit économique et social,ayant une multitudes d'assistant qui assure
                        l'intérim dans une majeur partie de cours qu'il a en sa possesion. </p>
                    <p>sa présence est souvent retenue pour la période qui va du mois DE JANVIER à début Mars.</p>
                </div>
            </div>
        </div>
        <!-- box -->
        <!-- box -->
        <div class="box">
            <img src="images/Pr.Sakata.JPG" alt="">
            <div class="content">
                <div>
                    <h4>Garry Sakata</h4>
                    <p>Cours:Droit de la concurrence et droit des contrats commerciaux.</p>
                    <p>Esr un docteur en sciences juridiques et député national en RDC,Garry sakata est membre du
                        parti lumumbiste unifié (Palu).</p>
                    <p>Ayant des occupations politiques bien garnis sa présence au sein de son cours se fait en
                        intermittence,sa présence intervient sur la période allant du mois D'AVRIL à MAI.</p>

                </div>
            </div>
        </div>
        <!-- box -->
        <!-- box -->
        <div class="box">
            <img src="images/IMG UCC.jpg" alt="">
            <div class="content">
                <div>
                    <h4>Jean Louis mukendi ngindu</h4>
                    <p>Cours:Statistiques & mathématiques. </p>
                    <p>Est un docteur en sciences et professeur des universités.</p>
                    <p>Souvent présent en début d'année,il cumule un totale de présence sur une période allant du
                        mois de JANVIER à MARS avant de faire place à des intérimaires.</p>
                </div>
            </div>
        </div>
        <!-- box -->
        <!-- box -->
        <div class="box">
            <img src="images/Pr.Bakandeja.JPG" alt="">
            <div class="content">
                <div>
                    <h4>Grégoire Bakandeja</h4>
                    <p>Cours:Finances publiques et droit du commerce international.</p>
                    <p>Est un docteur d'Etat en droit Economique.</p>
                    <p>il est un ancien parlementaire de la RDC etc...</p>
                    <p>son expériences passée fait de lui un sage inégalée pour des avis juridiques dans le cadre
                        des projets d'investissements en RD congo.</p>
                    <p>ses conseils sont ardemment recherchés pour des grands projets,sa présence au sein des ses
                        cours sont habituellement retenus pour le mois allant D'OCTOBRE à DECEMBRE.</p>
                </div>
            </div>
        </div>
        <!-- box -->
    </div>
</section>

<!--  contact section -->
<section id="contact">
    <h1 class="title">Contact</h1>
    <form action="">
        <div class="left-right">
            <div class="left">
                <label>Nom Complet</label>
                <input type="text">
                <label>Objet</label>
                <input type="text">
                <label>Email</label>
                <input type="text">
                <label>Message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="right">
                <label>Numéro</label>
                <input type="text">
                <label>Date</label>
                <input type="text">
                <label>Autres Details</label>
                <input type="text">
                <label>Adresse</label>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.292292615509614!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1647531560805!5m2!1sfr!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <button>Envoyer</button>
    </form>
</section>

@endsection
