<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Psr\Log\LoggerInterface;

use App\Entity\Categorie;
use App\Form\CategorieType;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index()
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
    
   /**
     * @Route("/categorie/add_categorie", name="add_categ")
     */
    
    public function creerCategorie(Request $query) {
                
    // On crée un objet Catégorie
    $categ = new Categorie();
    
    $form = $this->createForm(CategorieType::class, $categ);
    
    //$request = Request::createFromGlobals();
    
    $form->handleRequest($query);
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $categ contient les valeurs entrées dans le formulaire 
        
    if ($form->isSubmitted() && $form->isValid()) {
        
      // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)

  
        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($categ);
        $em->flush();     
        
        $query->getSession() 
              ->getFlashBag()
              ->add('success','Catégorie ajoutée avec succès');
       
        return $this->redirectToRoute('add_categ');
    }
        return $this->render('categorie/add.html.twig',array('form'=>$form->createView()));     
     }
     
/**
 * @Route("/products")
 */
public function list(LoggerInterface $logger)
{
    $logger->info('Look! I just used a service');

    // ...
}
}

