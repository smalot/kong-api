<?php

namespace Smalot\Kong\Services;

interface CertificateInterface
{
    const SERVICE_NAME = 'certificate';

    public function create($body = []);

    public function retrieve($name);

    public function all($body = []);

    public function update($name, $body = []);

    public function updateOrCreate($body = []);

    public function delete($name);
}
