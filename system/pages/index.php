<?php
include_once 'configs/Config.php';
include_once '../classes/action/CourseAction.php';
include_once '../classes/action/UserAction.php';
include_once '../classes/action/ModuleAction.php';
include_once '../classes/action/ContentsAction.php';
include_once '../classes/action/MainAction.php';
include_once '../classes/action/SecurityAction.php';

$do = $_GET['do'];
$action = $_GET['action'];
$_SESSION['user'] = "";


if($do == ""){
    header('Location: index.php?do=security&action=login');
} 

if($do == "security"){
    $securityAction = new SecurityAction();
    if($action == "login"){
        $securityAction->login();
    }

    if($action == "validateUser"){
        $securityAction->validateUser($_POST);
    }

    // if($action == "edit"){
    //     $userAction->edit($_GET);
    // }
    
    // if($action == "include"){
    //     $userAction->include($_POST);
    // }

    // if($action == "change"){
    //     $userAction->change($_POST);
    // }

    // if($action == "delete"){
    //     $userAction->delete($_GET);
    // } 
} 


    

if($_SESSION['user'] != ""){

    MainAction::header();

    if($do == "index"){
        include('templates/home.php');
    } 

    if($do == "user"){
        $userAction = new UserAction();
        if($action == "start"){
            $userAction->start();
        }
   
        if($action == "edit"){
            $userAction->edit($_GET);
        }
        
        if($action == "include"){
            $userAction->include($_POST);
        }

        if($action == "change"){
            $userAction->change($_POST);
        }

        if($action == "delete"){
            $userAction->delete($_GET);
        } 
    } 
    
    if($do == "course"){
        $courseAction = new CourseAction();
        if($action == "start"){
            $courseAction->start();
        }
   
        if($action == "edit"){
            $courseAction->edit($_GET);
        }
        
        if($action == "include"){
           $courseAction->include($_POST);
        }

        if($action == "change"){
            $courseAction->change($_POST);
        }

        if($action == "delete"){
            $courseAction->delete($_GET);
        }
    } 

    if($do == "module"){
        $moduleAction = new ModuleAction();
        if($action == "start"){
            $moduleAction->start($_GET);
        }
   
        if($action == "edit"){
            $moduleAction->edit($_GET);
        }
        
        if($action == "include"){
           $moduleAction->include($_POST);
        }

        if($action == "change"){
            $moduleAction->change($_POST);
        }

        if($action == "delete"){
            $moduleAction->delete($_GET);
        }
    } 

    if($do == "contents"){
        $contentsAction = new ContentsAction();
        if($action == "start"){
            $contentsAction->start($_GET);
        }
   
        if($action == "edit"){
            $contentsAction->edit($_GET);
        }
        
        if($action == "include"){
           $contentsAction->include($_POST);
        }

        if($action == "change"){
            $contentsAction->change($_POST);
        }

        if($action == "delete"){
            $contentsAction->delete($_GET);
        }
    } 

    MainAction::footer();

}
