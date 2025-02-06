<?php

use JsonMapper\JsonMapperFactory;

class ApiClient
{
    const string URL = 'https://jsonplaceholder.typicode.com';

    public function __construct(protected JsonMapper\JsonMapper $jsonMapper) {
    }

    public function getUsers():array {
        $users = $this->jsonMapper->mapArray($this->getRequest('/users'), new User());

        foreach ($users as $user) {
            $user->id = null;
        }

        return $users;
    }

    private function getRequest(string $path):mixed {
        return json_decode(file_get_contents(ApiClient::URL.$path));
    }
}

?>