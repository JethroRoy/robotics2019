
@extends ('layouts.masterfr')

@section('body')
    <div class="robot1"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Rules (size, motors, electronics) </h1>
        This year’s robot must be no larger than 3’x3’x3’ with no extensions, including moving parts, permitted during the heat and will be controlled using the VEXnet Joystick Remote Control (no other transmitters are permitted).<br/>
        The maximum number of motors (aside from low voltage motors such as the VEX EDR motors) is 8; however, no more than 6 motors of the same type and no more than 4 motors of the same type and gearbox will be permitted.<br/>
        The power source for our robot will be  two 12V, 2Ah parallel-wired lead-acid sealed batteries connected using a repurposed 12V Makita drill casing. Directly following the batteries will be a 30A fuse connected in series as well as the kill switch that will kill the 12V circuit when pushed down. Both the fuse and the kill switch will be accessible for safety reasons and ease of access.
    </div>

    <div class="robot2"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Design </h1>
        The robot’s design was devised taking into account the three main challenges of the game: the steps between levels, picking up balls and launching them. <br/><br/>
        The drive system incorporates mecanum wheels for optimal maneuverability paired with a belt and pulley system arranged in the “climbing” tank style to overcome the steps using the tension in the belts as leverage. This system allows for the robot to easily move over the steps present on the field and be able to maneuver extremely well on the flat surfaces. The mecanum wheels allow the robot to move perfectly in order to aim precisely when shooting game pieces into the target or picking up the balls.<br/><br/>
    </div>

    <div class="robot3"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Design (cont'd.) </h1>
        The pickup system was positioned between the back wheels so that the clearance is ensured when climbing stairs and can therefore be placed close to the ground in order to pick up balls. It was designed to bring balls as high up as possible using a compact system that can work continuously. The zip ties attached to tank treads against a sheet of corrugated plastic was the system deemed the best to quickly and efficiently bring the playing pieces onto the robot. The pickup system feeds into a first hopper that funnels all the balls towards the sorting system equipped with an I2C sensor that will determine whether the colour of the ball corresponds to the color desired.
    </div>

    <div class="robot4"></div>

    <div class="background-gradient gradient-yellow">
        <h1 class="text-title"> Design (cont'd.) </h1>
        From there, the accepted balls are dropped into a second hopper where they wait for launch. The feed into the launch uses a flexible tube that accommodates for the angle of the launch changing. The use of a vertical wheel, especially if placed on a hinge, would have eliminated a lot of vertical space on the robot and would not have made use of the horizontal space despite being less complex than the horizontal setup. In our design, we decided to sacrifice simplicity for capacity and have the main hopper be taller in order to take advantage of gravity. Thus, the launch itself is composed of two consecutive sets of two stacked wheels (8 wheels total) on either side of a guiding rail. The gap between the stacked wheels is aligned with the center of the ball to maximize the contact and allow for a stronger and more precise shot.<br/>
        When the angle of the shooter is increased, there is a possibility that the ball will not fall in direct contact with the launch wheels, which is why the design includes a precautionary slider-crank positioned 3 inches behind the wheels and extending 2 inches in order to give the balls the extra push they need in order to reach the wheels.
    </div>
@endsection

@section('content')

@endsection
