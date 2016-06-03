<?php

namespace T4web\Session\SaveHandler;

use Zend\Session\SaveHandler\DbTableGateway as ZendDbTableGateway;

class DbTableGateway extends ZendDbTableGateway
{
    /**
     * Destroy session
     *
     * @param  string $id
     * @return bool
     */
    public function destroy($id)
    {
        parent::destroy($id);

        return true;
    }
}