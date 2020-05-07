<?php
$servername = "mishoper.online";
$username = "mishopmaster";
$password = "2N8JVqNxfIx4";
$dbname = "cabinet";

function connect(){
    $conn = mysqli_connect("mishoper.online", "mishopmaster", "2N8JVqNxfIx4", "cabinet");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf-8");
    return $conn;
}

function init(){
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}


function selectOneGoods(){
    $conn = connect();
    $id = $_POST['gid'];
    $sql = "SELECT * FROM goods WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result) ;   
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function updateGoods(){
    $conn = connect();
    $id = $_POST['id'];
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $descr = $_POST['gdescr'];
    $fulldescr = $_POST['gfulldescr'];
    $ord = $_POST['gorder'];
    $img = $_POST['gimg'];

    $sql = "UPDATE goods SET name = '$name', cost = '$cost', description='$descr', fulldescr='$fulldescr', ord = '$ord', img = '$img' 
    WHERE id= '$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    writeJSON();
}
function newGoods(){
    $conn = connect();
    $id = $_POST['id'];
    $name = $_POST['gname'];
    $cost = $_POST['gcost'];
    $descr = $_POST['gdescr'];
    $fulldescr = $_POST['gfulldescr'];
    $order = $_POST['gorder'];
    $img = $_POST['gimg'];

    $sql = "INSERT INTO goods (name, cost, description, fulldescr, ord, img)
    VALUES ('$name', '$cost', '$descr',$fulldescr,'$order','$img')";
    
    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    writeJSON();
}

function writeJSON(){
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        $a = file_put_contents ('../goods.json', json_encode($out));
        echo 'write+'.$a;
    } else {
        echo "0";
    }
    mysqli_close($conn);
}
function loadGoods(){
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}
function loadFilter(){
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function loadSingleGoods(){
    $id = $_POST['id'];
    $conn = connect();
    $sql = "SELECT * FROM goods WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result); 
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initReview(){
    //вывожу список коментыв
    $conn = connect();
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function selectOneCategory()
{
    
    $category = $_POST['category'];
        $conn = connect();
        $sql = "SELECT * FROM goods WHERE  category='$category'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $out = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $out[$row["id"]] = $row;
            }
            echo json_encode($out);
        } else {
            echo "0";
        }
        mysqli_close($conn);
 
}


function loadRecomends()
{
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}