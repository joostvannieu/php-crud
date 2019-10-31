<?php
declare(strict_types = 1);

class HomepageController
{
    // the HC will eventually only run when nothing is inputted.
    // Keep the render function, but write that the homepage will be returned only when there are no post/get values.

    //render function with both $_GET and $_POST vars available if it would be needed.

    public function render()
    {
        //this is just example code, you can remove the line below
        //$user = new User('John Smith','test@hotmail.com');

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }
}