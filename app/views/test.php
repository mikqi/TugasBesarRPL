<?php

$menu = Menu::has('Pegawai')->with('pegawai')->get();

echo $menu;