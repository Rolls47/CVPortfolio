<?php


namespace App\Controller;


use App\Repository\FormationRepository;
use App\Repository\JobRepository;
use App\Repository\SkillRepository;
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

    /**
     * @Route("/formation", name="formation")
     * @param FormationRepository $formationRepository
     * @return Response
     */
public function formation(FormationRepository $formationRepository): Response
{
    return $this->render('content/formation.html.twig', [
        'formations' => $formationRepository->findAll(),
    ]);
}

    /**
     * @Route("/skill", name="skill")
     * @param SkillRepository $skillRepository
     * @return Response
     */
public function skill(SkillRepository $skillRepository)
{
    return $this->render('content/skill.html.twig', [
        'skills' => $skillRepository->findAll(),
    ]);
}
}
