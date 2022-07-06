<?php 

        require_once "db_config.php";
        function fetch_all_data_usingPDO($pdo,$sql)
        {
            
            $statement = $pdo->prepare($sql);
            $statement->execute();
            $row = $statement->fetchAll();

            return $row;
        }

        function get_avg($object)
        {
            $sum = 0;
            foreach($object as $data)
            {
                $sum = $sum + (int)$data['marks'];
            }

            return $sum/sizeof($object);
        }

        function get_highest($object)
        {
            $high = -999;
            foreach($object as $data)
            {
                if((int)$data['marks']>$high){
                    $high = (int)$data['marks'];
                }
            }

            return $high;
        }

        function search_Student_byID($pdo,$ID)
        {

            $st = $pdo->prepare("select * from student where id ='".$ID."';");
            $st->execute();
            $row = $st->fetch(PDO::FETCH_ASSOC);

            return $row;
        }

        function search_Course_byID_FromExamTable($pdo,$ID)
        {
            $st = $pdo->prepare("select * from exam where course_id ='".$ID."';");
            $st->execute();
            $row = $st->fetchAll();
            return $row;
        }

     
       

?>