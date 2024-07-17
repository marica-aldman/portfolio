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
            var w = window.innerWidth;
            if (x[i].classList.contains(choice)) {
                if (x[i].classList.contains("hide_project")) {
                    if(w<899) {
                        x[i].classList.add("show_project_flex");
                    } else {
                        x[i].classList.add("show_project_block");
                    }
                    x[i].classList.remove("hide_project");
                }
            } else {
                if (x[i].classList.contains("show_project_flex")) {
                    x[i].classList.add("hide_project");
                    x[i].classList.remove("show_project_flex"); 
                } else if (x[i].classList.contains("show_project_block")) {
                    x[i].classList.add("hide_project");
                    x[i].classList.remove("show_project_block"); 
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