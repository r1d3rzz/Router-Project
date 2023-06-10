<?php

namespace controllers;

use core\app;

class PagesController
{
    public function index()
    {
        $users = App::get("database")->selectAll("users");

        view("index", ["users" => $users]);
    }
    public function about()
    {
        view("about");
    }
    public function order()
    {
        view("order");
    }
    public function store()
    {
        App::get("database")->insert([
            "names" => request("name"),
        ], "users");

        redirect("/");
    }
    public function destroy()
    {
        App::get("database")->delete([
            "id" => request("id"),
        ], "users");

        redirect("/");
    }
}
