<?php


namespace App\Controller;


use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     * @param JobRepository $jobRepository
     * @return Response
     */
public function job(JobRepository $jobRepository): Response
{
    return $this->render('content/job.html.twig', [
        'jobs' => $jobRepository->findAll(),
    ]);
}
}

