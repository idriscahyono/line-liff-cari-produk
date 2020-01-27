<?php 
include 'scrap.php'; 
?>

<!doctype html>
<html lang="en">

<head>
  <link rel="icon" href="assets/spider.png">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/libs/css/style.css">
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

  <title>Cari Produk</title>

</head>
<body>
    <div class="card text-center">
        <div class="card-header" style="background-color: #f2c318;color:white">Cari & Bandingkan</div>
    </div>
    <div>
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0" action="" method="post">
                                <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 400px; height:43px">
                                <button class="btn btn-primary my-2 my-sm-0" name="simpan" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="card text-center">
                <div class="card-header" style="background-color: #000000;color:white">Cari & Bandingkan</div>
            </div>
        </div>
        <?php
        $total = count($List);
        $i = 0;
        for ($i = 0; $i<$total; $i++){
            $img = $List[$i]['Gambar'];
            $nama = $List[$i]['Produk'];
            $price = $List[$i]['Harga'];
            $hargaku = $List[$i]['HargaAsli'];
            $link = $List[$i]['URL'];
            $logo = $List[$i]['Logo'];
        ?>
        <div class="product-thumbnail">
            <div class="product-img-head">
                <div class="product-img">
                    <img src="<?php echo $img ?>" alt="" class="img-fluid"></div>
                </div>
                <div class="product-content">
                    <div class="product-content-head">
                        <div><img src="<?php echo $logo ?>" height="50" width="100"></div>
                        <h3 class="product-title"><?php echo $nama ?></h3>
                        <div class="product-price"><?php echo $price ?></div>
                    </div>
                    <div class="product-btn">
                        <a href="<?php echo $link ?>" target="_blank" class="btn btn-warning btn-block">Kunjungi Toko</a>
                    </div>
            </div>
        </div>
    </div>
<?php } ?> 
    <div id="liffAppContent">
            <!-- ACTION BUTTONS -->
            <div class="buttonGroup">
                <div class="buttonRow">
                    <button id="openWindowButton" class="btn btn-success btn-small">Open External Window</button>
                    <button id="closeWindowButton" class="btn btn-danger btn-small">Close LIFF App</button>
                    <button id="sendMessageButton" class="btn btn-warning btn-small">Send Message</button>
                </div>
 
            </div>
 
            <!-- LIFF DATA -->
            <div id="liffData">
                <h3 id="liffDataHeader" class="textLeft">Informasi:</h3>
                <table>
                    <tr>
                        <th>isInClient : </th>
                        <td id="isInClient" class="textLeft"></td>
                    </tr>
                    <tr>
                        <th>isLoggedIn : </th>
                        <td id="isLoggedIn" class="textLeft"></td>
                    </tr>
                </table>
            </div>
            <!-- LOGIN LOGOUT BUTTONS -->
            <div class="buttonGroup">
                <button id="liffLoginButton" class="btn btn-success btn-small">Log in</button>
                <button id="liffLogoutButton" class="btn btn-warning btn-small">Log out</button>
            </div>
            <div id="statusMessage">
                <div id="isInClientMessage"></div>
                <div id="apiReferenceMessage">
                    <p>Available LIFF methods vary depending on the browser you use to open the LIFF app.</p>
                    <p>Please refer to the <a
                            href="https://developers.line.biz/en/reference/liff/#initialize-liff-app">API reference
                            page</a> for more information.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
<script src="liff-starter.js"></script>
</html>