<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link  rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" >
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>
<body>
<?php
$city;
$software;
$department;
$name;
$cities= [
//	city 1
    'Sialkot'=> [
        //software house 1
        'SoftwareHouse'=> [
            'Karigar' => [
                'Info' => ['location' =>'Sialkot', 'Address' => 'Kashmir Road', 'Contact' => 289542],
                'Department' =>[
                    'IT' => [
                        'empInfo' => ['Name' => 'Web Development', 'No' => 1001, 'Location'=> 'First floor' ],
                        'Employee' => [
                            'Ajmal' => ['Subject' => 'IT', 'Education'=> 'Graduation', 'age'=>20],
                            'Ahmad' => ['Subject' => 'SE', 'Education'=> 'Master', 'age'=>21],
                        ],
                    ],
                    'HR' => [
                        'empInfo' => ['Name' => 'Managment', 'No' => 1002, 'Location'=> 'Ground floor'],
                        'Employee' => [
                            'Saad' => ['Subject' => 'BBA', 'Education'=> 'Master', 'age'=>22],
                            'Danish' => ['Subject' => 'English', 'Education'=> 'Mphil', 'age'=>23],
                        ],
                    ],
                ],
            ],

            //software house 2
            'ThetaSolutions' =>[
                'Info' => ['location' =>'Sialkot', 'Address' => 'ShabaPuraR', 'Contact' => 51812],
                'Department' =>[
                    'SEO' => [
                        'empInfo' => ['Name' => 'Web Development', 'No' => 003, 'Location'=> 'Ground floor'],
                        'Employee' => [
                            'Zaryab' => ['Subject' => 'CS', 'Education'=> 'Master', 'age'=>24],
                            'Asfand' => ['Subject' => 'English', 'Education'=> 'Intermediate', 'age'=>24],
                        ],
                    ],
                    'Digital Marketing' => [
                        'empInfo' => ['Name' => 'Managment', 'No' => 004, 'Location'=> 'Ground floor'],
                        'Employee' => [
                            'Fahad' => ['Subject' => 'Bcon', 'Education'=> 'Graduataion', 'age'=>21],
                            'Farhan' => ['Subject' => 'Math', 'Education'=> 'Master', 'age'=>25],
                        ],
                    ],
                ],
            ],
        ],
    ],
//	city 2
    'Lahore'=> [
        //software house 1
        'SoftwareHouse'=> [
            'SoftSolution' =>[
                'Info' => ['location' =>'Lahore', 'Address' => 'ModelTow', 'Contact' => 28956],
                'Department' =>[
                    'Marketing' => [
                        'empInfo' => ['Name' => 'Web Development', 'No' => 005, 'Location'=> 'Ground floor'],
                        'Employee' => [
                            'Sani' => ['Subject' => 'cs', 'Education'=> 'Master', 'age'=>28],
                            'Faizan' => ['Subject' => 'English', 'Education'=> 'Graduation', 'age'=>27],
                        ],
                    ],
                    'Designing' => [
                        'empInfo' => ['Name' => 'Managment', 'No' => 006, 'Location'=> 'Ground floor'],
                        'Employee' => [
                            'Usman' => ['Subject' => 'Icom', 'Education'=> 'phd', 'age'=>26],
                            'Azeem' => ['Subject' => 'Urdu', 'Education'=> 'Master', 'age'=>25],
                        ],
                    ],
                ],
            ],
            //software house 2
            'WebSolutions' =>[
                'Info' => ['location' =>'Lahore', 'Address' => 'MughalPura', 'Contact' => 8465],
                'Department' =>[
                    'Sales' => [
                        'empInfo' => ['Name' => 'Web Development', 'No' => 007, 'Location'=> 'Ground floor'],
                        'Employee' => [
                            'Nadeem' => ['Subject' => 'IT', 'Education'=> 'Graduation', 'age'=>24],
                            'Amjad' => ['Subject' => 'SE', 'Education'=> 'Master', 'age'=>23],
                        ],
                    ],
                    'IOS' => [
                        'empInfo' => ['Name' => 'Managment', 'No' => 8, 'Location' => 'First Floor'],
                        'Employee' => [
                            'Akmal' => ['Subject' => 'English', 'Education'=> 'Master', 'age'=>22],
                            'Azhar' => ['Subject' => 'Economics', 'Education'=> 'Intermediate', 'age'=>21],
                        ],

                    ],
                ],
            ],
        ],
        //end software house
    ],
];


//
//echo '<pre>';
//print_r($cities) ;
//echo '</pre>';

