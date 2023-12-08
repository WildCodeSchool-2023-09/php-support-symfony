<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/trombinoscope', name: 'app_student')]
    public function index(
        StudentRepository $studentRepository
    ): Response {
        // SIMPLE MVC
        // $studentMananger = new StudentManager();
        // $students = $studentMananger->selectAll();

        // Avec Symfony
        $students = $studentRepository->findAll();

        // dump & die
        // dd($students);
        return $this->render('student/index.html.twig', [
            'students' => $students,
        ]);
    }
}
