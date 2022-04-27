<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $userId;

    #[ORM\Column(type: 'string', length: 255)]
    private $userGender;

    #[ORM\Column(type: 'string', length: 255)]
    private $userFirstName;

    #[ORM\Column(type: 'string', length: 255)]
    private $userLastName;

    #[ORM\Column(type: 'string', length: 255)]
    private $userAddress;

    #[ORM\Column(type: 'string', length: 255)]
    private $userCountry;

    #[ORM\Column(type: 'string', length: 255)]
    private $userNationality;

    #[ORM\Column(type: 'boolean')]
    private $userPassport;

    #[ORM\Column(type: 'string', length: 255)]
    private $userPassportFile;

    #[ORM\Column(type: 'string', length: 255)]
    private $userCurrentLocation;

    #[ORM\Column(type: 'string', length: 255)]
    private $userExperience;

    #[ORM\Column(type: 'string', length: 255)]
    private $userDescription;

    #[ORM\Column(type: 'date')]
    private $userDateOfBirth;

    #[ORM\Column(type: 'string', length: 255)]
    private $userPlaceOfBirth;

    #[ORM\Column(type: 'string', length: 255)]
    private $userEmail;

    #[ORM\Column(type: 'string', length: 255)]
    private $userPwd;

    #[ORM\Column(type: 'string', length: 255)]
    private $getNewPwd;

    #[ORM\Column(type: 'boolean')]
    private $isAvailable;

    #[ORM\Column(type: 'string', length: 255)]
    private $userCategory;

    #[ORM\Column(type: 'boolean')]
    private $isAdmin;

    #[ORM\Column(type: 'string', length: 255)]
    private $addUserNotes;

    #[ORM\Column(type: 'datetime_immutable')]
    private $profileCreatedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $profileUpdatedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $profileDeletedAt;

    #[ORM\Column(type: 'string', length: 255)]
    private $userCv;

    #[ORM\Column(type: 'string', length: 255)]
    private $userPp;

    #[ORM\Column(type: 'integer')]
    private $userTelephone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUserGender(): ?string
    {
        return $this->userGender;
    }

    public function setUserGender(string $userGender): self
    {
        $this->userGender = $userGender;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->userFirstName;
    }

    public function setUserFirstName(string $userFirstName): self
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    public function getUserLastName(): ?string
    {
        return $this->userLastName;
    }

    public function setUserLastName(string $userLastName): self
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    public function getUserAddress(): ?string
    {
        return $this->userAddress;
    }

    public function setUserAddress(string $userAddress): self
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    public function getUserCountry(): ?string
    {
        return $this->userCountry;
    }

    public function setUserCountry(string $userCountry): self
    {
        $this->userCountry = $userCountry;

        return $this;
    }

    public function getUserNationality(): ?string
    {
        return $this->userNationality;
    }

    public function setUserNationality(string $userNationality): self
    {
        $this->userNationality = $userNationality;

        return $this;
    }

    public function getUserPassport(): ?bool
    {
        return $this->userPassport;
    }

    public function setUserPassport(bool $userPassport): self
    {
        $this->userPassport = $userPassport;

        return $this;
    }

    public function getUserPassportFile(): ?string
    {
        return $this->userPassportFile;
    }

    public function setUserPassportFile(string $userPassportFile): self
    {
        $this->userPassportFile = $userPassportFile;

        return $this;
    }

    public function getUserCurrentLocation(): ?string
    {
        return $this->userCurrentLocation;
    }

    public function setUserCurrentLocation(string $userCurrentLocation): self
    {
        $this->userCurrentLocation = $userCurrentLocation;

        return $this;
    }

    public function getUserExperience(): ?string
    {
        return $this->userExperience;
    }

    public function setUserExperience(string $userExperience): self
    {
        $this->userExperience = $userExperience;

        return $this;
    }

    public function getUserDescription(): ?string
    {
        return $this->userDescription;
    }

    public function setUserDescription(string $userDescription): self
    {
        $this->userDescription = $userDescription;

        return $this;
    }

    public function getUserDateOfBirth(): ?\DateTimeInterface
    {
        return $this->userDateOfBirth;
    }

    public function setUserDateOfBirth(\DateTimeInterface $userDateOfBirth): self
    {
        $this->userDateOfBirth = $userDateOfBirth;

        return $this;
    }

    public function getUserPlaceOfBirth(): ?string
    {
        return $this->userPlaceOfBirth;
    }

    public function setUserPlaceOfBirth(string $userPlaceOfBirth): self
    {
        $this->userPlaceOfBirth = $userPlaceOfBirth;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserPwd(): ?string
    {
        return $this->userPwd;
    }

    public function setUserPwd(string $userPwd): self
    {
        $this->userPwd = $userPwd;

        return $this;
    }

    public function getGetNewPwd(): ?string
    {
        return $this->getNewPwd;
    }

    public function setGetNewPwd(string $getNewPwd): self
    {
        $this->getNewPwd = $getNewPwd;

        return $this;
    }

    public function getIsAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(bool $isAvailable): self
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    public function getUserCategory(): ?string
    {
        return $this->userCategory;
    }

    public function setUserCategory(string $userCategory): self
    {
        $this->userCategory = $userCategory;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getAddUserNotes(): ?string
    {
        return $this->addUserNotes;
    }

    public function setAddUserNotes(string $addUserNotes): self
    {
        $this->addUserNotes = $addUserNotes;

        return $this;
    }

    public function getProfileCreatedAt(): ?\DateTimeImmutable
    {
        return $this->profileCreatedAt;
    }

    public function setProfileCreatedAt(\DateTimeImmutable $profileCreatedAt): self
    {
        $this->profileCreatedAt = $profileCreatedAt;

        return $this;
    }

    public function getProfileUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->profileUpdatedAt;
    }

    public function setProfileUpdatedAt(\DateTimeImmutable $profileUpdatedAt): self
    {
        $this->profileUpdatedAt = $profileUpdatedAt;

        return $this;
    }

    public function getProfileDeletedAt(): ?\DateTimeImmutable
    {
        return $this->profileDeletedAt;
    }

    public function setProfileDeletedAt(\DateTimeImmutable $profileDeletedAt): self
    {
        $this->profileDeletedAt = $profileDeletedAt;

        return $this;
    }

    public function getUserCv(): ?string
    {
        return $this->userCv;
    }

    public function setUserCv(string $userCv): self
    {
        $this->userCv = $userCv;

        return $this;
    }

    public function getUserPp(): ?string
    {
        return $this->userPp;
    }

    public function setUserPp(string $userPp): self
    {
        $this->userPp = $userPp;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getUserTelephone(): ?int
    {
        return $this->userTelephone;
    }

    public function setUserTelephone(int $userTelephone): self
    {
        $this->userTelephone = $userTelephone;

        return $this;
    }
}
