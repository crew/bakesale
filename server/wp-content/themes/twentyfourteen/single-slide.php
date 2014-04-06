<?php

if (isset($_GET['pi'])) { include_once('pie-html.php'); } //show page for PIEs
else { include_once('user-html.php'); } //show page for users
