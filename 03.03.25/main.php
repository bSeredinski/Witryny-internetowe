<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class User{
            private $firstname;
            private $lastname;
            private $age;
            private $role;
            public function __construct($firstname, $lastname, $age, $role){
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
                $this->role = $role;
            }

            public function getFirstName(){
                return $this->firstname;
            }

            
            public function setFirstName($firstname){
                $this->firstname = $firstname;
            }


            public function getLastName(){
                return $this->lastname;
            }


            public function setLastName($lastname){
                $this->lastname = $lastname;
            }


            public function getAge(){
                return $this->age;
            }


            public function setAge($age){
                $this->age = $age;
            }


            public function getRole(){
                return $this->role;
            }


            public function setRole($role){
                $this->role = $role;
            }

            public function displayUser(){
                echo "Imie: ".$this->getFirstName()."<br>";
                echo "Nazwisko: ".$this->getLastName()."<br>";
                echo "Wiek: ".$this->getAge()."<br>";
                echo "Stanowisko: ".$this->getRole()."<br>";
            }
        }

        class Manager {
            private $users = [];
            
            public function addUser($user){
                $this->users[] = $user;
                echo "Użytkownik został dodany.<br>";
                $user->getFirstName() . " ";
                $user->getLastName();
            }

            public function displayUsers(){
                echo "Lista użytkowników:<br>";
                foreach($this->users as $user){
                    $user->displayUser();
                }
            }

            // public function deleteUser($user){
            //     foreach($this->users as $user){
            //         $users->delete($user);
            //     }
            // }
        }
        
        $user1 = new User("Jan", "Kowalski", 30, "Kierownik");
        $user2 = new User("Anna", "Nowak", 25, "Konsultant");
        $user3 = new User("Sigma", "Bimba", 20, "Klient");
        
        $manager1 = new Manager();
        $manager1->addUser($user1);
        $manager1->addUser($user2);
        $manager1->addUser($user3);

        $manager1->displayUsers();
    
    
    ?>
</body>
</html>