<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav2=$_POST['fav2'];

     }
    if (!empty($fav2)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav2='$fav2' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: mystery.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystery</title>
    <style>
  body {
      background-image: url("./img2.jpg");
      background-color: rgb(220,202,177);
        padding: 0px;
        margin: 0;
        font-family:'Times New Roman', Times, serif;
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
    a{
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
        color: rgb(220,202,177);
    } 
    
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #fff;
        color: #fff;
    } 
    
     #header {
        background-color: rgb(54,44,44);
        color: #fff;
        font-size: 25px;
    }
    .home{
          position: relative;
          top: -64px;
          left: 20px;
          display: inline;
          background-color: rgb(220,202,177);
          font-size: 23px;
          padding: 7px;
          border-radius: 13px;

    }
    .ahome{
        color: rgb(54,44,44);
    }
    .home:hover{
        background-color: rgb(135, 101, 87);
        cursor: pointer;
    }
    .ahome:hover{
        color: aliceblue;
    }
    .cu{
          position: absolute;
          top: 9px;
          right: 20px;
          display: inline;
          background-color: rgb(220,202,177);
          font-size: 23px;
          padding: 7px;
          border-radius: 13px;

    }
    .acu{
        color: rgb(54,44,44);
    }
    .cu:hover{
        background-color: rgb(135, 101, 87);
        cursor: pointer;
    }
    .acu:hover{
        color: aliceblue;
    }
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: rgb(54,44,44);
        color: rgb(220,202,177);
        padding: 10px 0px;
        margin-top: 0;
        font-size: 35px;
    }
    
    tr:hover {
        background-color: rgba(38, 30, 30, 0.604);
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    td a:hover{
        text-decoration: underline;
    }
    td a{
      text-decoration-line: underline;
       text-decoration-thickness: 1.2px; 
    }
    .enter{
      display: block;
      margin: auto;
      width: 663px;
    }
  #favbook{
    padding: 11px;
    background-color: rgb(79, 60, 53);
    border-radius: 13px;
    font-size: 20px;
    color: rgb(220, 202, 177);
    border: 1px solid white;
  }
  #fav{
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
 <h1>Detective and Mystery</h1>
 <div class="home"><a class="ahome" href="./index.php">Home</a></div>
<div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
<div class="enter">
  <form method="post">
    <label id="favbook">Your all time favourite book from this genre is :</label>
    <input type="text" id="fav" name="fav2">
  </form>
