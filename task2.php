<!--  a. Create a MySQL database on PHPMyAdmin b. Create a table c. Create a script to add data to the table d. Create a script to retrieve data from the table e. Push your code to GitHub How to submit: Copy the link to your project and upload -->


<?php

        //  Create a script to add data to the table
        $myId = 1;
        $sql  = "INSERT INTO users (full_name, last_name, date_create) WHERE id = '$myId' VALUE (?,?,?)";
        $stmt = mysqli_stmt_init();
        // Prepare Connection with SQL
        mysqli_stmt_prepare($stmt,$sql);
        // Bind the values that will be sent to the database
        mysqli_stmt_bind_param($stmt,"ssi",);
        $execute = mysqli_stmt_execute($stmt);

        // Create a script to retrieve data from the table
        $sql = "SELECT * FROM users WHERE id = '$myId' ";
        $query = mysqli_query($connectDB, $sql);
        $row = mysqli_fetch_assoc($query);
?>