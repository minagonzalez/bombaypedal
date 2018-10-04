<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 55px;">
    <a class="navbar-brand" href="register.php">Home</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <?php if(guest()): ?>

            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>

            <?php else: ?>

            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>

            <?php endif; ?>
            
            <?php if(isset($_SESSION['email'])):
                    if(checkRole($_SESSION['email']) == true): ?>
                <li class="nav-item"><a class="nav-link" href="backend.php">Administrar</a></li>
            <?php endif; ?>
            <?php endif; ?>
            
        </ul>
    </div>
</nav>
