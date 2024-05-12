<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            position: fixed;
            left: 0;
            width: 200px;
            height: 100%;
            background-color: #343a40;
            padding-top: 20px;
        } 

        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .section {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
</head>
<body>
  <div>
    <div>
      <?php include "./components/header.php";?>
    </div>
  </div>
  <div class="container">
      <div class="sidebar">
          <a href="#" class="menu-item" data-section="users">Users</a>
          <a href="#" class="menu-item" data-section="heroes">Heroes</a>
      </div>

      <div class="content">
          <div id="users" class="section">
              <!-- Сюди додайте вміст для секції з юзерами -->
              <?php  include './user_crud/view_users.php'; ?>
          </div>

          <div id="heroes" class="section">
              <!-- Сюди додайте вміст для секції з героями -->
              <?php  include './heroes_crud/view_heroes.php'; ?>

          </div>
      </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(function(item) {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    const sectionId = this.getAttribute('data-section');
                    document.querySelectorAll('.section').forEach(function(section) {
                        if (section.id === sectionId) {
                            section.classList.add('active');
                        } else {
                            section.classList.remove('active');
                        }
                    });
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
