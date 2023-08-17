@extends("layouts.web-layout")

@section('content')



<section class="pt-16">
    <div class="mx-auto mt-16 max-w-7xl">
        <form class="grid grid-cols-4 gap-4 p-4 m-4 bg-gray-900" action="">
            <div class="flex flex-col gap-1">
                <label class="text-[16px] text-gray-50">Nom</label>
                <input
                    class="w-full px-2 py-3 bg-transparent text-white text-[13px]  border border-[#29d9d5] rounded focus:outline-none"
                    type="text" placeholder="Entrez un Prenom">
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-[16px] text-gray-50">prenom</label>
                <input
                    class="w-full px-2 py-3 bg-transparent text-white text-[13px]  border border-[#29d9d5] rounded focus:outline-none"
                    type="text" placeholder="Entrez un Prenom">
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-[16px] text-gray-50">Promotion</label>
                <input
                    class="w-full px-6 py-3 bg-transparent text-white text-[13px]  border border-[#29d9d5] rounded focus:outline-none"
                    type="text" placeholder="Entrez un Prenom">
            </div>

            <div class="pt-10">


                <button
                    class="py-4 w-full hover:bg-[#29d9d5] transition ease-in  border text-white  px-6 border-[#29d9d5]"
                    type="button">

                    Voir

                </button>
            </div>





        </form>
    </div>
</section>


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







@endsection