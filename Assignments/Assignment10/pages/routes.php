<?php
$path = "index.php?page=login";

$nav="";

$adminNav = <<<HTML
<nav>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link active" href="index.php?page=addContact">Add Contact</a></li>
        <li class="nav-item"><a class="nav-link active" href="index.php?page=deleteContacts">Delete Contacts</a></li>
        <li class="nav-item"><a class="nav-link active" href="index.php?page=addAdmin">Add Admin</a></li>
        <li class="nav-item"><a class="nav-link active" href="index.php?page=deleteAdmins">Delete Admins</a></li>
        <li class="nav-item"><a class="nav-link active" href="logout.php">Logout</a></li>
    </ul>
</nav>
HTML;

$staffNav = <<<HTML
<nav>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link active" href="index.php?page=addContact">Add Contact</a></li>
        <li class="nav-item"><a class="nav-link active" href="index.php?page=deleteContacts">Delete Contacts</a></li>
        <li class="nav-item"><a class="nav-link active" href="logout.php">Logout</a></li>
    </ul>
</nav>
HTML;

if(isset($_GET)) {
    if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        staffSecurity();
        $result=init();
    }
    else if($_GET['page'] === "deleteContacts") {
        require_once('pages/deleteContacts.php');
        staffSecurity();
        $result = init();
    }
    else if($_GET['page'] === "addAdmin") {
        require_once('pages/addAdmin.php');
        staffSecurity();
        adminSecurity();
        $result = init();
    }
    else if($_GET['page'] === "deleteAdmins") {
        require_once('pages/deleteAdmins.php');
        staffSecurity();
        adminSecurity();
        $result = init();
    }
    else if($_GET['page'] === "welcome") {
        
        staffSecurity();
        require_once('pages/welcome.php');
        $result = init();
    }
    else if($_GET['page'] === "login") {
        require_once('pages/login.php');
        $result = init();
    }
    else {
        header('location: '.$path);
    }
 }

 else {
    header('location: '.$path);
 }

 function staffSecurity() {
    global $staffNav, $adminNav, $nav;
    session_start();
    
    

    if($_SESSION['access'] == "accessGranted") {
        if($_SESSION['status'] == "staff") {
            $nav = $staffNav;
        }else if($_SESSION['status'] == "admin") {
            $nav = $adminNav;
        }
    }else {
        header ('location: index.php?page=;login');
    }
 }

 function adminSecurity() {
    if($_SESSION['status'] != "admin"){
        //bootem
        header('location: index.php');
    }
    
 }
?>