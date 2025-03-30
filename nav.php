<?php
include('../config/config.php');

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) {
    header('Location: ' . SITE . '/error/');
}
?>

<?php /* ref: https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/Reference/Roles/navigation_role */ ?>



<a class="sr-only skip-nav" href="#main">Skip navigation</a>



<a href="<?php echo( SITE ); ?>" aria-label="homepage" class="logo-href">
erica dreisbach
</a>


<nav class="nav-header" aria-label="main">
    <ul class="nav-ul">

        <li class="nav-li">
            
            <a class="nav-a" href="#">
                Projects
            </a>

            <ul class="subnav">

                <li class="subnav-li">
                    <a class="nav-a" href="#">
                       Robertshaw
                    </a>
                </li>

                <li class="subnav-li">
                    <a class="nav-a" href="#">
                        Worsham College
                    </a>
                </li>

                <li class="subnav-li">
                    <a class="nav-a" href="#">
                       ODEA
                    </a>
                </li>

                <li class="subnav-li">
                    <a class="nav-a" href="#">
                       Howl2GO
                    </a>
                </li>

                <li class="subnav-li">
                    <a class="nav-a" href="#">
                       Ada Cheng
                    </a>
                </li>

                <li class="subnav-li">
                    <a class="nav-a" href="#">
                        Healthy Schools Campaign
                    </a>
                </li>

                <li class="subnav-li">
                    <a class="nav-a" href="#">
                        Nuance Solutions
                    </a>
                </li>

            </ul>

        </li>

        <li class="nav-li">
            <a class="nav-a" href="#">
                Tech Stack
            </a>
        </li>

        <li class="nav-li">
            <a class="nav-a" href="#">
                Resume
            </a>
        </li>

        <li class="nav-li">
            <a class="nav-a" href="#">
                About
            </a>
        </li>

        <li class="nav-li">
            <a class="nav-a" href="#">
                Contact
            </a>
        </li>
                
    </ul>
</nav>