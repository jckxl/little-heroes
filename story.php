<?php include("header.php"); ?>
<body>
    <?php
        session_start();
        include("config.php");
    ?>
<!-- WELCOME COLUMN-->
    <div class="container">
        <div class="row">    
            <div class="story-bg col-12 pt-5">
                <h3 class= "display-5" style="text-align: center;">Our story</h3>
                <h1 class= "display-3" style="text-align: center; color:orange;">__________</h1>
                    <p class= "desc">
                        <?php // welcome
                        $sql = "SELECT * FROM lh_kappale WHERE ID='6';";
                        $result = $conn->query($sql);  
            
                        if ($result->num_rows > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['kappale'];
                            }
                        }
                        ?>
                    </p>
            </div>
        </div>
    </div>
</body>
    <?php include("footer.php"); ?>