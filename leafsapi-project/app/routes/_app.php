<?php

app()->get("/", function () {
    response()->json(["message" => "Congrats!! You're on Leaf API"]);
});


app()->get("/person", "PersonController@index");

app()->get("/person/{id}", "PersonController@findById");

app()->post("/person", "PersonController@add");

app()->put("/person/{id}", "PersonController@edit");

app()->delete("/person/{id}", "PersonController@delete");

app()->get("/app", function () {
    // app() returns $app
    response()->json(app()->routes());
});
