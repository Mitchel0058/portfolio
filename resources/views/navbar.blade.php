<link rel="stylesheet" href="public/css/navbar.css">

<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#">{{ Request::route()->uri = "/" ? "Home" : Request::route()->uri }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Aside
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" target="_blank"
                           href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">HZ
                            onderwijs-en-examenregelingen</a>
                        <a class="dropdown-item" target="_blank"
                           href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">HZ
                            HBO-ICT Uitvoeringsregeling</a>
                        <a class="dropdown-item" target="_blank" href="https://learn.hz.nl/my/">HZ Learn</a>
                        <a class="dropdown-item" target="_blank"
                           href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">HZ
                            ICT teams</a>
                        <a class="dropdown-item" target="_blank" href="https://github.com/HZ-HBO-ICT">HZ Github</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
