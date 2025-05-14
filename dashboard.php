<?php 
session_start();
include 'includes/auth.php';
// checkUserAuth();
include 'includes/header.php';
?>

<div class="dashboard">
    <?php include 'includes/sidebar.php'; ?>

        <main>
            <div class="header">
                <h1>Dashboard</h1>
                <div class="user-info">
                    <span>
                        Welcome, <?php echo $_SESSION['username'];?></span>
                        <a href="logout.php" class="btn-logout">Logout</a>
                    </span>
                </div>
            </div>

            <div class="stats-container">
                <div class="stats-card">
                    <h3>Pending Requests</h3>
                    <p class="stats-value">24</p>
                    <a href="request.php?status=pending" class="stat-link">View All</a>
                </div>

                <div class="stats-card">
                    <h3>Scheduled today</h3>
                    <p class="stats-value">15</p>
                    <a href="schedule.php?date=<?php echo date('Y-m-d');?>" class="stat-link">View Schedule</a>
                </div>

                <div class="stats-card">
                    <h3>Completed This week</h3>
                    <p class="stats-value">87</p>
                    <a href="reports.php" class="stat-link">View Reports</a>
                </div>
            </div>

            <div class="recent-activity">
                <h2>Recent Activity</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>2023-06-15</td>
                            <td>Collection at Downtime Area</td>
                            <td><span class="status completed">Completed</span></td>
                        <tr>
                        <tr>
                            <td>2023-06-14</td>
                            <td>New Request from customer #2451</td>
                            <td><span class="status pending">Pending</span></td>
                        <tr><tr>
                            <td>2023-06-14</td>
                            <td>Vehicle Maintainance completed</td>
                            <td><span class="status processed">Processed</span></td>
                        <tr>
                    </tbody>
                </table>
            </div>
        </main>
</div>

<?include 'includes/footer.php'?>