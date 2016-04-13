<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>add demo</title>
  <style>
  div {
    width: 60px;
    height: 60px;
    margin: 10px;
    float: left;
  }
  p {
    clear: left;
    font-weight: bold;
    font-size: 16px;
    color: blue;
    margin: 0 10px;
    padding: 2px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
 
<p>Added this... (notice no border)</p><span>This is additional span</span>



<ul>
  <li>list item 1</li>
  <li>list item 2</li>
  <li class="third-item">list item 3</li>
  <li>list item 4</li>
  <li>list item 5</li>
</ul>



<ul class="level-1">
  <li class="item-i">I</li>
  <li class="item-ii">II
    <ul class="level-2">
      <li class="item-a">A</li>
      <li class="item-b">B
        <ul class="level-3">
          <li class="item-1">1</li>
          <li class="item-2">2</li>
          <li class="item-3">3</li>
        </ul>
      </li>
      <li class="item-c">C</li>
    </ul>
  </li>
  <li class="item-iii">III</li>
</ul>
 
<script>
$(window).load(function() {
  this.opener.postMessage({'loaded': true}, "*");
  this.close();
});
$( "div" ).css( "border", "2px solid red" )
  .add( "p" )
  .css( "background", "yellow" );

  $( "p" ).clone().add( "<span>Again</span>" ).appendTo( document.body );



  $( "li.third-item" ).nextAll().andSelf()
  .css( "background-color", "red" );



  $( "li.item-a" ).parent().css( "background-color", "red" );
</script>
 
</body>
</html>