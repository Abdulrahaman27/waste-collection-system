<button class="menu-toggle">☰</button>
<nav class="sidebar">
    <ul class="nav-item active">
        <li><a href="dashboard.php" class=""><span>Dashboard</span></a></li>
        <li><a href="request.php" class=""><span>Collection Requests</span></a></li>
        <li><a href="schdedule.php" class=""><span>Collection Schedule</span></a></li>
        <li><a href="reports.php" class=""><span>Reports</span></a></li>
        <?php if($_SESSION['role'] == 'admin'): ?>
        <li class="nav-item"><a href="users.php"><span>User Management</span></a></li>
        <li class="nav-item"><a href="vehicles.php"><span>Vehicle Management</span></a></li>
        <?php  endif;?>
    </ul>
</nav>