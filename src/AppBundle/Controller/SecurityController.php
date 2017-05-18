<?php

namespace AppBundle\Controller;

use Cangulo\SecurityBundle\Controller\DefaultController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends DefaultController
{
    /**
     * @Route("/login", name="/login")
     */
    public function loginAction()
    {
        return $this->login();
    }

    /**
     * @Route("/logout", name="/logout")
     */
    public function logoutAction()
    {
        return $this->logout();
    }

    /**
     * @Route("/password-change", name="/password-change")
     */
    public function passwordChangeAction(Request $request)
    {
        return $this->passwordChange($request);
    }

    /**
     * @Route("/password-request", name="/password-request")
     */
    public function passwordRequestAction(Request $request)
    {
        return $this->passwordRequest($request, ':Usuario', 'Recuperação de senha',
            'admin@example.com');
    }


    /**
     * @Route("/password-new", name="/password-new")
     */
    public function passwordNewAction(Request $request)
    {
        return $this->passwordNew($request, 'Usuario', 'main');
    }
}
