<!-- <head>    <link rel="stylesheet" href="../../public/css/menu.css?v=<?php echo time(); ?>">
    <script src="../../public/javascript/menu.js?v=<?php echo time(); ?>"></script>
</head>
<style>
.admin-sidebar {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  width: 250px;
  background-color: #fff;
  padding: 20px;
}

.admin-sidebar ul {
  list-style: none;
  padding: 0;
}

.admin-sidebar li {
  margin-bottom: 10px;
}

.admin-sidebar a {
  display: block;
  padding: 10px 0;
  text-decoration: none;
  color: #000;
}

.admin-sidebar a:hover {
  background-color: #eee;
  color: #333;
}

</style> -->
<!-- <style>
    .sidebar {
  background-color: #f5f5f5;
  padding: 20px;
}

.sidebar a {
  color: #333;
  text-decoration: none;
}

.sidebar a:hover {
  color: #000;
  text-decoration: underline;
}

.sidebar i {
  margin-right: 10px;
}

</style> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<nav class="sidebar">
  <ul>
    <li><a href="admin.php?page=dashboard"><i class="fa fa-tachometer"></i> Dashboard</a></li>
    <li><a href="admin.php?page=clients"><i class="fa fa-paw"></i> Clients</a></li>
    <li><a href="admin.php?page=pets"><i class="fa fa-heartbeat"></i> Pets</a></li>
    <li><a href="admin.php?page=Appointments"><i class="fa fa-calendar"></i> Appointments</a></li>
    <li><a href="admin.php?page=Inventory"><i class="fa fa-medkit"></i> Inventory</a></li>
    <li><a href="admin.php?page=Financials"><i class="fa fa-money"></i> Financials</a></li>
    <li><a href="admin.php?page=Settings"><i class="fa fa-cogs"></i> Settings</a></li>
    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
  </ul>
</nav>


