
@extends ('layouts.masterfr')

@section('body')
    <div class="robot1"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Règles (taille, moteurs, électronique) </h1>
        Le robot de cette année ne doit pas dépasser 3'x3'x3’ sans les extensions, y compris les pièces mobiles, permises pendant la chaleur et sera contrôlé à l'aide de la télécommande VEXnet Joystick (aucun autre émetteur n'est autorisé).<br/>
        Le nombre maximum de moteurs (à l'exception des moteurs basse tension tels que les moteurs VEX EDR) est de 8; toutefois, pas plus de 6 moteurs du même type et pas plus de 4 moteurs du même type et boîte de vitesses seront autorisés.<br/>
        La source d'alimentation de notre robot sera constituée de deux batteries plomb-acide scellées 12V, 2Ah à fil parallèle et connectées à L'aide d'un boîtier Makita 12V réutilisé. Directement après les batteries seront un fusible de 30 A connecté en série ainsi que le commutateur d'arrêt qui va tuer le circuit de 12V Une fois poussé vers le bas. Le fusible et l'interrupteur d'arrêt seront accessibles pour des raisons de sécurité et de facilité d'accès.
    </div>

    <div class="robot2"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Conception </h1>
        La conception du robot a été conçue en tenant compte des trois principaux défis du jeu: Les pas entre les niveaux, ramasser les balles et les lancer.<br/>
        Le système d'entraînement incorpore des roues mecanum pour une manœuvrabilité optimale jumelée avec une courroie et un système de poulie disposés dans le style “escalade” réservoir pour surmonter les étapes en utilisant la tension dans les courroies comme levier. Ce système permet au robot de se déplacer facilement sur les étapes présentes sur le terrain et d'être capable de manœuvrer extrêmement bien sur les surfaces plates. Les roues mecanum permettent au robot de se déplacer parfaitement afin de viser précisément lors du tir des pièces de jeu dans la cible ou ramasser les balles.
    </div>

    <div class="robot3"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Conception (suite) </h1>
        Le système de ramassage était placé entre les roues arrière de sorte que l'espace libre soit assuré lors de la montée des escaliers et peut donc être placé près du sol afin de ramasser des balles. Il a été conçu pour amener les balles aussi haut que possible en utilisant un système compact qui peut fonctionner en continu. Les attaches à fermeture éclair fixées aux bandes de roulement de réservoir contre une feuille de plastique ondulé étaient le système jugé le mieux pour amener rapidement et efficacement les pièces de jeu sur le robot. Le système de ramassage alimente une première trémie qui achemine toutes les balles vers le système de tri équipé d'un capteur I2C qui déterminera si la couleur de la balle correspond à la couleur désirée.
    </div>

    <div class="robot4"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Conception (suite) </h1>
        De là, les balles acceptées sont lâchées dans une seconde trémie où elles attendent le lancement. L'alimentation dans le lancement utilise un tube flexible qui s'adapte à l'angle de changement de lancement. L'utilisation d'une roue verticale, surtout si elle est placée sur une charnière, aurait éliminé beaucoup d'espace vertical sur le robot et n'aurait pas utilisé l'espace horizontal malgré sa complexité moindre. Dans notre conception, nous avons décidé de sacrifier la simplicité pour la capacité et avoir la trémie principale être plus grand afin de profiter de la gravité. Ainsi, le lancement lui-même est composé de deux ensembles consécutifs de deux roues empilées (8 roues au total) de chaque côté d'un rail de guidage. L'écart entre les roues empilées est aligné avec le centre de la boule pour maximiser le contact et permettre un tir plus fort et plus précis.<br/>
        Lorsque l'angle du tireur est augmenté, il y a une possibilité que la balle ne tombera pas en contact direct avec les roues de lancement, ce qui est pourquoi la conception comprend un curseur de précaution-manivelle positionnée 3 pouces derrière les roues et l'extension de 2 pouces afin de donner aux balles la poussée supplémentaire dont ils ont besoin afin d'atteindre les roues.
    </div>
@endsection

@section('content')

@endsection
