<?php
    $page_title = 'Contacts';
    include('templates/header.php');
?>
<div id="contacts">
    <h1>Contact Us.Locate Us.Send Us Your Thoughts!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et vero, velit itaque hic tempore porro quisquam deserunt, minima veritatis alias perferendis qui nulla magnam recusandae ullam! Officiis necessitatibus laudantium repellat.</p>
</div>
<div id="map-canvas"></div>
<form action="" method="post">
    <div class="reg">
        <input type="text" name="first_name" placeholder="FIRST NAME">
    </div>
    <div class="reg">
        <input type="text" name="last_name" placeholder="LAST NAME">
    </div>
    <div class="reg">
        <input type="text" name="email" placeholder="EMAIL ADDRES">
    </div>
    <div class="message">
        <textarea name="message" cols="60" rows="10" placeholder="MESSAGE"></textarea>
    </div>
    <div class="submite">
        <img src="img/link icon.png" alt="">
        <input type="submit" name="submit" value="Submite">
    </div>
</form>

<?php include('templates/footer.php') ?>