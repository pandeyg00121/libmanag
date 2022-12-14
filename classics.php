<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $fav1=$_POST['fav1'];

     }
    if (!empty($fav1)) {
        
        $current_userid=$_SESSION['user_id'];
        $query="update data set fav1='$fav1' where user_id=$current_userid";
        mysqli_query($con, $query);
        header("Location: classics.php");
        die;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classics</title>
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
    
    td a:hover {
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
 <h1>Classics genre</h1>
 <div class="home"><a class="ahome" href="./index.php">Home</a></div>
<div class="cu"><a class="acu" href="./contactus.html">Contact Us</a></div>
<div class="enter">
  <form method="post">
    <label id="favbook">Your all time favourite book from this genre is :</label>
    <input type="text" id="fav"  name="fav1">
  </form>
</div>
    <table class="content-table">
          <tr id="header">
            <th>Title of Book</th>
            <th>Author</th>
            <th>Link to buy</th>
           
          </tr>
          <tr>
            <td>The Harvard Classic Collection</td>
            <td>Charles W. Eliet</td>
            <td><a href="https://www.amazon.in/Harvard-Classics-Fiction-Collection-Books-ebook/dp/B077SCLQJF/ref=sr_1_5?keywords=classics+book&qid=1653307838&sr=8-5"  target="_blank">Link To Amazon</a></td>
         </tr>
          <tr>
            <td>Little Women</td>
            <td>Louisa May Alcott</td>
            <td><a href="https://www.amazon.in/Little-Vintage-Classics-LouisaMay-Alcott/dp/0099572966/ref=asc_df_0099572966/?tag=googleshopdes-21&linkCode=df0&hvadid=397010494294&hvpos=&hvnetw=g&hvrand=7394413164834874523&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9303169&hvtargid=pla-457521169867&psc=1&ext_vrnc=hi"  target="_blank">Link To Amazon</a></td>
           </tr>
          <tr>
            <td>Black Beauty</td>
            <td>Anna Sewell</td>
            <td> <a href="https://www.amazon.in/Black-Beauty-Om-Illustrated-Classics/dp/9382607021/ref=sr_1_17?keywords=classics+book&qid=1653307838&sr=8-17"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Othello</td>
            <td>William Shakespeare</td>
            <td> <a href="https://www.amazon.in/Othello-Pocket-Classics-William-Shakespeare/dp/9389178495/ref=sr_1_20?keywords=classics+book&qid=1653308473&sr=8-20"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Macbeth </td>
            <td>William Shakespeare</td>
            <td> <a href="https://www.amazon.in/Macbeth-Pocket-Classics-William-Shakespeare/dp/9389178517/ref=sr_1_18?keywords=classics+book&qid=1653308473&sr=8-18"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>War and Peace</td>
            <td>Leo Tolstoy</td>
            <td> <a href="https://www.amazon.in/War-Peace-Penguin-Clothbound-Classics/dp/0241265541/ref=sr_1_19?keywords=classics+book&qid=1653308473&sr=8-19"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Dracula </td>
            <td>Bram Stoker</td>
            <td> <a href="https://www.amazon.in/Dracula-Illustrated-Classics-Om/dp/9385031538/ref=sr_1_21?keywords=classics+book&qid=1653308473&sr=8-21"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>1984</td>
            <td>George Orwell</td>
            <td> <a href="https://www.amazon.in/1984-George-Orwell/dp/9389053730/ref=sr_1_25?keywords=classics+book&qid=1653308473&sr=8-25"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Sense and Sensibility</td>
            <td>Jane Austen</td>
            <td> <a href="https://www.amazon.in/Originals-Sense-Sensibility-Jane-Austen/dp/9352766768/ref=sr_1_3?crid=QZ7ZWIOUGL6Z&keywords=sense+and+sensibility&qid=1653317171&s=books&sprefix=sense+and+sensibility%2Cstripbooks%2C215&sr=1-3"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Romeo and Juliet</td>
            <td>William Shakespeare</td>
            <td> <a href="https://www.amazon.in/Romeo-Juliet-William-Shakespeare/dp/9380816278/ref=sr_1_3?keywords=romeo+and+juliet+by+william+shakespeare+book&qid=1653317192&s=books&sprefix=romeo+and%2Cstripbooks%2C291&sr=1-3"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Great Expectations</td>
            <td>Charles Dickens</td>
            <td> <a href="https://www.amazon.in/Originals-Great-Expectations-Charles-Dickens/dp/9352763157/ref=sr_1_4?keywords=great+expectations+by+charles+dickens&qid=1653317245&s=books&sprefix=gr%2Cstripbooks%2C235&sr=1-4"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Moby Dick</td>
            <td>Herman Melville</td>
            <td> <a href="https://www.amazon.in/Moby-Dick-Herman-Melville/dp/1503280780"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>A Tale of Two Cities</td>
            <td>Charles Dickens</td>
            <td> <a href="https://www.amazon.in/Tale-Two-Cities-Charles-Dickens/dp/8172345682/ref=sr_1_3?keywords=a+tale+of+two+cities&qid=1653317145&s=books&sprefix=a+tale+of+two%2Cstripbooks%2C322&sr=1-3"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Animal Farm</td>
            <td>George Orwell</td>
            <td> <a href="https://www.amazon.in/Animal-Farm-George-Orwell/dp/812911612X/ref=sr_1_3?keywords=animal+farm+george+orwell&qid=1653317121&s=books&sprefix=animal+farm%2Cstripbooks%2C235&sr=1-3"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Catcher in the Rye</td>
            <td>J. D. Salinger</td>
            <td> <a href="https://www.amazon.in/Catcher-Rye-J-D-Salinger/dp/0316769487"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Adventures of Tom Sawyer </td>
            <td>Mark Twain</td>
            <td> <a href="https://www.amazon.in/Adventures-Tom-Sawyer-Mark-Twain/dp/8175992913/ref=sr_1_3?keywords=the+adventures+of+tom+sawyer&qid=1653317490&s=books&sprefix=the+adven%2Cstripbooks%2C262&sr=1-3"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>The Three Musketeers</td>
            <td>Alexandre Dumas</td>
            <td> <a href="https://www.amazon.in/Three-Musketeers-Alexandre-Dumas/dp/8172344694/ref=sr_1_1_sspa?keywords=the+three+musketeers&qid=1653317510&s=books&sprefix=the+three%2Cstripbooks%2C225&sr=1-1-spons&psc=1&smid=A3H3WE9M6NY1KV&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExM1ZYWTdHU1pZQkVBJmVuY3J5cHRlZElkPUEwNTg0MzQwSUNTTUs1WDVMTjJKJmVuY3J5cHRlZEFkSWQ9QTA0ODcwNzEyME1MUjVEU0NHWExRJndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ=="  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>To Kill a Mockingbird</td>
            <td>Harper Lee</td>
            <td> <a href="https://www.amazon.in/Kill-Mockingbird-Harper-Lee/dp/0099549484/ref=sr_1_2?keywords=to+kill+a+mockingbird+by+harper+lee&qid=1653317528&s=books&sprefix=to%2Cstripbooks%2C274&sr=1-2"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>A Christmas Carol</td>
            <td>Charles Dickens</td>
            <td> <a href="https://www.amazon.in/Christmas-Carol-Charles-Dickens/dp/8175993278/ref=sr_1_3?keywords=a+christmas+carol+by+charles+dickens&qid=1653317589&s=books&sprefix=a+christmas%2Cstripbooks%2C227&sr=1-3"  target="_blank">Link To Amazon</a></td>
             </tr>
          <tr>
            <td>Merchant of Venice</td>
            <td>William Shakespeare</td>
            <td> <a href="https://www.amazon.in/Merchant-Venice-William-Shakespeare/dp/9389931029/ref=sr_1_4?keywords=merchant+of+venice&qid=1653317609&s=books&sprefix=merchant%2Cstripbooks%2C222&sr=1-4"  target="_blank">Link To Amazon</a></td>
             </tr>
        
      </table>
</body>
</html>