<!DOCTYPE html>
<html lang="en-US">

<?php include ('head.php'); ?>

<body>
    <div class="wrapper">
        <?php include ('sidebar_admin.php'); ?>
        <div class="content">



            <p class="text text-heading font-mate color-purple1">Resources</p>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="background">
                <p class="text text-subtitle font-robo color-purple1">Background</p>
                <div style="height: 15px;"></div>
                <p class="text text-body font-robo color-purple1">
                    In order to address a shortcoming in the number of STEM graduates in the United States, it is clear
                    we need to foster not only an interest in science, but also an appeal to children who feel that a
                    STEM field is beyond their reach. An early obstacle to students may be their math skills, especially
                    so as students reach middle- and high-school. By increasing math literacy early in the education
                    process, our group hopes to increase the number of students who are passionate about STEM. We also
                    hope we will further those students' confidence in the application of their knowledge of mathmatics
                    in their everday lives!<br><br>
                    Our game will be implemented using controls similar to existing rhythm games such as "catch the
                    beat" or "osu!catch" in order to draw upon themes the player is already familiar with. Using Godot,
                    an open-source game engine, allows us to develop for multiple operating systems. The team will also
                    be leveraging Microsoft's GitHub for version control and the coordination of deliverables. Using
                    open-source software as the backbone of our development suite allows us to carry a lower overhead
                    than other commercial offerings; we hope to release our game free to the public!<br><br>
                    <a class="text-underline color-purple1" href="documents/proposal_v2.pdf">Would you like to know
                        more? See our proposal here.</a>
                </p>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="description">
                <p class="text text-subtitle font-robo color-purple1">Description</p>
                <div style="height: 15px;"></div>
                <p class="text text-body font-robo color-purple1">
                    Tap Tap Computation is a math-based game in which users create their own personal profile and
                    progress through four stages of mathematical subjects (addition, subtraction, multiplication, and
                    division). Each stage contains three levels, with each level being more difficult than the one
                    prior. Once one level has been completed within a stage, the next level unlocks for the user, and
                    once the user has completed all levels within a stage, the next stage unlocks.<br><br>
                    Each level has the same basic gameplay loop: the user controls a bucket at the bottom of the screen
                    that can be moved with either the left or right arrow keys, or A and D on the keyboard. Once a level
                    is selected, the user is tasked with catching falling apples from the top of the screen with their
                    bucket. Each apple has a number on it corresponding to either a correct answer or a wrong answer to
                    the equation that appears at the top of the screen. Each equation within a level is randomly
                    generated with some constraints to keep it in line with what 3rd graders would be expected to
                    practice. However, as the user progresses through a stage, the equations become harder to calculate
                    and the apples fall faster, increasing the challenge.<br><br>
                    The user will start with three hearts for each level. If an incorrect answer is caught with the
                    bucket, the user will lose a heart. If the correct answer falls through the screen, the user loses a
                    heart. Once all questions have been asked and answered correctly, or once the user loses all three
                    hearts, the level concludes, and the summary screen is displayed.<br><br>
                    On the summary screen for each level, the user can see which questions were asked, how they
                    answered, and whether or not their answer was correct, with the correct answer being given if theirs
                    was wrong.
                </p>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="bibliography">
                <p class="text text-subtitle font-robo color-purple1">Bibliography</p>
                <div style="height: 15px;"></div>
                <p class="text text-body font-robo color-purple1">
                    Our game was built with the Godot game engine. Links to Godot's website and documentation can be
                    found below.<br><br>
                    <a class="text-underline color-purple1" href="https://godotengine.org">Godot's website</a>,
                    <a class="text-underline color-purple1" href="https://docs.godotengine.org/en/3.1">Godot's
                        documentation</a><br><br>
                    The music in Tap Tap Computation is provided under a noncommercial license from Filmstro.
                    Specifically we utilize the "Gambado" audio track. More information concerning Filmstro can be found
                    in the link below.<br><br>
                    <a class="text-underline color-purple1" href="https://filmstro.com">Filmstro's website</a><br><br>
                    The button click, correct orb, incorrect orb, and countdown number noises in Tap Tap Computation are
                    provided under a Creative Commons 0 License from
                    Freesound. Links to Freesound's website and the specific sounds used can be found below.<br><br>
                    <a class="text-underline color-purple1" href="https://freesound.org">Freesound's website</a>,
                    <a class="text-underline color-purple1"
                        href="https://freesound.org/people/Leszek_Szary/sounds/191592">Leszek Szary's "menu button"</a>,
                    <a class="text-underline color-purple1"
                        href="https://freesound.org/people/unadamlar/sounds/476178">unadamlar's "Correct Choice"</a>,
                    <a class="text-underline color-purple1"
                        href="https://freesound.org/people/unadamlar/sounds/476177">unadamlar's "Wrong Choice"</a>,
                    <a class="text-underline color-purple1"
                        href="https://freesound.org/people/margo_heston/sounds/197019">margo_heston's "Three (f)"</a>,
                    <a class="text-underline color-purple1"
                        href="https://freesound.org/people/margo_heston/sounds/197016">margo_heston's "Two (f)"</a>,
                    <a class="text-underline color-purple1"
                        href="https://freesound.org/people/margo_heston/sounds/197013">margo_heston's "One
                        (f)"</a><br><br>
                    The background art used in Tap Tap Computation is provided under a general free-use license from
                    CraftPix. Links to CraftPix's website and the specific art used can be found below.<br><br>
                    <a class="text-underline color-purple1" href="https://craftpix.net">CraftPix's website</a>,
                    <a class="text-underline color-purple1"
                        href="https://craftpix.net/freebies/free-cartoon-forest-game-backgrounds">Forest
                        backgrounds</a>,
                    <a class="text-underline color-purple1"
                        href="https://craftpix.net/freebies/free-beach-2d-game-backgrounds">Beach backgrounds</a>,
                    <a class="text-underline color-purple1"
                        href="https://craftpix.net/freebies/free-desert-scrolling-2d-game-backgrounds">Desert
                        backgrounds</a>,
                    <a class="text-underline color-purple1"
                        href="https://craftpix.net/freebies/free-underwater-world-parallax-game-backgrounds">Underwater
                        backgrounds</a>
                </p>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="domain">
                <p class="text text-subtitle font-robo color-purple1">Domain research</p>
                <div style="height: 15px;"></div>
                <p class="text text-body font-robo color-purple1">
                    Since our game is designed to be educational, players will be learning math based on the U.S.'s
                    Common Core standards. 3rd Grade is our target audience, so below is a link to their learning
                    standards. They will be solving problems involving addition, subtraction, and
                    multiplication.<br><br>
                    <a class="text-underline color-purple1"
                        href="http://www.corestandards.org/Math/Content/3/introduction">3rd Grade Mathematics
                        Standards</a><br><br>
                    The core theory behind this game is the idea of repetition as a means for learning. In a 1986
                    study conducted for the Journal of Educational Psychology, the findings were clear that the
                    more someone repeats a procedure, the better that person is going to be at recalling it in
                    the future. <br><br>
                    <a class="text-underline color-purple1"
                        href="https://psycnet.apa.org/record/1986-29122-001">Quantitative and qualitative effects of
                        repetition on learning from technical text</a>
                </p>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <p class="text text-title font-mate color-purple1">
                <a class="text-no-underline color-purple1" href="deliverables.php">Deliverables</a>
            </p>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="specification">
                <p class="text text-subtitle font-robo color-purple1">Specification</p>
                <div style="height: 15px;"></div>
                <p class="text text-body font-robo color-purple1">
                    <a class="text-underline color-purple1" href="documents/srs_v2.pdf">srs</a>
                </p>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="prototype">
                <p class="text text-subtitle font-robo color-purple1">Prototype</p>
                <div style="height: 15px;"></div>
                <p class="text text-body font-robo color-purple1">
                    <a class="text-underline color-purple1" href="documents/prototype_v2.zip">prototype</a>
                </p>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="presentation">
                <p class="text text-subtitle font-robo color-purple1">Presentation slideshow</p>
                <div style="height: 15px;"></div>
                <p class="text text-body font-robo color-purple1">
                    <a class="text-underline color-purple1" href="documents/presentation.pdf">presentation</a>
                </p>
            </div>
            <div style="height: 20px;"></div>
            <div style="height: 1px;width: 610px;background-color: #807589;"></div>
            <div style="height: 20px;"></div>
            <div id="demonstration">
                <p class="text text-subtitle font-robo color-purple1">Demonstration video</p>
                <div style="height: 15px;"></div>
                <iframe src="https://drive.google.com/file/d/1XZ-DfJi9YmeaH1JO1xaFVVJG_vYz34Vf/preview" width="640"
                    height="480"></iframe>
            </div>



        </div>
    </div>
</body>

</html>