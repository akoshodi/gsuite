<?php

namespace Wyattcast44\GSuite\Contracts;

interface AccountsRepository
{
    public function delete(string $userKey);
    
    public function get(string $userKey, string $projection, string $viewType, $customFieldMask);

    public function insert(array $name, string $email, string $password, bool $changePasswordNextLogin);

    public function list(array $parameters);
    
    // $parameters = [
    //     "customFieldMask",
    //     "customer",
    //     "domain",
    //     "event",
    //     "maxResults",
    //     "orderBy",
    //     "pageToken",
    //     "projection",
    //     "query",
    //     "showDeleted",
    //     "sortOrder",
    //     "viewType",
    // ];

    public function makeAdmin(string $userKey);

    public function update(string $userKey, array $parameters);
}