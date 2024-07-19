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


<?php

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
                        <li class="navListElement darkBG"><button class="navButtonElement" onclick="menu_choice('start')">Start</button></li>
                        <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('all')">All projects</button></li>
                        <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('live')">Live Websites</button></li>
                        <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('FE')">Front End examples</button></li>
                        <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('JS')">JS framework examples</button></li>
                        <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('other')">Other coding projects</button></li>
                    </nav>

                    <label for="menu-control" class="sidebar__close"></label>
                </aside>
            </div>
            <nav class="d_nav">
                <li class="navListElement darkBG"><button class="navButtonElement" onclick="menu_choice('start')">Start</button></li>
                <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('all')">All projects</button></li>
                <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('live')">Live Websites</button></li>
                <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('FE')">Front End examples</button></li>
                <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('JS')">JS framework examples</button></li>
                <li class="navListElement lightBG"><button class="navButtonElement" onclick="menu_choice('other')">Other coding projects</button></li>
            </nav>
        </header>

        <script>
                function menu_choice (choice) {
                    // get the sections for the website
                    let navigationSections = document.getElementsByClassName("navListElement");
                    
                    let allProjects = document.getElementsByClassName("all");
                    let startPageSection = document.getElementById("start");
                    let projectSection = document.getElementById("project_section");

                    //alter the menu
                    for(let j=0; j < navigationSections.length; j++){
                        if(navigationSections[j].classList.contains("darkBG")) {
                            navigationSections[j].classList.remove("darkBG");
                            navigationSections[j].classList.add("lightBG");
                        }

                        if(choice == "start" && j == 0 || choice == "start" && j == 6 ) {
                            navigationSections[j].classList.add("darkBG");
                            navigationSections[j].classList.remove("lightBG");
                        } else if(choice == "all" && j == 1 || choice == "all" && j == 7 ) {
                            navigationSections[j].classList.add("darkBG");
                            navigationSections[j].classList.remove("lightBG");
                        } else if(choice == "live" && j == 2 || choice == "live" && j == 8 ) {
                            navigationSections[j].classList.add("darkBG");
                            navigationSections[j].classList.remove("lightBG");
                        } else if(choice == "FE" && j == 3 || choice == "FE" && j == 9 ) {
                            navigationSections[j].classList.add("darkBG");
                            navigationSections[j].classList.remove("lightBG");
                        } else if(choice == "JS" && j == 4 || choice == "JS" && j == 10 ) {
                            navigationSections[j].classList.add("darkBG");
                            navigationSections[j].classList.remove("lightBG");
                        } else if(choice == "other" && j == 5 || choice == "other" && j == 11 ) {
                            navigationSections[j].classList.add("darkBG");
                            navigationSections[j].classList.remove("lightBG");
                        }
                    }

                    //check if we want part of the portfolio or the start page
                    if(choice != "start") {
                        // we don't want the start page, make sure the right section is showing
                        if  (!startPageSection.classList.contains("hidden_section")) {
                            projectSection.classList.add("showing_section_flex");
                            projectSection.classList.remove("hidden_section");
                            startPageSection.classList.remove("showing_section");
                            startPageSection.classList.add("hidden_section");
                        }
                        // show the correct projects
                        for(let i = 0; i < allProjects.length; i++) {
                            var windowWidth = window.innerWidth;
                            if (allProjects[i].classList.contains(choice)) {
                                if (allProjects[i].classList.contains("hide_project")) {
                                    if(windowWidth<899) {
                                        allProjects[i].classList.add("show_project_flex");
                                    } else {
                                        allProjects[i].classList.add("show_project_block");
                                    }
                                    allProjects[i].classList.remove("hide_project");
                                }
                            } else {
                                if (allProjects[i].classList.contains("show_project_flex")) {
                                    allProjects[i].classList.add("hide_project");
                                    allProjects[i].classList.remove("show_project_flex"); 
                                } else if (allProjects[i].classList.contains("show_project_block")) {
                                    allProjects[i].classList.add("hide_project");
                                    allProjects[i].classList.remove("show_project_block"); 
                                }
                            }
                        }

                    } else {
                        if  (projectSection.classList.contains("showing_section_flex")) {
                            startPageSection.classList.add("showing_section");
                            startPageSection.classList.remove("hidden_section");
                            projectSection.classList.remove("showing_section_flex");
                            projectSection.classList.add("hidden_section");
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

$proj1 = array("id"=>"badkartan", "img"=>"badiuppsalase.png", "title"=>"Bad i Uppsala", "description"=>"Participated in this project at Initcia in Uppsala. Wordpress project with Divi as the theme.", "git"=>"", "live"=>"https://badiuppsala.se/", "class"=>"all live hide_project");
$proj2 = array("id"=>"kfp", "img"=>"knutbyfolketspark.png", "title"=>"Knutby Folkets park", "description"=>"Main developer for this project. Made in wordpress 2020 in accordance with specifications from the client.", "git"=>"", "live"=>"https://www.knutbyfolketspark.com/", "class"=>"all live hide_project");
$proj3 = array("id"=>"prj1", "img"=>"proj1.png", "title"=>"Project 1", "description"=>"desc proj1", "git"=>"", "live"=>"live link", "class"=>"all live hide_project");
$proj4 = array("id"=>"prj2", "img"=>"proj2.png", "title"=>"Project 2", "description"=>"desc proj2", "git"=>"gitlink", "live"=>"", "class"=>"all FE hide_project");
$proj5 = array("id"=>"prj3", "img"=>"proj3.png", "title"=>"Project 3", "description"=>"desc proj3", "git"=>"gitlink", "live"=>"", "class"=>"all JS hide_project");
$proj6 = array("id"=>"prj4", "img"=>"proj4.png", "title"=>"Project 4", "description"=>"desc proj4", "git"=>"gitlink", "live"=>"", "class"=>"all other hide_project");

$all_projects = array($proj1, $proj2, $proj3, $proj4, $proj5, $proj6);

for($i=0; $i<count($all_projects); $i++) {
    print "<div id='" . $all_projects[$i]["id"] . "' class='" . $all_projects[$i]["class"] ."'>";
    print "<header> <img src='img/" . $all_projects[$i]["img"] . "' > </header>";
    print "<main> <h1>" . $all_projects[$i]["title"] . "</h1> <div><div>Description:</div><div>"  . $all_projects[$i]["description"] . "</div></div>";
    if($all_projects[$i]["git"] != ""){
        print "<div><a href=''"  . $all_projects[$i]["git"] . ">Git link</a></div>";
    }
    if($all_projects[$i]["live"] != ""){
        print "<div><a href=''"  . $all_projects[$i]["live"] . ">Live site</a></div>";
    }
    print "</main></div>";
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