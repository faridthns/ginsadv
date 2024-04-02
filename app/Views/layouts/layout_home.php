<?php
echo view("layouts/head");
if ($menu != "Home") {
    echo view("layouts/navbar");
}
echo view("layouts/content");
echo view("layouts/footer");