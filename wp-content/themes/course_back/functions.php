<?php

add_action("rest_api_init", function () {

    register_rest_route("courses/v1", "login", [
        "methods" => "GET",
        "callback" => "get_courses",
        "permission_callback" => "__return_true"
    ]);
});
