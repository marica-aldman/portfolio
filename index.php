<?php

// start

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Marica Aldman's portfolio</title>
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
        <link rel="stylesheet" href="CSS/index.css">
        <script src="JS/index.js"></script>
    </head>


<label?php

// top nav

?>
    <body>
        <header>
            <div class="m_nav">
                <label for="menu-control" class="hamburger">
                    <i class="hamburger__icon"></i>
                    <i class="hamburger__icon"></i>
                    <i class="hamburger__icon"></i>
                </label>
                
                <input type="checkbox" id="menu-control" class="menu-control">

                <aside class="sidebar">
                    <nav id="m_nav">
                        <li><button onclick="menu_choice('start')">Start</button></li>
                        <li><button onclick="menu_choice('all')">All projects</button></li>
                        <li><button onclick="menu_choice('live')">Live Websites</button></li>
                        <li><button onclick="menu_choice('FE')">Front End examples</button></li>
                        <li><button onclick="menu_choice('JS')">JS framework examples</button></li>
                        <li><button onclick="menu_choice('other')">Other coding projects</button></li>
                    </nav>

                    <label for="menu-control" class="sidebar__close"></label>
                </aside>
            </div>
            <nav class="d_nav">
                <li><button onclick="menu_choice('start')">Start</button></li>
                <li><button onclick="menu_choice('all')">All projects</button></li>
                <li><button onclick="menu_choice('live')">Live Websites</button></li>
                <li><button onclick="menu_choice('FE')">Front End examples</button></li>
                <li><button onclick="menu_choice('JS')">JS framework examples</button></li>
                <li><button onclick="menu_choice('other')">Other coding projects</button></li>
            </nav>
        </header>

        <script>

            function menu_choice (choice) {
                // get the sections
                let x = document.getElementsByClassName("all");
                let y = document.getElementById("start");
                let z = document.getElementById("project_section");
                //check if we want part of the portfolio or the start page
                if(choice != "start") {
                    // we don't want the start page, make sure the right section is showing
                    if  (!y.classList.contains("hidden_section")) {
                        z.classList.add("showing_section_flex");
                        z.classList.remove("hidden_section");
                        y.classList.remove("showing_section");
                        y.classList.add("hidden_section");
                    }
                    // show the correct projects
                    for(let i = 0; i < x.length; i++) {
                        if (x[i].classList.contains(choice)) {
                            if (x[i].classList.contains("hide_project")) {
                                x[i].classList.add("show_project");
                                x[i].classList.remove("hide_project");
                            }
                        } else {
                            if (x[i].classList.contains("show_project")) {
                                x[i].classList.add("hide_project");
                                x[i].classList.remove("show_project"); 
                            }
                        }
                    }

                } else {
                    if  (z.classList.contains("showing_section_flex")) {
                        y.classList.add("showing_section");
                        y.classList.remove("hidden_section");
                        z.classList.remove("showing_section_flex");
                        z.classList.add("hidden_section");
                    }
                }

                //move the menue out of the way
                document.getElementById("menu-control").checked = false;
            }
        </script>
        <main>


<?php

// home

?>
            <section id="start" class="start showing_section">
                <div>
                    <img src="me.png">
                    <h1>
                        Welcome to my portfolio!
                    </h1>
                </div>
                <p>
                    You can find different subtypes of projects under the various menu alternatives as well as links to their git repositories if they have any.
                </p>
            </section>
        

<?php

// Projects

?>
            <section id="project_section" class="project_section hidden_section">

<?php

// list the projects

// use an array for now and then maybe a cms or database

$proj1 = array("id"=>"prj1", "img"=>"proj1.png", "title"=>"Project 1", "description"=>"desc proj1", "git"=>"gitlink", "class"=>"all live hide_project");
$proj2 = array("id"=>"prj2", "img"=>"proj2.png", "title"=>"Project 2", "description"=>"desc proj2", "git"=>"gitlink", "class"=>"all FE hide_project");
$proj3 = array("id"=>"prj3", "img"=>"proj3.png", "title"=>"Project 3", "description"=>"desc proj3", "git"=>"gitlink", "class"=>"all JS hide_project");
$proj4 = array("id"=>"prj4", "img"=>"proj4.png", "title"=>"Project 4", "description"=>"desc proj4", "git"=>"gitlink", "class"=>"all other hide_project");

$all_projects = array($proj1, $proj2, $proj3, $proj4);

for($i=0; $i<count($all_projects); $i++) {
    print "<div id='" . $all_projects[$i]["id"] . "' class='" . $all_projects[$i]["class"] ."'>";
    print "<header> <img src='" . $all_projects[$i]["img"] . "' > </header>";
    print "<main> <h1>" . $all_projects[$i]["title"] . "</h1> <div>Description: "  . $all_projects[$i]["description"] . "</div><div><a href=''"  . $all_projects[$i]["git"] . ">Git link</a></div></main></div>";
}

// end projects section

?>

            </section>

<?php

// footer

?>

        </main>
        <footer>
            <div>
                <div>
                    &#169; Marica Aldman
                </div>
            </div>
        
        
<?php

// close html

?>

        </footer>
    </body>
</html>