<!DOCTYPE html>

   <head>
      <meta charset="utf-8">
      <title>12.3A.04 | Simple Web Template</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   </head>

   <body>
      <div id="wrapper">
         <header>
            <div class="home_content">
               <h1>Simple Web Template</h1>
               <h3>Text Template Sederhana</h3>
            </div>
            <div class="sidebar">
               <div class="logo">
                  <i class="fab fa-html5"></i>
                  <div class="logo_name"> Web Programming II</div>
               </div>
               <nav>
                  <ul>
                     <li><a href="#"><i class="far fa-search"></i><input type="text"placeholder="Search..."></a>
                        <span class="tooltip">Pencarian</span>
                     </li>
                     <li><a href="<?php echo base_url() . 'web' ?>"><i class="far fa-home"></i>Home</a>
                        <span class="tooltip">Halaman Home</span>
                     </li>
                     <li><a href="<?php echo base_url() . 'web/about' ?>"><i class="far fa-users"></i>About</a>
                        <span class="tooltip">About</span>
                     </li>
                  </ul>
               </nav>
            <div class="profile_content">
               <div class="profile">
                  <div class="profile_detils">
                     <div class="name_mhs">
                        <div class="name">Feri Ramdhani</div>
                        <div class="mhs">Sistem Informasi</div>
                     </div>
                  </div>
                  <i class="far fa-sign-out-alt" id="logout"></i>
               </div>
            </div>
            </div>
            <div class="clear"></div>
         </header>
