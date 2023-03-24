<?php

@include 'config.php';

session_start();


$select = " SELECT * FROM user ";

$result = mysqli_query($conn, $select);
 $row = mysqli_fetch_array($result);
 $user_id = $row['userid'];
 if(!isset($user_id)){
    header('location:index.php');
 };
if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA STRUCTURE V.</title>
    <link rel="stylesheet" href="style.css">

</head>
     
<body>
    
<div class="container">

<div class="main__heading">
<div class="hero">

<nav >
  <img src="" class="logo">
        <ul>
          <li><a href="user_page.php"><h3 style="color:#fff"> <span class="typing" style="font-weight: 500; color:#fff"></span></h3></a></li>
          
        </ul>
        <img src="images/new/default-avatar.png" class="user-pic" onclick="toggleMenu()">
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
              <div class="user-info">
              <img src="images/new/default-avatar.png" >
                  <h5><?php echo $row['name'] ?></h5>
              </div>
              <hr>

              <a href="update_profile.php" class="sub-menu-link">
                  <img src="" >
                  <p>Edit Profile</p>
                  <span></span>
              </a>
              <a href="index.php" class="sub-menu-link">
                  <img src="" >
                  <p>login</p>
                  <span></span>
              </a>
              <a href="register_form.php" class="sub-menu-link">
                  <img src="" >
                  <p>register</p>
                  <span></span>
              </a>
              <a href="logout.php" class="sub-menu-link">
                  <img src="" >
                  <p>logout</p>
                  <span></span>
              </a>
          </div>
        </div>
      </nav>
</div>
<div class="card">
            <h2>01</h2>
            <h4> Array</h4>
            <div class="content">
				<img src="images/new/arr.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3> Array</h3>
               
                <p>1)Array (Insert , Delete),
					2)Linear Search,<br>
					3)Prefix Sum,<br>
					4)Sliding Windows

                </p>
                <a href="templates/array.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>02</h2>
            <h4>Number Theory</h4>
            <div class="content">
				<img src="images/new/nt1.jpeg" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Number Theory</h3>
                <p>1)GCD,
					2)Extended Eucledian,
					3)Binary Convert
</p>
                <a href="templates/number_theory.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>03</h2>
            <h4>Stack</h4>
            <div class="content">
				<img src="images/new/st.png" style="width: 160px;height: 160px;visibility:visible; ">
               
                <h3> Stack</h3>
               
				<p>1)Stack,
				   2)Balanced Bracket,
				   3)Infix To Postfix/Prefix/evaluation,
			
                </p>
                <a href="templates/stack.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>04</h2>
            <h4>Matrix</h4>
            <div class="content">
				<img src="images/new/mat.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Matrix</h3>
               
                <p>1)Transpose,<br>
					2)Sparse Matrix,<br>
					3)Sorted Matrix Search 

                </p>
                <a href="templates/matrix.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>05</h2>
            <h4>Queue</h4>
            <div class="content">
				<img src="images/new/q.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Queue</h3>
               
                <p>1)Queue,<br>
					2)BFS Traversal 
 </p>
                <a href="templates/queue.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>06</h2>
             <h4>Heap</h4>
            <div class="content">
				<img src="images/new/h.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Heap</h3>
               
                <p>1)Heap,<br>
					2)Heapify,<br>
					3)Heap Sort
 </p>
                <a href="templates/heap.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>07</h2>
            <h4>Linked List</h4>
            <div class="content">
				<img src="images/new/l.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Linked List</h3>
              <p>1)Singly Linked List,
					2)Doubly Linked List,
					3)Circular Singly/Doubly LinkedList,<br>
					
 </p>
                <a href="templates/linkedlist.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>08</h2>
            <h4>Recursion</h4>
            <div class="content">
				<img src="images/new/r.jpeg" style="width: 160px;height: 160px;visibility:visible; ">
               
                <h3>Recursion</h3>
               
				<p>1)Factorial 

                </p>
                <a href="templates/recursion.html" >DEMO</a>
            </div>
        </div>
		<div class="card">
            <h2>09</h2>
            <h4>Binar Search Tree</h4>
            <div class="content">
				<img src="images/new/bbb.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Binar Search Tree</h3>
               
                <p>1)BST,
					2)BST Traversal,
					3)BST Deletion 
</p>
                <a href="templates/tree.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>10</h2>
            <h4>Binary Search 
                Algorithm</h4>
            <div class="content">
				<img src="images/new/bs.jpeg" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Binary Search Algorithm</h3>
               
                <p>1)Binary Search 

                </p>
                <a href="templates/search.html" >DEMO</a>
            </div>
        </div>
`
		<div class="card">
            <h2>11</h2>
            <h4>Sort Algorithms</h4>
            <div class="content">
				<img src="images/new/a12.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Sort Algorithms</h3>
               
                <p>1)Bubble/Selection/
                    Insertion/Merge/
                    Quick,
				
					

                </p>
                <a href="templates/sort.html" >DEMO</a>
            </div>
        </div>

		<div class="card">
            <h2>12</h2>
            <h4>Greedy</h4>
            <div class="content">
				<img src="images/new/gggggggggg.jpeg" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Greedy</h3>
               
                <p>1)Kruskals ,<br>
					2)Huffman Coding 

                </p>
                <a href="templates/greedy.html" >DEMO</a>
            </div>
        </div>
		<div class="card">
            <h2>13</h2>
            <h4>Dynamic Programming</h4>
            <div class="content">
				<img src="images/new/dd.png" style="width: 160px;height: 160px;visibility:visible; ">
               
                <h3>Dynamic Programming</h3>
               
				<p>1)Travelling salesman

                </p>
                <a href="templates/dynamic.html" >DEMO</a>
            </div>
        </div>
		<div class="card">
            <h2>14</h2>
            <h4>Hashing Table</h4>
            <div class="content">
				<img src="images/new/hh.png" style="width: 160px;height: 160px;visibility:visible; ">
                
                <h3>Hashing Table</h3>
               
                <p>1)Open Hashing,<br>
					2)Closed Hashing

                </p>
                <a href="templates/hashing_table.html" >DEMO</a>
            </div>
			
        </div>
<footer style="background: rgb(19, 22, 41);font-size: 20px; color: rgb(255, 255, 255);width:2000px;margin-top: 40px;height: 30px;">
   All Rights Reserved By @ARS
</footer>
		
    </div>

	
</div>

    <script type="text/javascript" src="vanilla-tilt.js"> 

    </script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card")
        ,{
            max:25,
            speed:400,
            glare:true,
            "max-glare":1,
        });

    </script>
	
    <script src="typed.min.js"></script>
  <script type="text/javascript">
    var typed = new Typed('.typing',{
      strings: ["DATA  STRUCTURE  VISUALIZATION","LEARN  DATA  STRUCTURE  EASY  WAY! "],
      loop: true,
      typeSpeed: 80,
      backSpeed: 100,
    });
  </script>
  <script>
    let subMenu=document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");

    }
  </script>
</body>

</html>


