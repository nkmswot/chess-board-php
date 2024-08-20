<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chess Board Design using PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
    .table{
    width: 500px;
    padding: 1px;
    border:1px solid darkgreen;
    }
    body{
    margin: 20 20 auto;
    }
    #box{
    height:50px;
    width:12.5%;
    border:1px solid green;
    padding:3px;
    display:inline-block;
    margin-right: -10px;
    }
    .black{
    background:green;

    }
    .white{
    background:white;
    }
    #line{
    width:500px;
    text-align: center;
    margin-bottom: -10px;
    }
    #board{
    width:500px;
    height:100%;
    }
    .chess-piece{
    font-size: 48px;
    }
    </style>
  </head>
  <body>
    <h1>Chess Board Design using PHP</h1>
    <h2> Classical way with Table</h2>
    <p><a href="https://8subjects.com/php-chess-board">Download Source Code Here</a></p>
    <!-- chess board starts -->
    <table class="table">
      <?php
      $row=$total=$col=0;

      for($row=1;$row<=8;$row++)
        {
      echo "<tr>";
        for($col=1;$col<=8;$col++)
            {
        $total=$row+$col;

        if($total%2==0) {
        echo "<td height='50px' width='50px' bgcolor='#FFFFFF'></td>";
        }
        else{
        echo "<td height='50px' width='50px' bgcolor='green'></td>";
        }
        }
      echo "</tr>";
      }
      ?>
    </table>
    <br /><br />
    <h2> Modern Way with Div</h2>
    <p><a href="http://8subjects.com/php-chess-board">Download Source Code Here</a></p>
    <!-- chess board using div starts -->
    <div id="board">
      <?php
      $row=$total=$col=0;

      for($row=1;$row<=8;$row++)
      {
      echo "<div id='line'>";
        for($col=1;$col<=8;$col++)
        {
        $total=$row+$col;
        if($total%2==0)
        {
        echo "<div id='box' class='white'></div>";
        }
        else
        {
        echo "<div id='box' class='black'></div>";
        }
        }
      echo "</div> ";
      }
      ?>
    </div>
    <!-- chess board using div ends -->
    <br /><br />
    <h2>Chess Board with Chess Pieces Design using PHP &amp; <a href="https://en.wikipedia.org/wiki/Chess_symbols_in_Unicode" target="_blank">Unicode</a></h2>
    <p><a href="http://8subjects.com/php-chess-board">Download Source Code Here</a></p>
    <!-- chess board with pieces starts -->
    <table class="table">
      <?php
      $row=$total=$col=0;

      for($row=1;$row<=8;$row++)
      {
      echo "<tr>";
        if($row==8){
        echo "
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9814;</div></td>
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9816;</div></td>
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9815;</div></td>
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9813;</div></td>
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9812;</div></td>
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9815;</div></td>
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9816;</div></td>
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9814;</div></td>
        ";
        }
        elseif($row==1){
        echo "
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9820;</div></td>
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9822;</div></td>
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9821;</div></td>
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9813;</div></td>
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9818;</div></td>
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9821;</div></td>
        <td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9822;</div></td>
        <td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9820;</div></td>
        ";
        }
        else{
        for($col=1;$col<=8;$col++)
        {
        $total=$row+$col;
        if($row==7){
        if($total%2==0)
        {
        echo "<td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9817;</div></td>";
        }
        else
        {
        echo "<td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9817;</div></td>";
        }
        }
        elseif($row==2){
        if($total%2==0)
        {
        echo "<td height='50px' width='50px' bgcolor='#FFFFFF'><div class='chess-piece'>&#9823;</div></td>";
        }
        else
        {
        echo "<td height='50px' width='50px' bgcolor='green'><div class='chess-piece'>&#9823;</div></td>";
        }
        }
        else{
        if($total%2==0)
        {
        echo "<td height='50px' width='50px' bgcolor='#FFFFFF'></td>";
        }
        else
        {
        echo "<td height='50px' width='50px' bgcolor='green'></td>";
        }
        }
        }
        }
      echo "</tr>";
      }
      ?>
    </table>
    <!-- chess board with pieces end -->
  </body>
</html>