<?php

use JsonMapper\JsonMapperFactory;

class ApiClient
{
    const URL = 'https://jsonplaceholder.typicode.com';

    public function __construct(protected JsonMapper\JsonMapper $jsonMapper) {
    }

    public function getUsers():array {
        $users = $this->jsonMapper->mapArray(json_decode(file_get_contents(ApiClient::URL.'/users')), new User());

        foreach ($users as $user) {
            $user->id = null;
        }

        return $users;
    }
}

?>