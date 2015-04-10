<body>
  <div id="wrap">
    <div class="navbar">
      <!-- This is the Menu Bar.  It dynamically changes with CSS using a PHP array 
      and a foreach loop. -->
      <ul>
        <li><a class='logo' href='index.php'>MG Analytics</a></li>
      </ul>
      <ul>
        <?php
          $menu = array(
            array('menuOptions', 'contact.php', 'About'),
            array('menuOptions', 'about.php', 'Contact')
            );
          // if(isset($_SESSION['login_user'])){
          //   array_push($menu, array('menuOptions', 'archive.php', 'Archives'));
          // }
          foreach($menu as $links) {
            $search = "/\b$links[1]\b/";
            if ((preg_match($search, $current_url)) && !($links[1] == 'index.php')){
              print("<li><a class='$links[0]' id='current' href='$links[1]'>$links[2]</a></li>");
            }
            else{
              print("<li><a class='$links[0]' href='$links[1]'>$links[2]</a></li>");
            }
          }
        ?>
      </ul>
    </div>