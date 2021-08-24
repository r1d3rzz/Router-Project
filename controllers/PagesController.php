<?php
    use core\app;
    class PagesController
    {
        public function home()
        {
            $users=App::get("database")->selectAll("users");
    
            view("index",["users"=>$users]);
        }
        public function about()
        {
            view("about");
        }
        public function order()
        {
            view("order");
        }
        public function createUsers()
        {
            App::get("database")->insert([
                "names"=>request("name"),
            ],"users");
            
            redirect("/");
        }
    }
?>