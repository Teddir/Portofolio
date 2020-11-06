<!-- <div class="title">
    <h1>HY Gentelmen Welcome in </h1>
    <h4>LATIHAN BLOG</h4>
    </div> -->
<?php
if ($_SESSION['user']['status'] == 'Logged In') {
    header('Location: ' . BASEURL . '/Blog');
} else
?>
<div class="container">
    <span class="text1">welcome to my website </span>
</div>
<div class="button">
    <a href="https://www.youtube.com/watch?v=j3fUXu9Vqjg" target="_blank" class="btn">WATCH VIDEO</a>
</div