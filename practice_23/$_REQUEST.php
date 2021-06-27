<h1>Form Submitted.</h1>
<?php
    echo "username: ". $_REQUEST['username']; //$_REQUEST can access all data, no matter whether the method is POST or GET.
    echo "<br/>password: ". $_REQUEST['pass'];

?>