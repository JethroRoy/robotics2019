
@extends ('layouts.masterfr')

@section('body')
    <div class="tutorial3"></div>

    <div class="background-gradient gradient-red">
        <h1 class="text-title"> Comment configurer PROS et utiliser n'importe quel capteur I2C avec le cortex VEX </h1>
        Le I2C (circuit intégré) est un protocole de communication standard à deux fils pour la communication entre différents microcontrôleurs. Il est principalement utilisé pour la communication à courte distance entre microcontrôleurs et capteurs. Pour cette raison, il est assez facile de trouver une variété de capteurs qui utilisent ce protocole sur des sites Web tels que aliexpress ou même à partir d'autres platformes robotiques tels que la robotique REV. Expliquer le fonctionnement d’I2C à partir d’un niveau de base n’entre pas dans le cadre de ce didacticiel. Cependant, ce dernier expliquera certains détails nécessaires lors de l’utilisation de ces capteurs avec le cortex VEX.<br/>
        Le port VEX Cortex I2C utilise 3,3 V et est tolérant à 5V comme tous les autres E/S numériques. Cela signifie que si vous souhaitez le connecter à un capteur 5V, vous devez utiliser un décaleur de niveau entre les deux appareils. I2C utilise également un système basé sur les adresses pour que plusieurs capteurs avec des adresses uniques puissent être connectés en chaîne. Lorsque vous connectez le capteur au cortex, assurez-vous que les 4 broches sont correctement câblées, sinon cela ne fonctionnera pas et pourrait endommager le capteur. Les fils 5V et de terre sont généralement de couleur rouge et noire respectivement, il vous suffit donc de consulter la documentation des capteurs pour les données et l'horloge. J'ai fourni le brochage du cortex Vex.<br/>
        Bien que vous puissiez utiliser le port I2C avec RobotC, c'est beaucoup plus facile avec PROS, donc, j'utiliserai PROS afin de minimiser le nombre de problèmes potentiels. La plupart des capteurs I2C utilisent une structure de registre pour permettre à l'utilisateur d'accéder à de nombreuses données. Chaque registre a une adresse et vous pouvez lire et écrire sur chaque entrée de cette table. Vous trouverez ci-dessous une partie du tableau du capteur de couleur Rev Robotics V2.<br/>
    </div>

    <div class="tutorial1"></div>

    <div class="background-gradient gradient-red">
        <h1 class="text-title"> Conception </h1>
        Vous pouvez écrire dans un registre en utilisant la commande<br/><br/>
        <strong>i2cWriteRegister (ADDRESSE, REGISTRE, VALEUR);</strong><br/><br/>
        Par exemple,<br/><br/>
        <strong>i2cWriteRegister (0x39, 0x80, 0x13);</strong><br/><br/>
        Où "ADRESSE" est l'adresse du capteur i2c et non le registre que vous souhaitez. Vous pouvez le trouver dans la partie supérieure des informations sur le capteur.<br/>
        Où «REGISTRE» est l'entrée dans la table de registre à laquelle vous voulez accéder, et «VALEUR» est le numéro que vous voulez écrire dans ce registre.<br/>
        La lecture est la même chose sauf<br/><br/>
        <strong>i2cReadRegister (ADDRESSE, REGISTRE, RESULTAT, 1);</strong><br/><br/>
        Par exemple:<br/><br/>
        <strong>uint8_t dataIn [1];</strong><br/>
        <strong>i2cReadRegister (0x39,0x80 + 0x16, dataIn, 1);</strong><br/><br/>
        Sauf que "RESULTAT" est un tableau de 8 bits. La valeur est stockée dans le premier octet de ce tableau.<br/>
        C'est tout ce qu'il y a à faire avec la plupart des capteurs I2C. Certains sont évidemment plus compliqués et vous devriez toujours vérifier la fiche technique du capteur afin de trouver sa table de registre et son adresse I2C. La plupart des registres utilisent le format binaire, vous voudrez donc vous familiariser avec la notation binaire de nombres à 8 bits pour contrôler les caractéristiques discrètes du capteur.
    </div>

    <div class="tutorial2"></div>

    <div class="background-gradient gradient-red">
        <h1 class="text-title"> DÉPANNAGE </h1>
        Si vous n'obtenez que des 0 du i2cReadRegister(), essayez d'attribuer une valeur par défaut à dataIn pour vous assurer que la fonction renvoie zéro et si elle vérifie le capteur, le câblage et l'adresse I2C. Si vous avez un oscilloscope, vous pouvez vérifier les données en cours de transmission, mais il peut être difficile d’en avoir accès.
    </div>

@endsection

@section('content')

@endsection
