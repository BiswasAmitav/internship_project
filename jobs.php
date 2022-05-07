<?php include 'header.php' ?>

<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">Year Passout</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="Select name,apply,yearform candidate";
            $result=mysqli_query($conn,$aql);
            $i=0;
            if($result->num_rows>0){
                while($rows->$result->fetch_assoc()){
                    echo'
                    <tr>
                    <th scope="row">'.++$i.'</th>
                    <td>'.$rows['name'].'</td>
                    <td>'.$rows['apply'].'</td>
                    <td>'.$rows['year'].'</td>
                </tr>
                    
                    ';
                }
            }
            else{
                echo" ";
            }

            ?>
            <!-- <tr>
                <th scope="row">2</th>
                <td>Google</td>
                <td>Digital Marketing</td>
                <td>12 LPA</td>
            </tr> -->
            <!-- <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->


        </tbody>
    </table>
</div>