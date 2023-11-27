<?php

namespace App\Controller;
use App\Form\VoitureForm;
use App\Entity\VOITURE;
use App\Repository\VOITURERepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class VoitureController extends AbstractController
{

    #[Route('/listvoiture', name: 'listv')]
    public function listvoiture(VOITURERepository $vr)
    {

        $voitures= $vr->findAll();

        return $this->render("Voiture/voiture.html.twig", ["listvoiture"=>$voitures]);

    }
    #[Route('/addvoiture',name:'addVoiture')]
    public function addVoiture(Request $request, EntityManagerInterface $em)
    {
        $voiture = new Voiture();
        $form = $this->createForm(VoitureForm::class,$voiture);
        $form -> handleRequest($request);
        if($form -> isSubmitted()){
            $em->persist($voiture);
            $em->flush();
           return $this->redirectToRoute ("listv");
        }
        return $this ->render("voiture/addVoiture.html.twig",["formV"=>$form->createView()]);
    }
    #[Route('/voiture/{id}', name: 'voitureDelete')]
    public function delete(VoitureRepository $vr,EntityManagerInterface $em,$id):Response
    {

        $voiture=$vr->find($id);
        $em->remove($voiture);
        $em->flush();
        return $this->redirectToRoute(route:"listv" );

    }
        #[Route('/updateVoiture/{id}', name: 'voitureUpdate')]
    public function updateVoiture(Request $request,EntityManagerInterface $em,VoitureRepository $vr,$id):Response
    {

        $voiture=$vr->find($id);
        $editform=$this->createForm(VoitureForm::class,$voiture);
        $editform->handleRequest($request);
        if ($editform->isSubmitted() and $editform->isValid()){
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute(route:"listv" );
        }


        return $this->render("voiture/updateVoiture.html.twig", ["editFormVoiture"=>$editform->createView()]);

    }

}