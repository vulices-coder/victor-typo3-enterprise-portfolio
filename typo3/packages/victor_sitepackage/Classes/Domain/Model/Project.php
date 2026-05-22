<?php

namespace Victor\VictorSitepackage\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Project extends AbstractEntity
{
    protected string $title = '';

    protected string $description = '';

    protected string $techStack = '';

    protected string $githubUrl = '';

    protected string $demoUrl = '';

    protected bool $featured = false;


    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    public function getTechStack(): string
    {
        return $this->techStack;
    }

    public function setTechStack(string $techStack): void
    {
        $this->techStack = $techStack;
    }


    public function getGithubUrl(): string
    {
        return $this->githubUrl;
    }

    public function setGithubUrl(string $githubUrl): void
    {
        $this->githubUrl = $githubUrl;
    }


    public function getDemoUrl(): string
    {
        return $this->demoUrl;
    }

    public function setDemoUrl(string $demoUrl): void
    {
        $this->demoUrl = $demoUrl;
    }


    public function isFeatured(): bool
    {
        return $this->featured;
    }

    public function setFeatured(bool $featured): void
    {
        $this->featured = $featured;
    }
}