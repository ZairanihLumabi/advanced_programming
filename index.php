<?php
    class User
    {
        //Properties
        public $name;
        public $username;
        public $email;

        //Methods
        function addFriend($name)
        {
            echo $name. " Added a friend.";
        }
        function postStatus($name)
        {
            echo $name. " Posted a status.";
        }
    }
        $example = new User();
        echo $example->addFriend('You');
        echo "<br>";
        echo $example->postStatus('You');
?>