<html>
<body>

<?php
//if form is not submitted
if (!isset($_POST['submit'])) {
    //display form
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name&emsp;: <input type="text" name="name" size="20"><br/>
        ID&emsp;: <input type="text" name="id" size="20"><br/>
        Address&emsp;: <input type="text" name="add" size="20"><br/>
        Major&emsp;: <input type="text" name="maj" size="20"><br/>
        Email&emsp;: <input type="text" name="ema" size="20"><br/>
        Phone&emsp;: <input type="text" name="pho" size="20"><br/>
        <input type="submit" name="submit" value="Register">
    </form>

    <?php
} else {
    //form submitted
    if ($_POST['name'] == ''||$_POST['id'] == ''||$_POST['add'] == ''||$_POST['maj'] == ''||$_POST['ema'] == ''||$_POST['pho'] == '') {
        echo "Form cannot be empty!";
    } else {
        $student = array(
            'Name' => $_POST['name'],
            'ID' => $_POST['id'],
            'Address' => $_POST['add'],
            'Major' => $_POST['maj'],
            'Email' => $_POST['ema'],
            'Phone' => $_POST['pho']
        );
        echo "a) Printing the array :</br>";
        print_r($student);
        echo "</br></br>b) Printing just the values :</br>";
        foreach ($student as $key => $name) {
            echo $name . "&emsp;";
        }
        echo "</br></br>c) Printing just the student's name, e-mail address and phone number :</br>";
        echo $student['Name'] . "&emsp;";
        echo $student['Email'] . "&emsp;";
        echo $student['Phone'];
    }
}
?>
</body>
</html>