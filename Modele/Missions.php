<?php

class Missions
{
    private int $id;
    private string $title;
    private string $description;
    private string $codename;
    private string $country;
    private string $agent;
    private string $targets;
    private string $contacts;
    private string $type;
    private string $status;
    private string $hide;
    private string $startDate;
    private string $endDate;

    public function getId(): string

    {
        return $this->id;
    }


    public function getTitle(): string

    {
        return $this->title;
    }

    public function getDescription(): string

    {
        return $this->description;
    }
    public function getCodeName(): string

    {
        return $this->codename;
    }
    public function getCountry(): string

    {
        return $this->country;
    }
    public function getAgent(): string

    {
        return $this->agent;
    }
    public function getTargets(): string

    {
        return $this->targets;
    }
    public function getContacts(): string

    {
        return $this->contacts;
    }
    public function getType(): string

    {
        return $this->type;
    }
    public function getStatus(): string

    {
        return $this->status;
    }
    public function getHide(): string

    {
        return $this->hide;
    }

    public function getStartDate(): string

    {
        return $this->startDate;
    }

    public function getEndDate(): string

    {
        return $this->endDate;
    }
}
