
@extends ('layouts.masterfr')

@section('body')

<div id="selector" style="width:100%;height:100%; padding-top:57px;overflow: hidden;">
    <div class="journalism-build" onclick="build()">
        <div class="journalism-text">
            <div class="journalism-titlefr">C<br/>O<br/>N<br/>S<br/>T<br/>R<br/>U<br/>C<br/>T<br/>I<br/>O<br/>N</div>
        </div>
    </div>

    <div class="journalism-kiosk">
        <div class="journalism-text" onclick="kiosk()">
            <div class="journalism-title">K<br/>I<br/>O<br/>S<br/>Q<br/>U<br/>E</div>
        </div>
    </div>

    <div class="journalism-web">
        <div class="journalism-text" onclick="web()">
            <div class="journalism-title">S<br/>I<br/>T<br/>E<br/> <br/>W<br/>E<br/>B</div>
        </div>
    </div>

    <div class="journalism-video">
        <div class="journalism-text" onclick="video()">
            <div class="journalism-title">V<br/>I<br/>D<br/>É<br/>O</div>
        </div>
    </div>
</div>



    <script>
        function build() {

            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            var body = document.getElementById('body');
            body.innerHTML += '<div class="build2"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Aperçu des éléments requis pour le jeu </h1>\n' +
                '\tÉtant donné que les principaux défis identifiés étaient les étapes, le lancement aux godets et la récupération des balles, nous avons décidé que les éléments clés du robot doivent être conçus en fonction de ces défis. Le bouton et le plinko ont été écartés comme facile à surmonter en utilisant le système d\'entraînement et le cadre principal des robots comme levier.        \n' +
                '</div>\n' +
                '\n' +
                '    <div class="robot1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Remue-méninges et de la Conception </h1>\n' +
                '        Notre réflexion a commencé au début de novembre, après le coup d\'envoi. Nous avons décidé d\'examiner des défis similaires des années précédentes et de nous inspirer des méthodes adoptées par d\'autres écoles ainsi que d\'une recherche générale pour divers systèmes liés à des robots parcourant des terrains accidentés, des systèmes de lancement et des systèmes de ramassage.<br/>\n' +
                '\tLorsque l\'idée des marches a été présentée pour la première fois avant le coup d\'envoi, nous avons envisagé d\'utiliser des roues en forme de + pour monter les escaliers. Une fois que nous avons vu le terrain cependant, nous avons réalisé que ces roues n\'étaient pas efficaces pour le défi et ferait trembler notre robot plus qu\'il n\'aiderait. Notre idée suivante était d\'utiliser des roues suspendues à l\'avant, à deux pouces au-dessus du sol, peut-être en utilisant des bandes de roulement pour augmenter la tension. De là, un peu de navigation sur internet nous a mené au concept de mecatankanum.\n' +
                '</div>\n' +
                '\n' +
                '    <div class="robot2"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Remue-méninges et de la Conception (suite) </h1>\n' +
                '        Pour le système de collecte, le consensus sur un système de collecte plus grand qui fonctionnerait en continu et alimenterait un entonnoir au sommet a été atteint instantanément. L\'efficacité était considérée comme essentielle et il n\'était pas nécessaire de faire preuve de précision si le capteur était introduit dans un capteur de couleur. À l\'origine, le modèle actuel du pick-up était censé être deux ensembles parallèles de bandes de roulement avec des ailettes couvrant tout le dos du robot, mais cela a été jugé trop coûteux et redondant pour en avoir deux. Les balles roulent bien et il a donc été décidé qu\'un côté serait une feuille de plastique ondulé avec seulement six rangées de bandes de roulement et avoir un entonnoir au fond pour les diriger à l\'entrée de la camionnette.<br/>\n' +
                '\tPour le lancement, l\'utilisation de systèmes pneumatiques ou de systèmes de lancement à ressort a été immédiatement rejetée pour deux raisons principales. Tout d\'abord, le temps de rechargement n\'était pas efficace et un lancement continu était souhaité. Deuxièmement, les systèmes sont plus compliqués à construire bien que leur efficacité vaut la peine, ce qui signifie également qu\'il ya plus de risques de dysfonctionnement. Une façon plus efficace et plus simple serait d\'utiliser rapide rotation des roues. Le système pour roues peut utiliser soit une roue verticale avec un rail de guidage, soit deux ensembles de roues horizontales parallèles avec un rail de guidage entre eux. L\'utilisation d\'une roue verticale, surtout si elle est placée sur une charnière, éliminerait beaucoup d\'espace vertical sur le robot et ne ferait pas usage de l\'espace horizontal bien qu\'il soit moins complexe que la configuration horizontale. Dans notre conception, nous avons décidé de sacrifier la simplicité pour la capacité et avoir la trémie principale être plus grand afin de profiter de la gravité.\n' +
                '</div>\n' +
                '\n' +
                '    <div class="robot3"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Système D\'Entraînement (Jeff) </h1>\n' +
                '\tLa base de notre robot a été conçue de manière à ce que nous puissions obtenir notre système de pick-up et de lancement aussi près que possible du sol, tout en les laissant toujours protégés et en permettant une garde au sol lors de la montée des marches sur le terrain de jeu. Par conséquent, nous avons décidé de le construire en “H”, les roues motrices et les moteurs étant logés dans les deux plus grandes parties du cadre, et les commandes ainsi que le câblage logé dans les faisceaux transversaux horizontaux. Le robot a également été construit comme un carré de 34” (864 MM), nous permettant un coussin de sécurité de 2” (50 MM) en cas de coupures mal faites ou nous avons décidé de faire coller les batteries ou les roues arrière hors du cadre légèrement que les règles ne permettent une taille maximale de 36” (915 MM) cubé.<br/>\n' +
                '\tPour propulser notre robot, nous avons conçu un système d\'entraînement en tandem. En utilisant deux types différents de systèmes d\'entraînement, une configuration de roue Mecanum ainsi qu\'un entraînement de réservoir. Les roues Mecanum sont chacune entraînées individuellement, et en inversant la direction de chaque rotation de roue individuelle, nous pouvons atteindre de nombreuses directions de mouvement qui sont impossibles à l\'aide de roues normales. Nous pouvons conduire vers l\'avant et vers l\'arrière, ainsi que conduire à gauche et à droite comme d\'habitude. Cependant, nous pouvons également conduire complètement de côté ou dans n\'importe quelle direction diagonale ainsi que vu dans le diagramme ci-dessous.<br/>\n' +
                '\tLe deuxième système, la bande de roulement de réservoir, a été développé pour soulever l\'avant de notre robot sur les marches facilement et soulager la contrainte sur les roues avant, les roulements et le cadre de l\'impact soudain à pleine vitesse. Il est tournant à l\'aide de l\'essieu arrière, avec l\'essieu avant et la poulie suspendue dans l\'air à l\'avant du robot tournant au ralenti sur les essieux. Cette ceinture, couplé avec l\'angle d\'approche, permettra à notre robot de frapper les marches à toute vitesse en douceur et efficacement.        \n' +
                '</div>\n' +
                '\n' +
                '    <div class="robot4"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Système De Ramassage (Spike) </h1>\n' +
                '        Le système de ramassage du robot, appelé Spike, est fait de deux canaux C Vex parallèles 1:3:1 avec six rangées de bandes de roulement de réservoir espacées de 3 pouces d\'une feuille de plastique ondulé. Blanc attaches étaient connectés à chenilles à des intervalles à l\'aide de la colle chaude pour s\'assurer qu\'ils restent en place. Deux moteurs VEX 393 ont été fixés sur le même arbre au sommet du système et reliés entre eux par des fils inversés pour leur permettre de travailler ensemble.<br/>\n' +
                '\tLa conception de Spike permet aux billes d\'être ramassées en utilisant les liens zip, qui sont relativement rigides et donc en mesure de supporter le poids léger de la balle tout en étant également capable de se plier en glissant le long du plastique ondulé. L\'espace de 3 pouces entre les bandes de roulement et la feuille de plastique ondulé empêche les billes de se coincer, surtout près des trois rangées de roues de guidage situées au bas, au milieu et au haut du système où il y a le moins de flexibilité de la bande de roulement. \n' +
                '</div>\n' +
                '\n' +
                '    <div class="build1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Lancement (Neeble) </h1>\n' +
                '        Le système de lancement est un système de lancement à volant d\'inertie standard qui a été modifié pour utiliser 8 roues tournant à l\'aide de deux banebots avec des boîtes de vitesses 5:1. Les roues sont telles qu\'il y a deux rangées de roues de chaque côté du rail de guidage et chaque roue a été doublé (voir image). Les roues de chaque côté du rail de guidage sont reliées entre elles et les moteurs au moyen de engrenages qui ont été alignés et stabilisés au moyen de Chenaux en c et de roulements plats. Parce que les pièces de jeu sont flexibles, nous avons positionné les deux ensembles de roues à environ 2,6” l\'un de l\'autre pour utiliser la pression pour augmenter la puissance de lancement. La bille va tomber légèrement derrière les roues, étant donné que le diamètre central des roues supérieures empêchera la bille de tomber dans la bonne position. Pour cette raison, une manivelle coulissante a été incluse dans la conception directement derrière le lancement afin de pousser la balle dans le lancement et d\'empêcher un blocage. Le lancement de la structure sera placé sur une charnière et un système à pignon et crémaillère à ajuster l\'angle de tir. Pour compenser le changement d\'angle, le tube menant au lancement utilise un tube flexible en aluminium qui n\'empêchera pas la bille de tomber à la bonne position.\n' +
                '</div>\n' +
                '\n' +
                '    <div class="build3"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Câblage et programmation  </h1>\n' +
                '        Le câblage du robot n\'a commencé que lorsque toutes les pièces mécaniques ont été complètement assemblées. La principale raison en est que nous avons décidé que le câblage devait être accessible, mais aussi sûr et en utilisant nos connaissances des années précédentes, il est clair que notre conception allait changer pendant le processus de construction, ce qui pourrait interférer avec le câblage. Une fois le robot terminé, nous avons déterminé l\'emplacement idéal sur le cadre principal du robot pour placer la bande terminale et le cortex. De là, il s\'agissait simplement de guider les fils depuis les moteurs jusqu\'au cortex et à la source d\'énergie, tout en évitant les pièces mobiles et en gardant les fils immobilisés en toute sécurité.<br/>\n' +
                '\tLa programmation du robot est très simple car il n\'y a pas d\'automatisation super complexe, juste le tri des capteurs de couleur est automatisé. Grâce au capteur, le robot est entièrement programmé en C en utilisant la bibliothèque PROS. La raison principale de L\'utilisation de PROS est en raison de son bon support I2C. Le Pros utilise un port de RTOS (Real time operating system), il est donc très facile de séparer l\'automatisation du contrôle manuel et chaque pièce qui s\'écrase n\'affecte pas l\'autre. \n' +
                '</div>\n' +
                '\n' +
                '    <div class="build4"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Défis, problèmes et difficultés </h1>\n' +
                '\tDu point de vue d\'un ancien membre, le plus grand défi auquel les équipes cégep font face est le roulement de personnel. L\'année dernière, nous avons eu une excellente année avec des membres pour la plupart expérimentés, alors que cette année, nous sommes pour la plupart des nouveaux membres. L\'avantage pour les esprits Nouveaux est qu\'ils apportent de nouvelles perspectives, mais l\'inconvénient est que la création d\'une dynamique de groupe qui fonctionne couramment lorsque nous sommes tous les étudiants avec d\'autres préoccupations peut être un défi. Dans l\'ensemble, nous avons réussi à bien travailler en équipe avec ce temps nous avons eu ensemble, et j\'espère continuer à grandir en tant qu\'équipe, même après que la compétition finie.        \n' +
                '</div>';
        }

        function kiosk() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            var body = document.getElementById('body');
            body.innerHTML += '<div class="kiosk1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Pourquoi MIB? </h1>\n' +
                '\t« Homme en Noir » est un film sorti en 1997. La franchise a connu une période difficile en 2012 avec un film qui ne sera pas nommé. Tout en essayant de trouver des thèmes pour cette année, les nouvelles sont sorties au sujet d\'un MIB quatrième film potentiellement sortir qui nous a inspirés à saisir l\'occasion d\'apporter le thème à Vanier.<br/>\n' +
                '\tLes hommes en noir utilisent des technologies très avancées dans leurs opérations clandestines afin de lutter contre les envahisseurs extraterrestres qui cherchent à nuire à la Terre, tout en offrant une protection à ceux qui viennent paisiblement. La forte corrélation entre la technologie dans le film et l\'esprit innovateur de la robotique semblait comme un ajustement parfait. La franchise est assez connue pour être accessible au public tout en n\'étant pas un thème qui a été exagéré au cours des dernières années.\n' +
                '</div>\n' +
                '\n' +
                '    <div class="kiosk2"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> La conception de la Borne </h1>\n' +
                '\tPar vote unanime, la configuration finale et le concept de design était le design de l\'appartement de K comme vu dans « Hommes en noir 2 ». Le thème est facilement reconnaissable et la disposition du kiosque s\'écoule avec les fonctions; la salle des armes à l\'arrière est pour travailler sur le robot et l\'avant est le salon où la présentation peut commencer. <br/>\n' +
                '\tGrâce aux armoires dans la salle des armes, le rangement est directement mis en œuvre dans la conception et avoir des outils stockés dans notre artillerie est cohérent avec le thème. L\'espace alloué pour l\'entretien des robots représente les deux tiers de notre espace alors que la zone de présentation n\'en représente qu\'un tiers. Le réglage technologiquement avancé est parfait pour l\'entretien du robot et le fait d\'avoir l\'espace prévu à l\'avant pour la présentation décontractée élimine l\'encombrement tout en travaillant sur le robot entre les rondes et donne suffisamment d\'espace pour travailler en toute sécurité. <br/>\n' +
                '\tAu départ, la porte allait être un écran avec la façade murale peinte ou projetée pour vraiment capturer la scène à partir de laquelle nous avons été inspirés. Dans le film, le mur de l\'appartement s\'envole pour révéler la salle des armes. Après un remue-méninge sur les façons de faire fonctionner l\'écran du projecteur, les deux idées principales étaient de projeter une image, qui aurait semblé trop fausse, ou de peindre l\'écran, qui se détacherait probablement en roulant vers le haut et vers le bas. Un nouveau concept pour le placement de porte discrète a été décidé en utilisant des portes coulissantes déguisées en étagères. <br/>\n' +
                '\tLe placement des écrans et des accessoires interactifs sont attrayants pour le public et ajoutent un détail qui renforce l\'esthétique globale afin qu\'il y ait quelque chose de nouveau à voir à chaque moment de la présentation.\n' +
                '</div>\n' +
                '\n' +
                '\t<div class="kiosk3"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Les Murs </h1>\n' +
                '\tLe placement des murs a suivi une structure similaire qui a fait ses preuves dans le passé: s\'il n\'est pas cassé, ne le réparez pas! L\'Espace 8\'x12’ est parfait pour le rangement des outils et l\'entretien des robots et laisse suffisamment de place à l\'avant pour que les visiteurs se sentent les bienvenus. <br/>\n' +
                '\tCette année, les murs se sont avérés être un défi pour se faire refaire et repeindre. En raison de l\'espace limité alloué à L\'équipe de robotique à Vanier au cours du semestre, nous avons dû être aussi efficaces que possible et faire avec ce que nous avions. Nous avons eu un accrochage avec les panneaux parce qu\'ils n\'avaient pas été faits avant la fin des vacances d\'hiver, ce qui a grandement retardé notre processus de peinture. Les principaux défis étaient de bien assembler les murs, de déterminer l\'emplacement des murs et de coordonner le ramassage des matériaux (parce que transporter 8 gallons de peinture sur l\'autobus n\'aurait pas été amusant!). En ce qui concerne les murs, il semble que tout ce qui aurait pu mal tourner soit pire que ce qu\'on avait imaginé!!!<br/>\n' +
                '\tCependant, grâce aux membres dévoués de notre kiosque qui ont abandonné leurs week-ends pour venir alors qu\'il n\'y avait pas d\'autres élèves à déranger par notre peinture, l\'ensemble du processus s\'est avéré un succès. Les petites réparations sur les murs et les murs ont été renuméroté et peintes dans les semaines avant la compétition. Aussi stressante que l\'expérience ait été, elle a permis de raconter de bonnes histoires et d\'en tirer une leçon: construire les murs l\'année précédente!\n' +
                '</div>\n' +
                '\n' +
                '\t<div class="kiosk4"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Accessoires pour la salle des armes </h1>\n' +
                '\tNous croyons que l\'importance d\'une hélice n\'est pas dans son esthétique, mais les difficultés et les complications qui surviennent dans le bâtiment. Que ce soit en raison du peu de matériaux et d\'outils disponibles, ou simplement d\'un manque d\'expérience dans la construction. Il est inévitable qu\'à un moment donné quelque chose tourne mal. Nous savons de première main qu\'en faisant ces erreurs lors de la création d\'un accessoire, les idées que vous avez soigneusement construites dans vos propres pensées sont complètement décimées par les lois mêmes de la physique. Par conséquent, vous aurez à vous demander si vous êtes même capable de créer un objet qui dépeint ce que vous voulez, alors que l\'accumulation de votre travail se trouve en face de vos vues mêmes de se moquer de vous. Cela dit, si vous pouvez apprendre de ces erreurs et les Modifier pour fonctionner avec votre pièce, il va créer quelque chose qui semble visuellement distinct, mais le plus important, c’est quelque chose que vous pouvez vous sentir fier.\t\n' +
                '</div>';
        }

        function web() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            var body = document.getElementById('body');
            body.innerHTML += '<div class="web2"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '    <h1 class="text-title"> Préparation initiale </h1>\n' +
                '    Le moment après que le thème a été décidé, le travail sur le site web à commencer. Parce que notre thème était «Men in Black» on voulait créer un site web avec un à esthétique futuriste et extraterrestre. Initialement on a prévu à utiliser beaucoup d\'animation 3d et de «webGL» afin de démontrer notre maitrise de l’animation 3d. Malheureusement on manquait de membres qui savait comment faire et nos membres qui étaient prêts à apprendre avait moins de temps libre cette année. Alors après plusieurs discussions on a descendu nos attentes afin de ne pas avoir trop de travail. Grâce à cette décision, on a pu finir le site web avant la date de remise.\n' +
                '</div>\n' +
                '\n' +
                '<div class="web1"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '    <h1 class="text-title"> Réalisation en «Laravel» </h1>\n' +
                '    Parce qu\'on devait développer le site web rapidement et elle devait être bilingue on a décidé d\'utiliser «Laravel». «Laravel» nous a permis de rapidement et facilement développer un site web qui utilise beaucoup d’animation visuel. «Laravel» nous a permis de rapidement et facilement développer un site web qui utilise beaucoup de code CSS and PHP. Elle a aussi une interface de langue, ce qui est important pour nous, parce qu\'on doit faire le site web en anglais et en français. «Laravel» nous a permis de réutiliser beaucoup de code entre tous les pages différent. Elle nous a permis d\'éviter de créer de bogue de copier-coller.\n' +
                '</div>\n' +
                '\n' +
                '<div class="web3"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '    <h1 class="text-title"> Création du contenu du site web </h1>\n' +
                '    Un élément important et souvent oublié dans la compétition robotique CRC sont les contenus du site web. Le contenu des sites web donne de l\'information d\'une valeur inestimable sur comment les équipe se prépare pour la compétition. Contraire aux croyances populaires, tu ne peux pas écrire toute l\'information pour le site web la fin de semaine avant la date de remise. Non seulement que sa réduit la qualité de l\'écriture à cause des erreurs de manque d\'attention mais ça rajoute dû stresse sur le programmeur qui a déjà ses propres problèmes. En conclusion, pour le texte sur le site web, ont écrit et traduit la contenue au fure et à mesure qu\'on se préparait afin que ça soit le meilleur possible.\n' +
                '</div>';
        }

        function video() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            var body = document.getElementById('body');
            body.innerHTML += '<div class="video1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Penser au concept </h1>\n' +
                '        La première rencontre a commencé avec la présentation de divers extraits des films “Hommes en noir” afin d’en trouver de l’inspiration. Le contenu essentiel du vidéo (la description de Vanier, le jeu ainsi que le robot) a été discuté et noté et l’équipe a discuté d’idées afin d’introduire le contenu de façon fluide dans la vidéo. Le consensus est d’écrire un scénario qui suivra l’histoire d’une nouvelle recrue (le personnage de J) qui est introduit à VIB et doit répondre à une situation urgente (le jeu) à l’aide du superviseur (l’agent K). Afin de compléter leur mission, il est essentiel qu’ils récupèrent un appareil extraterrestre (le robot). L\'idée derrière la vidéo est de recréer l\'intrigue principale du premier film Men in Black sous forme de parodie utilisant le défi de cette année.\n' +
                '</div>\n' +
                '\n' +
                '    <div class="video2"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Processus de tournage </h1>\n' +
                '\tFilmer la courte vidéo de Robotics a été un plaisir! En peu de temps, notre responsable d’équipe a filmé un court sketch comique et a bien expliqué notre robot et notre compétition. Avec les 2 acteurs principaux notre réalisateur et notre agent derrière la caméra, l\'expérience de tournage a été fluide et agréable. Pour un nouveau réalisateur, il a fait un excellent travail, notre cadreur était incroyable en tournage; elle savait exactement quel angle était le meilleur pour un plan donné. La vraie star, Jet, a fait un travail phénoménal dans son rôle en raison de sa capacité à mémoriser ses répliques sur-le-champ et de son idée utile sur la façon d’aborder différemment certaines scènes. On a eu beaucoup de plaisir à apprendre, à jouer et à réciter nos répliques de manières différentes et bizarres pendant le processus de tournage, et tout cela grâce aux excellentes compétences de mise en scène de Humam, notre réalisateur. Depuis que la plupart de nos prises ont été filmées au centre STEM de Vanier, c’était plus facile de se concentrer et de bien dire nos paroles. bien que la réinitialisation a été faite à l\'extérieur près de l\'entrée de l\'école dans le froid! <br/>\n' +
                'Personnellement, parmi tous les clichés pris, mon préféré devrait être la scène où l\'agent Y part à la poursuite de l\'oie sauvage à la recherche des clés du laboratoire! J\'ai aimé revivre cette scène parce que c\'est l\'une de mes scènes préférées de tous les temps, celle de Men in Black! En conclusion, être acteur de l\'équipe de cinéma robotique a été une expérience intéressante à laquelle j\'aimerais prendre part l\'année prochaine!\n' +
                '</div>\n' +
                '\n' +
                '    <div class="video3"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Animations pour Robot et Jeu avec Blender </h1>\n' +
                '\tLe processus de création de l\'animation pour l\'explication du jeu était assez simple grâce aux conseils de notre mentor Richard Mondoux. Tout d\'abord, nous avons mesuré les dimensions du champ au coup d\'envoi et les avons recréées en 3D à partir de nos croquis et mesures. Blender est un logiciel gratuit relativement facile à utiliser, il n’a donc pas fallu trop de temps pour créer nos animations. Nous avons reçu des conseils sur la manière d’améliorer la qualité de notre résultat final, de sorte que l’animation 3D devrait avoir une meilleure apparence cette année.        \n' +
                '</div>';
        }
    </script>

@endsection
