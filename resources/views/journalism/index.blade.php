
@extends ('layouts.master')

@section('body')

<div id="selector" style="width:100%;height:100%; margin-top:57px">
    <div class="journalism-build" onclick="build()">
        <div class="journalism-text">
            <div class="journalism-title">B<br/>U<br/>I<br/>L<br/>D</div>
        </div>
    </div>

    <div class="journalism-kiosk">
        <div class="journalism-text" onclick="kiosk()">
            <div class="journalism-title">K<br/>I<br/>O<br/>S<br/>K</div>
        </div>
    </div>

    <div class="journalism-web">
        <div class="journalism-text" onclick="web()">
            <div class="journalism-title">W<br/>E<br/>B</div>
        </div>
    </div>

    <div class="journalism-video">
        <div class="journalism-text" onclick="video()">
            <div class="journalism-title">V<br/>I<br/>D<br/>E<br/>O</div>
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
                '        <h1 class="text-title"> Basic overview of elements required for the game </h1>\n' +
                '        Given that the main challenges identified were the steps, launching to the buckets and picking up the balls, we decided that the key elements of the robot must be designed in accordance with these challenges. The button and the plinko were dismissed as easy to overcome using the drive system and the robots main frame as leverage.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="robot1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Brainstorming and Designing </h1>\n' +
                '        Our brainstorming process began in early November after the kickoff. We decided to examine similar challenges from previous years and seek inspiration from the methods taken by other schools as well as a general research for various systems related to robots going over rough terrain, launch systems and pickup systems.<br/>\n' +
                '        When the idea for steps was initially presented before kickoff, we considered using + shaped wheels that would climb the stairs. Once we saw the field however, we realized that these wheels were not efficient for the challenge and would make our robot shaky more than it would help. Our next idea was to use suspended wheels in the front, two inches above ground, possibly using treads for extra tension. From there, a bit of internet browsing led us to the mecatankanum concept.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="robot2"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Brainstorming and Designing (cont\'d.) </h1>\n' +
                '        For the pickup system, the consensus on a larger pickup system that would function continuously and feed a funnel at the top was achieved instantly. Efficiency was deemed key and there was no need for precision if the pickup fed into a colour sensor. Originally, the current model of the pickup was supposed to be two parallel sets of treads with fins spanning the entire back of the robot, however, this was deemed too expensive and redundant to have two. The balls roll well and so it was decided that one side would be a sheet of corrugated plastic with only six rows of treads and have a funnel at the bottom to direct them to the pickup’s entrance.<br/>\n' +
                '        For the launch, using pneumatics or spring loaded launch systems were immediately rejected for two main reasons. First, the reload time was not efficient and a continuous launch was desired. Second, the systems are more complicated to build well than their efficiency is worth, which also means that there is more risk for malfunction. A more efficient and simpler system would be to use fast rotating wheels. The system for wheels could either use one vertical wheel with a guiding rail or use two sets of parallel horizontal wheels with a guiding rail between them. The use of a vertical wheel, especially if placed on a hinge, would eliminate a lot of vertical space on the robot and not make use of the horizontal space despite being less complex than the horizontal setup. In our design, we decided to sacrifice simplicity for capacity and have the main hopper be taller in order to take advantage of gravity.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="robot3"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Drive System (Jeff) </h1>\n' +
                '        The base of our robot was designed in such a way that we could get our pickup system and launching system as close to the ground as possible, while still leaving them protected as well as allowing for ground clearance when climbing the steps on the playing field. Therefore, we decided to build it in an “H” pattern, with the drive wheels and motors being housed in the two larger portions of the frame, and the controls as well as wiring housed in the horizontal cross beams. The robot was also built as a 34” (864 MM) square, allowing us a 2” (50 MM) safety cushion in case any cuts were improperly made or we decided to have the batteries or rear wheels stick out of the fram slightly as the rules only allow a maximum size of 36” (915 MM) cubed.<br/>\n' +
                '        To propel our robot, we designed a tandem drive system. Using two different types of drive systems, a Mecanum wheel setup as well as a Tank drive. The Mecanum wheels are each driven individually, and by reversing the direction each individual wheel spins we can achieve many directions of movement that are impossible using normal wheels. We can drive forward and backwards, as well as steer left and right as normal. However, we can also drive completely sideways or in any diagonal direction as well as seen in the diagram below.<br/>\n' +
                '        The second system, the tank tread, was developed to lift the front end of our robot over the steps easily and relieve stress on the front wheels, bearings and frame from the sudden impact at full speed. It is spun using the rear drive axle, with the front axle and the pulley suspended in the air on the front of the robot idling on the axles. This belt, coupled with the angle of approach, will allow our robot to hit the steps at any speed smoothly and efficiently.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="robot4"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Pickup System (Spike) </h1>\n' +
                '        The pickup system of the robot, named Spike, is made of two parallel 1:3:1 VEX C-channels with six rows of tank treads spaced 3 inches away from a sheet of corrugated plastic. White zip ties were connected to the tank treads at intervals using hot glue to ensure they remain in place. Two VEX 393 motors were fixed to the same shaft at the top of the system and connected to each other with reverse leads to allow them to work with each other. <br/>\n' +
                '        Spike’s design allows for the balls to be picked up using the zip ties, which are relatively rigid and thus able to support the light weight of the ball while also able to bend when sliding along the corrugated plastic. The 3 inch space between the treads and sheet of corrugated plastic prevents the balls from getting stuck, especially near the three rows of guiding wheels located at the bottom, middle and top of the system where there is the least tread flexibility.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="build1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Launch (Neeble) </h1>\n' +
                '        The launch system is a standard flywheel launch system that had been modified to use 8 wheels spinning with the help of two banebots with 5:1 gearboxes. The wheels are set up such that there are two rows of wheels on either side of the guiding rail and each wheel has been doubled (refer to image). The wheels on either side of the guiding rail are connected to each other and the motors using gears that have been aligned and stabilized using c-channels and flat bearings. Because the game pieces are flexible, we positioned the two sets of wheels about 2.6” apart to use the pressure to increase the launching power. The ball is going to be dropped slightly behind the wheels, given that the top wheels’ center diameter will prevent the ball from falling into the correct position. Because of this, a slider crank was included in the design directly behind the launch in order to push the ball into the launch and prevent a blockage from occurring. The entire launch structure will be placed on a hinge and have a rack and pinion system to adjust the shooting angle. To compensate for the angle changing, the tube leading to the launch uses a flexible aluminum tube that will not prevent the ball from falling to the correct position.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="build3"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Wiring and Programming </h1>\n' +
                '        The wiring of the robot only began once all the mechanical parts had been fully assembled. The main reasoning for this is that we decided that wiring needs to be accessible, but also safe and using our knowledge of previous years, it is clear that our design would change during the building process which could interfere with wiring. Once the robot was finished being built, we determined the perfect location on the robots main frame to place the terminal strip and cortex. From there, it was simply a game of leading the wires from the motors to the cortex and power source all while avoiding moving parts and keeping the wires safely pinned down.<br/>\n' +
                '        Programming of the robot is quite simple because there isn\'t any super complex automation, just the colour sensor sorting is automated. Because of the sensor, the robot is programmed entirely in C using the PROS library. The main reason for using PROS is because of its good I2C support. Pros uses a port of RTOS (Real time operating system) so it’s super easy to have a separate the automation from the manual control and either part crashing won’t affect the other.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="build4"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Challenges, Problems and Difficulties </h1>\n' +
                '        From the perspective of a former member, the biggest challenge that cegep teams face is the turnover. We had a great year with mostly experienced members last year, while this year, we are mostly newcomers. The advantage to fresh minds is that they bring in new perspectives, but the downside is that creating a group dynamic that functions fluently when we’re all students with other preoccupations can be a challenge. All in all, we managed to work well as a team with what time we had together and hope to continue to grow as a team even after the competition is over.\n' +
                '    </div>';
        }

        function kiosk() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            document.getElementById("body").innerHTML = '';
        }

        function web() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            document.getElementById("body").innerHTML = '';
        }

        function video() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            document.getElementById("body").innerHTML = '';
        }
    </script>

@endsection