</div>
    <table class="content-table">
          <tr id="header">
            <th>Title of Book</th>
            <th>Author</th>
            <th>Link to buy</th>
           
          </tr>
          <tr>
            <td>Gone Girl</td>
            <td>Gillian Flynn</td>
            <td> <a href="https://www.amazon.in/Gone-Girl-Novel-Gillian-Flynn/dp/0307588378" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Girl on The Train</td>
            <td>Paula Hawkins</td>
            <td> <a href="https://www.amazon.in/Girl-Train-Novel-Paula-Hawkins/dp/1594633665" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Murder on the Orient Express</td>
            <td>Agatha Christie</td>
            <td> <a href="https://www.amazon.in/Murder-Orient-Express-Poirot-Christie/dp/0007527500" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>And Then There Were None</td>
            <td>Agatha Christie</td>
            <td> <a href="https://www.amazon.in/Then-There-Were-None/dp/0008123209/ref=pd_lpo_1?pd_rd_i=0008123209&psc=1" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Sherlock Holmes</td>
            <td>Sir Arthur Conan Doyle</td>
            <td> <a href="https://www.amazon.in/Complete-Novels-Sherlock-Holmes/dp/8175994312/ref=sr_1_1_sspa?keywords=sherlock+holmes&qid=1653308753&s=books&sprefix=sherlock+%2Cstripbooks%2C420&sr=1-1-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExSkdGWEVDTDkwOUhJJmVuY3J5cHRlZElkPUEwMDkzOTYyMU8zQTlTWlNJS081MCZlbmNyeXB0ZWRBZElkPUEwNTg5NzczMTdaUlU1NzFVMEQxWiZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Da Vinci Code</td>
            <td>Robert Langdon</td>
            <td> <a href="https://www.amazon.com/Vinci-Code-Robert-Langdon/dp/0307474275" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Two Indian Girls</td>
            <td>Kumar Kinshuk</td>
            <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A08761121QP1M861TDWVX&url=%2FTwo-Indian-Girls-Mystery-Killings%2Fdp%2FB09KNCYRH7%2Fref%3Dsr_1_1_sspa%3Fqid%3D1653287244%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1318161031%26s%3Dbooks%26sr%3D1-1-spons%26psc%3D1&qualifier=1653287244&id=8938434243590491&widgetName=sp_atf_browse" target="_blank">Link To Amazon</a></td>
         </tr>
         
          <tr>
            <td>We Begin at the End</td>
            <td>Chris Whitetaker</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A07647022GYQ6AR9XZPT3&url=%2FDaybreak-Murder-Mystery-Killings-Trilogy%2Fdp%2FB09KNGDF9Y%2Fref%3Dsr_1_2_sspa%3Fqid%3D1653287244%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1318161031%26s%3Dbooks%26sr%3D1-2-spons%26psc%3D1&qualifier=1653287244&id=8938434243590491&widgetName=sp_atf_browse" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Silent Patient</td>
            <td>Alex Michaelides</td>
            <td> <a href="https://www.amazon.in/Silent-Patient-Alex-Michaelides/dp/1409181634/ref=sr_1_4?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-4" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>One Small Mistake</td>
            <td>Dandy Smith</td>
            <td> <a href="https://www.amazon.in/One-Small-Mistake-addictive-thriller-ebook/dp/B09BCJW3QL/ref=sr_1_5?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-5" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>That Night: Four friends.Twenty Years.One Haunting Secret</td>
            <td>Nidhi Upadhaya</td>
            <td> <a href="https://www.amazon.in/That-Night-Friends-Haunting-Secret/dp/0143451871/ref=sr_1_6?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-6" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Last Seen</td>
            <td>Robin Mahle</td>
            <td> <a href="https://www.amazon.in/Last-Seen-Remy-Fontaine-Thrillers-ebook/dp/B08T6JDQGX/ref=sr_1_8?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-8" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Viktor</td>
            <td>Apryl Baker</td>
            <td> <a href="https://www.amazon.in/Viktor-Kincaid-Security-Investigations-Book-ebook/dp/B07C3BCYYC/ref=sr_1_9?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-9" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Ritualistic Murder</td>
            <td>Kumar Kinshuk</td>
            <td> <a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_mtf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A0764770JYUHZBCU45NG&url=%2FRitualistic-Murder-Mystery-Inspector-Killings%2Fdp%2FB09KN2MV6T%2Fref%3Dsr_1_11_sspa%3Fqid%3D1653287244%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1318161031%26s%3Dbooks%26sr%3D1-11-spons%26psc%3D1&qualifier=1653287244&id=8938434243590491&widgetName=sp_mtf_browse" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Spooky Business</td>
            <td>Addison Creek</td>
            <td> <a href="https://www.amazon.in/Spooky-Business-Jane-Garbo-Mysteries-ebook/dp/B077C9V3VB/ref=sr_1_13?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-13" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Turning Angel
            </td>
            <td>Greg Iles</td>
            <td> <a href="https://www.amazon.in/Turning-Angel-Prologue-Chapter-inclusive-ebook/dp/B00KQ417VG/ref=sr_1_14?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-14" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>An Eye for an Eye</td>
            <td>Carol Wyer</td>
            <td> <a href="https://www.amazon.in/Eye-Detective-Kate-Young-Book-ebook/dp/B087Q1DKMR/ref=sr_1_15?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-15" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Caught You</td>
            <td>Molly Black</td>
            <td> <a href="https://www.amazon.in/Caught-Rylie-Wolf-Suspense-Thriller-Book-ebook/dp/B09JZWPJF8/ref=sr_1_16?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-16" target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Perfect Daughter</td>
            <td>Alex Stone</td>
            <td> <a href="https://www.amazon.in/Caught-Rylie-Wolf-Suspense-Thriller-Book-ebook/dp/B09JZWPJF8/ref=sr_1_16?qid=1653287244&refinements=p_n_feature_three_browse-bin%3A9141482031&rnid=1318161031&s=books&sr=1-16" target="_blank">Link To Amazon</a></td>
             </tr>
         
             <tr>
              <td>Daybreak</td>
              <td>Kumar Kinshuk</td>
              <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_browse_stripbooks_sr_pg1_1?ie=UTF8&adId=A07647022GYQ6AR9XZPT3&url=%2FDaybreak-Murder-Mystery-Killings-Trilogy%2Fdp%2FB09KNGDF9Y%2Fref%3Dsr_1_2_sspa%3Fqid%3D1653287244%26refinements%3Dp_n_feature_three_browse-bin%253A9141482031%26rnid%3D1318161031%26s%3Dbooks%26sr%3D1-2-spons%26psc%3D1&qualifier=1653287244&id=8938434243590491&widgetName=sp_atf_browse" target="_blank">Link To Amazon</a></td>
             </tr>
      </table>
</body>
</html>