<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/dao/SecurityDAO.php';

class SecurityFacade{

    /* List */
    public function listUser(){
        
        DAOFactory::getDAOFactory();
        
        $objUserDAO  = new  UserDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionUser = $objUserDAO->listUser();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $collectionUser;
    }
}