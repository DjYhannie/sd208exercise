<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function countWords($str){
            $list = array();
            $counter = 0;
            $words = explode(" ", strtolower($str));
           foreach($words as $ref){
               foreach($words as $word){
                   if($ref == $word){
                        $counter++;
                   }
               }
               $list[$ref] = $counter;
               $counter = 0;
           }
           print_r($list);
        }

        countWords("A sentence is a set of words that is complete in itself, typically containing a subject and predicate, conveying a statement, question, exclamation, or command, and consisting of a main clause and sometimes one or more subordinate clauses.");

    ?>
</body>
</html>