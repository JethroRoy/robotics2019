
@extends ('layouts.master')

@section('body')

<div id="selector" style="width:100%;height:100%; margin-top:57px;overflow: hidden;">
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

            var body = document.getElementById('body');
            body.innerHTML += '<div class="kiosk1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Why MIB? </h1>\n' +
                '        Men in Black is a movie that originally came out in the 1997 and its popularity led to a sequel in 2002. The franchise hit a rough patch in 2012 with a movie that shall not be named. While trying to come up with themes for this year, news came out about a MIB fourth movie potentially coming out which inspired us to take hold of the opportunity to bring the theme to Vanier.<br/>\n' +
                '        The Men in Black use very advanced technology in their underground operations in order to fight the war against invading alien races that seek to harm the Earth, while offering protection to those who come peacefully. The strong correlation between the technology in the movie and the innovative spirit of robotics seemed like a perfect fit. The franchise is well known enough to be accessible to the public while also not being a theme that has been overdone over the past few years.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="kiosk2"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Designing the Kiosk </h1>\n' +
                '        By unanimous vote, the final setup and design concept was the design for K’s apartment as seen in Men in Black 2. The theme is easily recognizable and the layout of the kiosk flows with the functions; the weapon room in the back is for working on the robot and the front is the living room where the presentation can begin. <br/>\n' +
                '        Thanks to the cabinets in the weapon room, storage is directly implemented into the design and having tools stored in our artillery is coherent with the theme. The space allotted for robot maintenance is two thirds of our space while the presentation area is only one third. The technologically advanced setting is perfect for robot maintenance and having the designated space in the front for casual presentation eliminates crowding while working on the robot between rounds and gives ample room to work safely.<br/>\n' +
                '        Initially, the doorway was going to be a screen with the wall facade painted or projected to truly capture the scene from which we were inspired. In the movie, the wall of the apartment flies up to reveal the weapon room. After brainstorming ways to get the projector screen to work well, the two main ideas were to project an image, which would have looked too fake, or painting the screen, which would likely peel off while rolling up and down. A new concept for discrete door placement was decided using sliding doors disguised as bookshelves.<br/>\n' +
                '        The placement of screens and interactive props are appealing to the audience and add a more detail that heightens the overall aesthetic so that there is something new to see at every moment of the presentation.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="kiosk3"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> The Walls </h1>\n' +
                '        The placement of the walls followed a similar structure that has proven successful in the past: if it ain’t broke, don’t fix it! The 8’x12’ space is perfect for tool storage and robot maintenance and leaves enough from in the front for visitors to feel welcome.<br/>\n' +
                '        This year, the walls proved to be a challenge to get redone and repainted. Due to the limited space allotted to the robotics team at Vanier during the semester, we had to be as efficient as possible and make due with what we had. We had hit a snag with the panels because they had not done before the end of the winter holidays, which greatly delayed our painting process. The main challenges were reassembling the walls correctly, determining wall placement and coordination of material pickup (because carrying 8 gallons of paint on the bus wouldn’t have been fun!). When it came to the walls, it seemed that everything that could have gone wrong went even worse than imagined!!!<br/>\n' +
                '        However, thanks to our dedicated kiosk members who gave up their weekends to come in when there were no other students to be bothered by us painting, the whole process proved to be a success. The small repairs on the walls were done and the walls were renumbered and painted within the weeks before the competition. As stressful as the experience had been, it led to some good stories and led to a lesson learned: make the walls the year before!\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="kiosk4"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> The Books and Props </h1>\n' +
                '        We have bookshelves on which we will put books and other decorations. However, since the shelves are mounted so that they are easy to move, putting real books on them would make the wall too heavy. That\'s why we decided to create fake books. The structure of each book is made from recycled cardboard boxes from Vanier\'s various shops and restaurants. The boxes are then cut and assembled to look like books. Subsequently, each book is covered with a paper cover with a title and a concept. The idea of ​​including titles containing plays on words and references based on real books makes every detail of our kiosk fun to see.<br/>\n' +
                '        In our kiosk, the various props make our presentation even more dynamic and immerses the audience in the fictitious world of VIB. To make the kiosk more realistic, we created alien weapons and accessories using materials found at home. Bottles of water, cans and plastic tubes were used to create props according to our theme. <br/>\n' +
                '        ​We believe that the importance of an prop is not in its aesthetics, but the trials and complications that arise in building one. Whether this is due to the limited materials and tools at hand, or just a lack of experience in building one. It is inevitable that at some point something will go awry. We know firsthand in making these mistakes during the creation of a prop, as the ideas that you carefully constructed in your own thoughts are utterly decimated by the very laws of physics. Consequently, you will have to question if you’re even capable of creating an object that portrays what you want, while the accumulation of your work lies in front of your very sights to mock you. With that said, if you can learn from these mistakes and alter them to function with your piece, it will create something that looks visually distinct, but most importantly it’s something you can feel proud of.\n' +
                '    </div>';
        }

        function web() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            var body = document.getElementById('body');
            body.innerHTML += '<div class="web2"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '    <h1 class="text-title"> Initial planning </h1>\n' +
                '    Immediately after voting for the theme, planning for the website started. Because our theme was “Men in Black” we wanted to make a fancy futuristic almost alien looking website. At first, we had planned to use fancy 3d animations and webGL content to showcase our 3d modeling skills on the website. Unfortunately, we lacked people with previous experience and the people working on the website this year did not have as much free time as previously expected. So after a few meetings and serious deliberation we decided to scale back our plans for the website to a more realistic and manageable amount of work. As such we where able to meet the deadline for the competition.\n' +
                '</div>\n' +
                '\n' +
                '<div class="web1"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '    <h1 class="text-title"> Implementation in Laravel </h1>\n' +
                '    Because we had to be develop the website quickly and make it bilingual, we decided to use Laravel in order to make the website. Laravel provides a relatively easy to use and intuitive interface for managing larger websites that use a lot of CSS and PHP. It also has a languages interface, which is an important for us, as the CRC robotics competition requires our website to be bilingual. Laravel as a framework allows for efficient code reuse between the English and French versions of the website and even different pages. This prevented us from copy pasting a bunch of code and then having to change things in multiple places afterwards.\n' +
                '</div>\n' +
                '\n' +
                '<div class="web3"></div>\n' +
                '\n' +
                '<div class="background-gradient gradient-orange">\n' +
                '    <h1 class="text-title"> Structuring of content </h1>\n' +
                '    An important but often overlooked element of any CRC robotics website is the actual content. The websites content provide important insight into the process a team put into preparing for the competition.  Contrary to popular belief, you cannot easily write all the content for the website the weekend before the deadline. Not only does this lead to a lack of proofreading and careless mistakes, it also puts undue stress on the website programmers who may also be having last minute issues of their own. As such, the contents for the website, we wrote and translated the content as we prepared for the completion in order to make everything as good as possible.\n' +
                '</div>';
        }

        function video() {
            document.getElementById("selector").innerHTML = '';
            document.getElementById("selector").removeAttribute('style');

            var body = document.getElementById('body');
            body.innerHTML += '<div class="video1"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Brainstorming the Plot </h1>\n' +
                '        The first meeting began with the presentation of various clips from the MIB movies to get inspired. The essential content (description of Vanier, the game and the robot) were noted and ideas to introduce them in a way that flows with the video were discussed. The consensus is to write a script that will follow the storyline of new recruit (J character) being introduced to VIB and must answer to a crisis (the game) with supervising agent K. They need to acquire a particular alien device (the robot) to complete this mission. The idea behind the video is to recreate the main plot of the first Men in Black movie as a parody using this year’s challenge.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="video2"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Script Writing </h1>\n' +
                '        The process started with establishing what is required of the video. We needed to know how much of the time allotted are we putting towards necessary information such as location, rundowns and explanations. This would allow us to know a better estimate on how much time we have for the theme and story. We then detailed various points and scenes reminiscent of our theme that we wanted to be reflected or recreated in the video. Those points were chronologically placed in a timeline. The rest was fleshing out and writing dialogue for the characters and how each scene flowed to the next. It was quite fun to just act out a possible scene using various objects as “props” to see if one scene could be done.\n' +
                '    </div>\n' +
                '\n' +
                '    <div class="video3"></div>\n' +
                '\n' +
                '    <div class="background-gradient gradient-orange">\n' +
                '        <h1 class="text-title"> Animations for Robot and Game using Blender </h1>\n' +
                '        The process of creating the animation for the game explanation was quite straightforward thanks to the advice of our mentor Richard Mondoux, our glorious hero. First, we measured the field’s dimensions at the kickoff and recreated it in 3D  from our sketches and measurements. Blender is relatively easy to use free software, so it didn’t take very long. We were given advice on how to improve the quality of our final render so the 3D animation should look better this year at the cost of taking longer to render.\n' +
                '    </div>';
        }
    </script>

@endsection