?>
<div class="row" >
    <div class="col-3 pt-5">
        <div class="ml-5">
            <div class=" pt-1">
                <form method="post">
                    <select class="mdb-select browser-default custom-select ml-2 "  name="city[]" multiple >
                        <option  disabled selected>Search by City</option>
                        <?php
                        global $city;
                        foreach($cities as $key => $value){

                            ?>
                            <option  value="<?php echo $key;?>" <?php echo (isset($_POST['city']) && $_POST['city'] == $key) ? 'selected="selected"' : ''; ?> > <?php echo $key; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <select class="browser-default mdb-select custom-select ml-2  mt-2" multiple name="software[]">
                        <option  disabled selected>Search by Software House</option>
                        <?php
                        global $software;
                        foreach($cities as $k => $v){
                            foreach($v as $k2 => $v2){
                                foreach($v2 as $k3 => $v3){
                                    ?>
                                    <option   value="<?php echo $k3;?>"  <?php echo (isset($_POST['software']) && $_POST['software'] == $k3) ? 'selected="selected"' : ''; ?> > <?php echo $k3; ?></option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select >
                    <select class="browser-default mdb-select custom-select ml-2 mt-2 " multiple name="department[]">
                        <option  disabled selected>Search by Department</option>
                        <?php
                        global $department;
                        foreach($cities as $k => $v){
                            foreach($v as $k2 => $v2){
                                foreach($v2 as $k3 => $v3){
                                    foreach($v3 as $k4 => $v4){
                                        if($k4 == 'Department'){
                                            foreach($v4 as $k5 => $v5){
                                                ?>
                                                <option   value="<?php echo $k5;?>" <?php echo (isset($_POST['department']) && $_POST['department'] == $k5) ? 'selected="selected"' : ''; ?>  > <?php echo $k5; ?></option>
                                                <?php
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        ?>
                    </select>
                    <select class="browser-default mdb-select custom-select  ml-2 mt-2" multiple  name="name[]">
                        <option disabled selected>Search by Employee Name</option>
                        <?php
                        global $name;
                        foreach($cities as $k => $v){
                            foreach($v as $k2 => $v2){
                                foreach($v2 as $k3 => $v3){
                                    foreach($v3 as $k4 => $v4){
                                        if($k4 == 'Department'){
                                            foreach($v4 as $k5 => $v5){
                                                foreach($v5 as $k6 => $v6){
                                                    if($k6 == 'Employee'){
                                                        foreach($v6 as $k7 => $v7){
                                                            ?>
                                                            <option   value="<?php echo $k7;?>" <?php echo (isset($_POST['name']) && $_POST['name'] == $k7) ? 'selected="selected"' : ''; ?>   > <?php echo $k7; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        ?>
                    </select>
                    <button type="submit" name="submit" class="btn btn-success mt-1 ml-2" >Filter</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-9 pt-5 ">
        <?php
        if(isset( $_POST['submit'] )){
            global	$city;
            global $software;
            global $department;
            global $name;

            if(isset($_POST['name'])){
                $name = $_POST['name'];

                foreach($name as $key => $value){
                    getName($value);
                }



            }
            elseif(isset($_POST['department'])){
                $department = $_POST['department'];

                foreach($department as $key => $value){
                    getDepartment($value);
                }


            }
            elseif(isset($_POST['software'])){
                $software = $_POST['software'];

                foreach($software as $key => $value){
                    getSoftware($value);
                }


            }elseif(isset($_POST['city'])){
                $name = $_POST['city'];
                $city = $_POST['city'];

                foreach( $city as $key => $value ){
                    getCity( $value );
                }

            }else{
                echo 'Full Detail';

                foreach($cities as $k => $v){
                    foreach($v as $k2 => $v2){
                        foreach($v2 as $k3 => $v3){
                            foreach($v3 as $k4 => $v4 ){
                                if($k4 == 'Info'){
                                    ?>
                                    <table  class="myTable table table-striped table-bordered">
                                        <thead>
                                        <th class="text-success" >Software House </th>
                                        <th class="text-success" >Location </th>
                                        <th class="text-success" >Address </th>
                                        <th class="text-success" >Contact </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-danger"><?php echo $k3;?></td>
                                            <td class="text-danger"><?php echo $v4['location'];?></td>
                                            <td class="text-danger"><?php echo $v4['Address'];?></td>
                                            <td class="text-danger"><?php echo $v4['Contact'];?></td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                if($k4 == 'Department'){
                                    foreach($v4 as $k5 => $v5){
                                        foreach($v5 as $k6 => $v6){
                                            if($k6 == 'empInfo'){

                                                ?>
                                                <table  class="myTable table table-striped table-bordered position-relative">
                                                    <thead class="text-primary">
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Number</th>
                                                    <th>Location</th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td> <?php echo $k5; ?></td>
                                                        <td> <?php echo $v6['Name']; ?></td>
                                                        <td> <?php echo $v6['No']; ?></td>
                                                        <td> <?php echo $v6['Location']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            <?php }
                                            if($k6 ==  'Employee'){
                                                foreach($v6 as $k7 => $v7){
                                                    ?>

                                                    <table  class="myTable table table-striped table-bordered position-relative depTop">
                                                        <thead>
                                                        <th>Employee Name</th>
                                                        <th>Subject</th>
                                                        <th>Education</th>
                                                        <th>Age</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td> <?php echo $k7 ?></td>
                                                            <td> <?php echo $v7['Subject'] ?></td>
                                                            <td> <?php echo $v7['Education'] ?></td>
                                                            <td> <?php echo $v7['age'] ?></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <?php


                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

                ?>
                <?php

            }
        }

        function getName($name){
            global $cities;
            foreach($cities as $k => $v){
                foreach($v as $k2 => $v2){
                    foreach($v2 as $k3 => $v3){
                        foreach($v3 as $k4 => $v4){
                            if($k4 == 'Department'){
                                foreach($v4 as $k5 => $v5){
                                    foreach($v5 as $k6 => $v6){
                                        if($k6 == 'Employee'){
                                            foreach($v6 as $k7 => $v7){
                                                if( $name == $k7 ){
                                                    print_r($k);
                                                    ?>
                                                    <table class="myTable table table-striped table-bordered">
                                                        <thead>
                                                        <th class="text-success" >Software House </th>
                                                        <th class="text-success" >Location </th>
                                                        <th class="text-success" >Address </th>
                                                        <th class="text-success" >Contact </th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-danger"><?php echo $k3;?></td>
                                                            <td class="text-danger"><?php echo $v3['Info']['location'];?></td>
                                                            <td class="text-danger"><?php echo $v3['Info']['Address'];?></td>
                                                            <td class="text-danger"><?php echo $v3['Info']['Contact'];?></td>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="myTable table table-striped table-bordered position-relative">
                                                        <thead class="text-primary">
                                                        <th>Department</th>
                                                        <th>Name</th>
                                                        <th>Number</th>
                                                        <th>Location</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td> <?php echo $k5; ?></td>
                                                            <td> <?php echo $v5['empInfo']['Name'] ?></td>
                                                            <td> <?php echo $v5['empInfo']['No']; ?></td>
                                                            <td> <?php echo $v5['empInfo']['Location']; ?></td>

                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="myTable table table-striped table-bordered position-relative depTop">
                                                        <thead>
                                                        <th>Employee Name</th>
                                                        <th>Subject</th>
                                                        <th>Education</th>
                                                        <th>Age</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td> <?php echo $k7 ?></td>
                                                            <td> <?php echo $v7['Subject'] ?></td>
                                                            <td> <?php echo $v7['Education'] ?></td>
                                                            <td> <?php echo $v7['age'] ?></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <?php
                                                }

                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        function getDepartment($department){
            global $cities;
            foreach($cities as $k => $v){
                foreach($v as $k2 => $v2){
                    foreach($v2 as $k3 => $v3){
                        foreach($v3 as $k4 => $v4){
                            if($k4 == 'Department'){
                                foreach($v4 as $k5 => $v5){
                                    if($department == $k5){
                                        foreach($v5 as $k6 => $v6){
                                            if($k6 == 'empInfo'){
                                                print_r($k);


                                                ?>
                                                <table class="myTable table table-striped table-bordered">
                                                    <thead>
                                                    <th class="text-success" >Software House </th>
                                                    <th class="text-success" >Location </th>
                                                    <th class="text-success" >Address </th>
                                                    <th class="text-success" >Contact </th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-danger"><?php echo $k3;?></td>
                                                        <td class="text-danger"><?php echo $v3['Info']['location'];?></td>
                                                        <td class="text-danger"><?php echo $v3['Info']['Address'];?></td>
                                                        <td class="text-danger"><?php echo $v3['Info']['Contact'];?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <table class="myTable table table-striped table-bordered position-relative">
                                                    <thead class="text-primary">
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Number</th>
                                                    <th>Location</th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td> <?php echo $k5; ?></td>
                                                        <td> <?php echo $v6['Name']; ?></td>
                                                        <td> <?php echo $v6['No']; ?></td>
                                                        <td> <?php echo $v6['Location']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <?php
                                            }
                                            if($k6 == 'Employee'){
                                                foreach($v6 as $k7 => $v7){
                                                    ?>
                                                    <table class="myTable table table-striped table-bordered position-relative depTop">
                                                        <thead>
                                                        <th>Employee Name</th>
                                                        <th>Subject</th>
                                                        <th>Education</th>
                                                        <th>Age</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td> <?php echo $k7 ?></td>
                                                            <td> <?php echo $v7['Subject'] ?></td>
                                                            <td> <?php echo $v7['Education'] ?></td>
                                                            <td> <?php echo $v7['age'] ?></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <?php

                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        function getSoftware($software){
            global $cities;
            foreach($cities as $k => $v){
                foreach($v as $k2 => $v2){
                    foreach($v2 as $k3 => $v3){
                        if($software == $k3){
                            foreach($v3 as $k4 => $v4 ){
                                if($k4 == 'Info'){
                                    print_r($k);
                                    ?>
                                    <table class="myTable table table-striped table-bordered">
                                        <thead>
                                        <th class="text-success" >Software House </th>
                                        <th class="text-success" >Location </th>
                                        <th class="text-success" >Address </th>
                                        <th class="text-success" >Contact </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-danger"><?php echo $k3;?></td>
                                            <td class="text-danger"><?php echo $v4['location'];?></td>
                                            <td class="text-danger"><?php echo $v4['Address'];?></td>
                                            <td class="text-danger"><?php echo $v4['Contact'];?></td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                if($k4 == 'Department'){
                                    foreach($v4 as $k5 => $v5){
                                        foreach($v5 as $k6 => $v6){
                                            if($k6 == 'empInfo'){

                                                ?>
                                                <table class="myTable table table-striped table-bordered position-relative">
                                                    <thead class="text-primary">
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Number</th>
                                                    <th>Location</th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td> <?php echo $k5; ?></td>
                                                        <td> <?php echo $v6['Name']; ?></td>
                                                        <td> <?php echo $v6['No']; ?></td>
                                                        <td> <?php echo $v6['Location']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            <?php }
                                            if($k6 ==  'Employee'){
                                                foreach($v6 as $k7 => $v7){
                                                    ?>

                                                    <table class="myTable table table-striped table-bordered position-relative depTop">
                                                        <thead>
                                                        <th>Employee Name</th>
                                                        <th>Subject</th>
                                                        <th>Education</th>
                                                        <th>Age</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td> <?php echo $k7 ?></td>
                                                            <td> <?php echo $v7['Subject'] ?></td>
                                                            <td> <?php echo $v7['Education'] ?></td>
                                                            <td> <?php echo $v7['age'] ?></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <?php
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
//	return($name);
        }

        function getCity($city){
            global $cities;
            foreach($cities as $k => $v){
                if( $city == $k){
                    foreach($v as $k2 => $v2){
                        foreach($v2 as $k3 => $v3){
                            foreach($v3 as $k4 => $v4 ){
                                if($k4 == 'Info'){

                                    ?>
                                    <table  class="myTable table table-striped table-bordered">
                                        <thead>
                                        <th class="text-success" >Software House </th>
                                        <th class="text-success" >Location </th>
                                        <th class="text-success" >Address </th>
                                        <th class="text-success" >Contact </th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-danger"><?php echo $k3;?></td>
                                            <td class="text-danger"><?php echo $v4['location'];?></td>
                                            <td class="text-danger"><?php echo $v4['Address'];?></td>
                                            <td class="text-danger"><?php echo $v4['Contact'];?></td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php
                                }
                                if($k4 == 'Department'){
                                    foreach($v4 as $k5 => $v5){
                                        foreach($v5 as $k6 => $v6){
                                            if($k6 == 'empInfo'){

                                                ?>
                                                <table  class="myTable table table-striped table-bordered position-relative">
                                                    <thead class="text-primary">
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Number</th>
                                                    <th>Location</th>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td> <?php echo $k5; ?></td>
                                                        <td> <?php echo $v6['Name']; ?></td>
                                                        <td> <?php echo $v6['No']; ?></td>
                                                        <td> <?php echo $v6['Location']; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            <?php }
                                            if($k6 ==  'Employee'){
                                                foreach($v6 as $k7 => $v7){
                                                    ?>

                                                    <table  class="myTable table table-striped table-bordered position-relative depTop">
                                                        <thead>
                                                        <th>Employee Name</th>
                                                        <th>Subject</th>
                                                        <th>Education</th>
                                                        <th>Age</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td> <?php echo $k7 ?></td>
                                                            <td> <?php echo $v7['Subject'] ?></td>
                                                            <td> <?php echo $v7['Education'] ?></td>
                                                            <td> <?php echo $v7['age'] ?></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>


                                                    <?php

                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        ?>
    </div>

    <script>
        $(document).ready( function () {
            $('.myTable').DataTable();
        } );
    </script>

</body>
</html>








