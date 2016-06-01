<?php

namespace App\AppBundle\Controller;

use App\AppBundle\Entity\User;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    /**
     * Cette fonction retourne tous les utilisateurs
     *
     * @ApiDoc(
     *     resource=true,
     *     description="Retourne tous les utilisateurs"
     * )
     *
     * @return array
     */
    public function getUsersAction() {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();

        return array('users' => $users);
    }

    /**
     * Cette fonction retourne un utilisateur
     *
     * @ApiDoc(
     *     description="Retourne un utilisateur",
     *     parameters={
     *     {"name"="id", "dataType"="integer", "required"=true, "description"="Identifiant de l'utilisateur"}
     *     }
     * )
     *
     * @param User $user
     * @return array
     */
    public function getUserAction(User $user) {
        return array('user' => $user);
    }
}
