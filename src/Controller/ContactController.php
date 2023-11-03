<?php

namespace App\Controller;

use App\Entity\Prospect;
use App\Form\ContactFormType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'contacts' => $contacts,
        ]);
    }

    #[Route('/contact/new', name: 'app_contact_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Prospect();
        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/new.html.twig', [
            'controller_name' => 'ContactController',
            'contactForm' => $form->createView(),
        ]);
    }
}
