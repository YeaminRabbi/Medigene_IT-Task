<?php 

    require_once "db_config.php";
    require_once "custom_function.php";


    $all_students = fetch_all_data_usingPDO($db, "select * from student");
    $SPL_marks = fetch_all_data_usingPDO($db, "select * from exam where course_id = 1001");
    $DSD_marks = fetch_all_data_usingPDO($db, "select * from exam where course_id = 1002");
    $Math_marks = fetch_all_data_usingPDO($db, "select * from exam where course_id = 1003");
    $DBMS_marks = fetch_all_data_usingPDO($db, "select * from exam where course_id = 1003");
    $Electronics_marks = fetch_all_data_usingPDO($db, "select * from exam where course_id = 1005");

    $yeamin_marks = fetch_all_data_usingPDO($db, "select * from exam where student_id = 101");
    $raisul_marks = fetch_all_data_usingPDO($db, "select * from exam where student_id = 102");
    $yousuf_marks = fetch_all_data_usingPDO($db, "select * from exam where student_id = 103");
    $israt_marks = fetch_all_data_usingPDO($db, "select * from exam where student_id = 104");
    $pranto_marks = fetch_all_data_usingPDO($db, "select * from exam where student_id = 104");


   //$data = search_Student_byID( $db, 104 );


  
    // print_r(get_highest(search_Course_byID_FromExamTable($db, 1001)));
    // print_r(search_Course_byID_FromExamTable($db, 1001));
    // die();

    // print_r(get_avg($pranto_marks)); 
    // print_r(get_highest($yeamin_marks));

    // print_r(get_name(search_byID($db,101)));



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <h3>User Average Marks</h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Avg marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Yeamin Rabbi</td>
                                <td><?= get_avg($yeamin_marks) ?></td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>Raisul</td>
                                <td><?= get_avg($raisul_marks) ?></td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>Yousuf</td>
                                <td><?= get_avg($yousuf_marks) ?></td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>Israt</td>
                                <td><?= get_avg($israt_marks) ?></td>
                            </tr>
                           
                            <tr>
                                <th scope="row">5</th>
                                <td>Pranto</td>
                                <td><?= get_avg($pranto_marks) ?></td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>

                <div class="col-md-4">
                    <h3>Course Average Marks</h3>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Avg marks</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <th scope="row">1</th>
                                <td>SPL</td>
                                <td><?= get_avg($SPL_marks) ?></td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>DSD</td>
                                <td><?= get_avg($DSD_marks) ?></td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>MATH</td>
                                <td><?= get_avg($Math_marks) ?></td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>DBMS</td>
                                <td><?= get_avg($DBMS_marks) ?></td>
                            </tr>
                           
                            <tr>
                                <th scope="row">5</th>
                                <td>Electronics</td>
                                <td><?= get_avg($Electronics_marks) ?></td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-5">
            
                <div class="col-md-4">
                        <h3>Highest in Course</h3>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Marks</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <th scope="row">1</th>
                                    <td>SPL</td>
                                    <td><?= get_highest(search_Course_byID_FromExamTable($db, 1001))  ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>DSD</td>
                                    <td><?= get_highest(search_Course_byID_FromExamTable($db, 1002)) ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">3</th>
                                    <td>MATH</td>
                                    <td><?= get_highest(search_Course_byID_FromExamTable($db, 1003))?></td>
                                </tr>

                                <tr>
                                    <th scope="row">4</th>
                                    <td>DBMS</td>
                                    <td><?= get_highest(search_Course_byID_FromExamTable($db, 1004)) ?></td>
                                </tr>
                            
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Electronics</td>
                                    <td><?= get_highest(search_Course_byID_FromExamTable($db, 1005)) ?></td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
            </div>
           


        </div>
    </section>












    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>






























