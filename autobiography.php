<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav8=$_POST['fav8'];

     }
    if (!empty($fav8)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav8='$fav8' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: autobiography.php");
        die;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biography</title>
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
        top:589px;
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
 <h1>Autobiographies and Biographies</h1>
 <div class="home"><a class="ahome" href="./index.php">Home</a></div>
<div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
<div class="enter">
  <form method="post">
    <label id="favbook">Your all time favourite book from this genre is :</label>
    <input type="text" id="fav" name="fav8">
  </form>
</div>
    <table class="content-table">
          <tr id="header">
            <th>Title of Book</th>
            <th>Author</th>
            <th>Link to buy</th>
           
          </tr>
         <tr>
            <td>The Diary of a Young Girl</td>
            <td>Anne Frank</td>
            <td><a href="https://www.amazon.in/gp/slredirect/picassoRedirect.html/ref=pa_sp_atf_aps_sr_pg1_1?ie=UTF8&adId=A05302901DHZ3O2FJHZAG&url=%2FDiary-Young-Girl-Anne-Frank%2Fdp%2F8172345194%2Fref%3Dsr_1_1_sspa%3Fkeywords%3Dbiography%2Bbooks%26pd_rd_r%3D35435146-b274-4932-86c6-36a146027e3a%26pd_rd_w%3DcncF5%26pd_rd_wg%3DMmsfZ%26pf_rd_p%3D206c771a-9255-43c3-91ee-be3d883c7b95%26pf_rd_r%3D1KGW39YN58MT803E8WVB%26qid%3D1653316987%26sr%3D8-1-spons%26psc%3D1&qualifier=1653316987&id=7477406590367693&widgetName=sp_atf" target="_blank ">Link To Amazon</a></td>
         </tr>
          <tr>
            <td>The Story of My Life</td>
            <td>Hellen Keller</td>
            <td><a href="https://www.amazon.in/Helen-Keller/e/B00KO0EJEY/ref=dp_byline_cont_book_1 "  target="_blank">Link To Amazon</a></td>
           </tr>
          <tr>
            <td>The Story of my Experiment with Truths</td>
            <td>Mahatma Gandhi</td>
            <td> <a href="https://www.amazon.in/Mahatma-Gandhi-Autobiography-Story-Experiments/dp/8172343116/ref=sr_1_3?keywords=biography+books&pd_rd_r=35435146-b274-4932-86c6-36a146027e3a&pd_rd_w=cncF5&pd_rd_wg=MmsfZ&pf_rd_p=206c771a-9255-43c3-91ee-be3d883c7b95&pf_rd_r=1KGW39YN58MT803E8WVB&qid=1653316987&sr=8-3 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Wings Of Fire</td>
            <td>Dr. A.P.J. Abdul Kalam</td>
            <td> <a href="https://www.amazon.in/Wings-fire-P-Abdul-Kalam/dp/B0847V9BYD/ref=sr_1_2?keywords=wings+of+fire&qid=1653318474&s=books&sprefix=wings%2Cstripbooks%2C236&sr=1-2 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Swami Vivekananda: A Biography</td>
            <td>Swami Vivekananda</td>
            <td> <a href="https://www.amazon.in/Swami-Vivekananda-Biography/dp/9384401102/ref=sr_1_6?keywords=biography+books&pd_rd_r=35435146-b274-4932-86c6-36a146027e3a&pd_rd_w=cncF5&pd_rd_wg=MmsfZ&pf_rd_p=206c771a-9255-43c3-91ee-be3d883c7b95&pf_rd_r=1KGW39YN58MT803E8WVB&qid=1653316987&sr=8-6 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>A Complete Biography of Ratan Tata</td>
            <td>A.K. Gandhi</td>
            <td> <a href="https://www.amazon.in/Complete-Biography-Ratan-Tata/dp/B0922PJZNS/ref=sr_1_8?keywords=biography+books&pd_rd_r=35435146-b274-4932-86c6-36a146027e3a&pd_rd_w=cncF5&pd_rd_wg=MmsfZ&pf_rd_p=206c771a-9255-43c3-91ee-be3d883c7b95&pf_rd_r=1KGW39YN58MT803E8WVB&qid=1653316987&sr=8-8 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>My Inventions</td>
            <td>Nikola Tesla</td>
            <td> <a href="https://www.amazon.in/My-Inventions-Autobiography-Nikola-Tesla/dp/9354401473/ref=sr_1_3?crid=1P0VYW6I0DAG6&keywords=my+inventions+nikola+tesla&qid=1653318611&s=books&sprefix=my+in%2Cstripbooks%2C256&sr=1-3 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Autobiography of an Unknown Indian</td>
            <td>Niraj C.Chaudhari</td>
            <td> <a href="https://www.amazon.in/Autobiography-Indian-Nirad-C-Chaudhuri/dp/8172242875/ref=sr_1_4?crid=7LMU71WKBOM0&keywords=biography+and+autobiography+books&qid=1653317729&sprefix=biography+and+autobiography+books+%2Caps%2C266&sr=8-4 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Steve Jobs: The Exclusive Biography</td>
            <td>Walter Isaacson</td>
            <td> <a href="https://www.amazon.com/Steve-Jobs-Walter-Isaacson/dp/1451648537 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Autobiography Of a Yogi</td>
            <td>Paramahansa Yogananda</td>
            <td> <a href="https://www.amazon.in/Paramahansa-Yogananda/e/B00KC1KO80?ref=sr_ntt_srch_lnk_6&qid=1653317729&sr=8-6 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Unfinished: A Memoir</td>
            <td>Priyanka Chopra Jonas</td>
            <td> <a href="https://www.amazon.in/Unfinished-Memoir-Priyanka-Chopra-Jonas/dp/0670094978/ref=sr_1_13?crid=7LMU71WKBOM0&keywords=biography+and+autobiography+books&qid=1653317729&sprefix=biography+and+autobiography+books+%2Caps%2C266&sr=8-13 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Autobiography of a Benjamin Franklin</td>
            <td>Benjamin Franklin</td>
            <td> <a href="https://www.amazon.in/Autobiography-Benjamin-Franklin/dp/8175993286/ref=sr_1_15?crid=7LMU71WKBOM0&keywords=biography+and+autobiography+books&qid=1653317729&sprefix=biography+and+autobiography+books+%2Caps%2C266&sr=8-15 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Dreams From My Father: A Story of Race and Inheritance</td>
            <td>Barack Obama</td>
            <td> <a href="https://www.amazon.in/Dreams-My-Father-Barack-Obama-ebook/dp/B002RI9SB0/ref=sr_1_14?crid=2W7JYSEZPLGI6&keywords=autobiographies&qid=1653318883&sprefix=autobiographie%2Caps%2C238&sr=8-14 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Three Thousand Stitches: Ordinary People, Extraordinary Lives</td>
            <td>Sudha Murty</td>
            <td> <a href="https://www.amazon.in/Three-Thousand-Stitches-Ordinary-Extraordinary/dp/0143440055/ref=sr_1_18?crid=2W7JYSEZPLGI6&keywords=autobiographies&qid=1653318883&sprefix=autobiographie%2Caps%2C238&sr=8-18 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Sri Ramakrishna: The Face of Silence</td>
            <td>Swami Nikhilananda</td>
            <td> <a href="https://www.amazon.in/Sri-Ramakrishna-Silence-Swami-Nikhilananda/dp/9381506671/ref=sr_1_6?crid=38QMY38T2OZI&keywords=ramkrishna+paramhans+b&qid=1653319075&sprefix=ramkrishna+paramhans+b%2Caps%2C334&sr=8-6 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Becoming</td>
            <td>Michelle Obama</td>
            <td> <a href="https://www.amazon.in/Becoming-Michelle-Obama/dp/0241334144 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Autobiography of Mark Twain</td>
            <td>Mark Twain</td>
            <td> <a href="https://www.amazon.in/Autobiography-Mark-Twain/dp/1608429946 "  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
      </table>
</body>
</html>