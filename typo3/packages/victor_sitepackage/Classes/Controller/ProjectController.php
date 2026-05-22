<?php

namespace Victor\VictorSitepackage\Controller;

use Victor\VictorSitepackage\Domain\Repository\ProjectRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class ProjectController extends ActionController
{
    public function __construct(
        protected readonly ProjectRepository $projectRepository
    ) {
    }

    public function listAction(): ResponseInterface
    {
        $projects = $this->projectRepository->findAll();

        $this->view->assign('projects', $projects);

        return $this->htmlResponse();
    }
}