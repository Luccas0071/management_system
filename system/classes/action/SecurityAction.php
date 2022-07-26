<?php
include_once '../classes/form/SecurityForm.php';
include_once '../classes/facade/SecurityFacade.php';
include_once '../classes/model/Security.php';
include_once '../classes/dao/SecurityDAO.php';
include_once '../pages/configs/config.php';

class SecurityAction{

    public function login(){

        // $objSecurityFacade   = new SecurityFacade();
        $smarty              = new Smarty();

        try {
            // $collectionUser = $objUserFacade->listUser();
            // $smarty->assign("collectionUser", $collectionUser);

        } catch (Exception $e) {
            throw new Exception("UserAction->star " . $e);
        }
        

        $smarty->display('templates/login/login.html');
	}

    public function validateUser($request){

        $smarty             = new Smarty();
        $objSecurityForm    = new SecurityForm();
        $objSecurityFacade  = new SecurityFacade();
        
        $objSecurityForm->validate($request);
        try {
            // $objSecurityForm->transferRequestForm($request);
            // $objSecurity = $objSecurityForm->transferFormModel();

            // $objSecurityFacade   = new SecurityFacade();

        
            // $collectionUser = $objUserFacade->listUser();
            // $smarty->assign("collectionUser", $collectionUser);

        } catch (Exception $e) {
            throw new Exception("UserAction->star " . $e);
        }
        

        $smarty->display('templates/login/login.html');
	}

}

   