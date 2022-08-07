<?php
include('../../initialise.php');

?>

<nav class="navbar">
    <img src="<?php echo WWW_ROOT.'/logo-cropped.svg';?>" class="logo" alt="gabo logo">
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="#" class="nav-link">CSS</a>
        </li>
        <li class="nav-item active"><a href="#" class="nav-link " >Home</a></li>
        <li class="nav-item"><a href="<?php echo WWW_ROOT.'/pages/java/index.php';?>" class="nav-link">Courses</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">private</a></li>
    </ul>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</nav>

 