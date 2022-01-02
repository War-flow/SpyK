<?php

class Missions
{
    public int $id;
    public string $title;
    public string $description;
    public string $codename;
    public string $country;
    public string $agent;
    public string $targets;
    public string $contacts;
    public string $type;
    public string $status;
    public string $hide;
    public string $startDate;
    public string $endDate;


    public function __construct(
        string $title,
        string $description,
        string $codename,
        string $country,
        string $agent,
        string $targets,
        string $contacts,
        string $type,
        string $status,
        string $hide,
        string $startDate,
        string $endDate
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->codename = $codename;
        $this->country = $country;
        $this->agent = $agent;
        $this->targets = $targets;
        $this->contacts = $contacts;
        $this->type = $type;
        $this->status = $status;
        $this->hide = $hide;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
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
        return $this->Status;
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
