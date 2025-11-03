<?php


class Writer {
    private string $fullName;
    private string $contactEmail;
    private string $sex;

    public function __construct(string $fullName, string $contactEmail, string $sex) {
        $this->fullName = $fullName;
        $this->contactEmail = $contactEmail;
        $this->sex = $sex;
    }

    public function getFullName(): string {
        return $this->fullName;
    }

    public function getContactEmail(): string {
        return $this->contactEmail;
    }

    public function setContactEmail(string $newEmail): void {
        $this->contactEmail = $newEmail;
    }

    public function getSex(): string {
        return $this->sex;
    }

    public function __toString(): string {
        return "Writer[fullName={$this->fullName},email={$this->contactEmail},sex={$this->sex}]";
    }
}


?>

<?php

class Author {
    private string $name;
    private string $email;
    private string $gender;

    public function __construct(string $name, string $email, string $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function __toString(): string {
        return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
    }
}
?>
<!-- the 3rd Author and book method in the same file  -->

<?php

class Author0 {
    private string $fullName;
    private string $emailAddress;

    public function __construct(string $fullName, string $emailAddress) {
        $this->fullName = $fullName;
        $this->emailAddress = $emailAddress;
    }

    public function getName(): string {
        return $this->fullName;
    }

    public function getEmail(): string {
        return $this->emailAddress;
    }

    public function setEmail(string $email): void {
        $this->emailAddress = $email;
    }

    public function __toString(): string {
        return "Author[name={$this->fullName},email={$this->emailAddress}]";
    }
}
