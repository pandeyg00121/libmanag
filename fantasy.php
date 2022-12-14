<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav3=$_POST['fav3'];

     }
    if (!empty($fav3)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav3='$fav3' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: fantasy.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fantasy</title>
  <style>
    body {
      background-image: url("./img2.jpg");
      background-color: rgb(220, 202, 177);
      padding: 0px;
      margin: 0;
      font-family: 'Times New Roman', Times, serif;
    }

    table {
      position: absolute;
      left: 50%;
      top: 646px;
      transform: translate(-50%, -50%);
      border-collapse: collapse;
      width: 800px;
      border: 1px solid #bdc3c7;
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
      background-color: rgba(67, 52, 37, 0.9);

    }

    a {
      text-decoration: none;
      color: #fff;
    }

    tr {
      transition: all .2s ease-in;
      cursor: pointer;

    }

    th {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #fff;
      color: rgb(220, 202, 177);
    }

    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #fff;
      color: #fff;
    }

    #header {
      background-color: rgb(54, 44, 44);
      color: #fff;
      font-size: 25px;
    }

    .home {
      position: relative;
      top: -64px;
      left: 20px;
      display: inline;
      background-color: rgb(220, 202, 177);
      font-size: 23px;
      padding: 7px;
      border-radius: 13px;

    }

    .ahome {
      color: rgb(54, 44, 44);
    }

    .home:hover {
      background-color: rgb(135, 101, 87);
      cursor: pointer;
    }

    .ahome:hover {
      color: aliceblue;
    }

    .cu {
      position: absolute;
      top: 9px;
      right: 20px;
      display: inline;
      background-color: rgb(220, 202, 177);
      font-size: 23px;
      padding: 7px;
      border-radius: 13px;

    }

    .acu {
      color: rgb(54, 44, 44);
    }

    .cu:hover {
      background-color: rgb(135, 101, 87);
      cursor: pointer;
    }

    .acu:hover {
      color: aliceblue;
    }

    h1 {
      font-weight: 600;
      text-align: center;
      background-color: rgb(54, 44, 44);
      color: rgb(220, 202, 177);
      padding: 10px 0px;
      margin-top: 0;
      font-size: 35px;
    }

    tr:hover {
      background-color: rgba(38, 30, 30, 0.604);
      transform: scale(1.02);
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    td a:hover {
      text-decoration: underline;
    }
    td a{
      text-decoration-line: underline;
       text-decoration-thickness: 1.2px; 
    }
    .enter {
      display: block;
      margin: auto;
      width: 663px;
    }

    #favbook {
      padding: 11px;
      background-color: rgb(79, 60, 53);
      border-radius: 13px;
      font-size: 20px;
      color: rgb(220, 202, 177);
      border: 1px solid white;
    }

    #fav {
      padding: 7px;
      border-radius: 13px;
      background-color: rgb(220, 202, 177);
      border: 2px solid black;
      width: 220px;

    }

    @media only screen and (max-width: 768px) {
      table {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <h1>Fantasy Genre</h1>
  <div class="home"><a class="ahome" href="./index.php">Home</a></div>
  <div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
  <div class="enter">
    <form method="post">
      <label id="favbook">Your all time favourite book from this genre is :</label>
      <input type="text" id="fav" name="fav3">
    </form>
  </div>
  <table class="content-table">
    <tr id="header">
      <th>Title of Book</th>
      <th>Author</th>
      <th>Link to buy</th>

    </tr>
  <tr>
      <td>The Alchemist</td>
      <td>Paulo Coelho</td>
      <td><a
          href="https://www.amazon.in/Alchemist-Paulo-Coelho-ebook/dp/B00U6SFUSS/ref=sr_1_10?qid=1653284499&refinements=p_n_feature_three_browse-bin%3A9141482031%2Cp_36%3A1741388031&rnid=1402038031&s=books&sr=1-10" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>The Lord of The Rings</td>
      <td>J.R.R Tolkien</td>
      <td> <a href="https://www.amazon.in/Lord-Rings-J-R-Tolkien/dp/0618645616" target="_blank">Link To Amazon</a></td>
    </tr>
    <tr>
      <td>A Game of Thrones</td>
      <td>George R.R. Martin</td>
      <td> <a href="https://www.amazon.in/Game-Thrones-Song-Ice-Fire/dp/0007428545" target="_blank">Link To Amazon</a></td>
    </tr>
    <tr>
    <td>The Hobbit</td>
    <td>J.R.R Tolkien</td>
    <td> <a href="https://www.amazon.in/Hobbit-J-R-R-Tolkien/dp/0007511086" target="_blank">Link To Amazon</a></td>
    </tr>


    <tr>
      <td>The Fearless Boy</td>
      <td>Luis Fernandes</td>
      <td><a
          href="https://www.amazon.in/Fearless-Boy-LUIS-FERNANDES-ebook/dp/B071F51KP8/ref=sr_1_11?qid=1653284499&refinements=p_n_feature_three_browse-bin%3A9141482031%2Cp_36%3A1741388031&rnid=1402038031&s=books&sr=1-11" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>The Magician of Magda</td>
      <td>Ashwini Sanghi</td>
      <td> <a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0455968TF0A5F61RWYA&url=%2FMagicians-Mazda-Ashwin-Sanghi%2Fdp%2F9354899080%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653284744%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1&qualifier=1653284744&id=8546568357774813&widgetName=sp_atf_browse" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Harry Potter and the Philosopher Stone</td>
      <td>J.K. Rowling</td>
      <td> <a
          href="https://www.amazon.in/Harry-Potter-Philosophers-Stone-Rowling-ebook/dp/B019PIOJYU/ref=sr_1_3?qid=1653284744&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-3" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Sahasramalla</td>
      <td>Luis Fernanades</td>
      <td> <a
          href="https://www.amazon.in/SAHASRAMALLA-LUIS-FERNANDES-ebook/dp/B0711MZTSD/ref=sr_1_13?qid=1653284499&refinements=p_n_feature_three_browse-bin%3A9141482031%2Cp_36%3A1741388031&rnid=1402038031&s=books&sr=1-13" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Drunk in Jealousy</td>
      <td>Dhrisini </td>
      <td> <a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_mtf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0274922100SDCN8KNMZ5&url=%2FDrunk-Jealousy-Dhrisni%2Fdp%2F1636401643%2Fref%3Dsr_1_12_sspa%3Fqid%3D1653285040%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-12-spons%26psc%3D1&qualifier=1653285040&id=2767540064720579&widgetName=sp_mtf_browse"  target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Harry Potter and The Goblet Of Fire</td>
      <td>J.K. Rowling</td>
      <td> <a
          href="https://www.amazon.in/Harry-Potter-Goblet-Fire-Rowling-ebook/dp/B019PIOJWW/ref=sr_1_14?qid=1653285040&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-14" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Red World : The Genesis</td>
      <td>Upasna Mazumdar</td>
      <td> <a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A09877791OGPLGXGPFBGX&url=%2FRed-World-Genesis-Upasana-Majumdar%2Fdp%2F1636403484%2Fref%3Dsr_1_21_sspa%3Fqid%3D1653285040%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-21-spons%26psc%3D1&qualifier=1653285040&id=2767540064720579&widgetName=sp_btf_browse" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Deathless</td>
      <td>Evan S Sullivan</td>
      <td> <a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A011761232NG2A9VRN8WD&url=%2FDeathless-Evan-S-Sullivan%2Fdp%2F0228842085%2Fref%3Dsr_1_22_sspa%3Fqid%3D1653285040%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-22-spons%26psc%3D1&qualifier=1653285040&id=2767540064720579&widgetName=sp_btf_browse" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Sandman </td>
      <td>Neil Gaiman,Reil Ahmed</td>
      <td> <a
          href="https://www.amazon.in/The-Sandman/dp/B086WPWWC2/ref=sr_1_20?qid=1653285292&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-20" target="_blank">Link To Amazon</a></td>
    </tr>
    <tr>
      <td>Six Of Crow</td>
      <td>Leigh Bardugo</td>
      <td> <a
          href="https://www.amazon.in/Six-Crows-Collectors-Leigh-Bardugo/dp/1510106286/ref=sr_1_24?qid=1653285292&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-24" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Iron and Rust</td>
      <td>Harry Sidebottom</td>
      <td> <a
          href="https://www.amazon.in/Iron-Rust-sampler-Throne-Caesars-ebook/dp/B00JTN14JU/ref=sr_1_30?qid=1653285292&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-30" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Hakka And Bukka</td>
      <td>Subba Rao</td>
      <td> <a
          href="https://www.amazon.in/Hakka-bukka-SUBBA-RAO-ebook/dp/B06XY172N2/ref=sr_1_34?qid=1653285292&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-34" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Dune: 1</td>
      <td>Frenk Herbert</td>
      <td> <a
          href="https://www.amazon.in/Dune-Frank-Herbert/dp/0441172717/ref=sr_1_35?qid=1653285292&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1402038031&s=books&sr=1-35" target="_blank">Link
          To Amazon</a></td>
    </tr>
    <tr>
      <td>Sammar</td>
      <td>Eldon Crowe</td>
      <td> <a
          href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_btf_browse_stripbooks_sr_pg2_1?ie=UTF8&adId=A10204623SBEPMKW03XH5&url=%2FSammar-Eldon-Crowe%2Fdp%2F0228813735%2Fref%3Dsr_1_38_sspa%3Fqid%3D1653285292%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1402038031%26s%3Dbooks%26sr%3D1-38-spons%26psc%3D1&qualifier=1653285292&id=8233505095250635&widgetName=sp_btf_browse" target="_blank">Link
          To Amazon</a></td>
    </tr>

  </table>
</body>

</html>