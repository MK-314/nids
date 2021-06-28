<?php include_once "init.php" ?>
<?php
MyPDO::MakeConnection();
class MySQL
{
    public static function CountFields($uname, $pass)
    {
        try {
            // $sql = "SELECT * FROM snort_table WHERE user =:user AND password=:password";
            $sql = "SELECT * FROM snort_table WHERE user='${uname}' AND password='${pass}'";
            $stmnt = MyPDO::$pdo->prepare($sql);
            // $user_data = [':user' => $uname, ':password' => $pass];
            // $stmnt->execute($user_data);
            $stmnt->execute();
            return $stmnt->rowCount();
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
    }
    public static function Showusers()
    {
        try {
            $sql = "SELECT * FROM snort_table";
            $result = MyPDO::$pdo->prepare($sql);
            $result->execute();
            if ($result->rowCount() > 0) {
                $index = 1;
                foreach ($result as $row) {
                        echo "
                            <h1>User $index: {$row['user']}</h1>
                            ";
                            $index++;
                }
            }
        } catch (PDOException $exception) {
            echo "
                Cannot find users
                ";
        }
    }
}

?>