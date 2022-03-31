<?php

namespace App\DataFixtures;

use App\Entity\dish;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
	private UserPasswordHasherInterface $hasher;
	
	public function __construct(UserPasswordHasherInterface $hasher){
		$this->hasher = $hasher;
	}
	
    public function load(ObjectManager $manager): void
    {
		// MENU
	    $dish = new dish();
	    $dish->setDishName("Salmon Salad");
	    $dish->setDescription("Cooked Salmon, Spring mix, Cherry tomatoes");
	    $dish->setType("Starter");
	    $dish->setPrice(28);
	    $dish->setPhoto("image/plat-1.png");
	    $manager->persist($dish);
	    $manager->flush();
	
	    $dish = new dish();
	    $dish->setDishName("Shrip Salad");
	    $dish->setDescription("Poached shrimp, Fresh cheese");
	    $dish->setType("Starter");
	    $dish->setPrice(22);
	    $dish->setPhoto("image/plat-5.png");
	    $manager->persist($dish);
	    $manager->flush();
	
	    $dish = new dish();
	    $dish->setDishName("Ceasar Salad");
	    $dish->setDescription("Chicken, Croutons, Avocado ");
	    $dish->setType("Starter");
	    $dish->setPrice(32);
	    $dish->setPhoto("image/plat-6.png");
	    $manager->persist($dish);
	    $manager->flush();
	    
		$dish = new dish();
	    $dish->setDishName("Pasta Rosa");
	    $dish->setDescription("Fresh linguini, Homemade tomato sauce");
	    $dish->setType("Main");
	    $dish->setPrice(35);
	    $dish->setPhoto("image/plat-2.png");
	    $manager->persist($dish);
	    $manager->flush();
	
	    $dish = new dish();
	    $dish->setDishName("Venetian Broil");
	    $dish->setDescription("Steak, Patotoes, Side salad");
	    $dish->setType("Main");
	    $dish->setPrice(45);
	    $dish->setPhoto("image/plat-4.png");
	    $manager->persist($dish);
	    $manager->flush();
		
	    $dish = new dish();
	    $dish->setDishName("Pasta Caratera");
	    $dish->setDescription("Fresh eliche, Garlic, Basil");
	    $dish->setType("Main");
	    $dish->setPrice(25);
	    $dish->setPhoto("image/plat-3.png");
	    $manager->persist($dish);
	    $manager->flush();
		
	    $dish = new dish();
	    $dish->setDishName("Fruit Salad");
	    $dish->setDescription("Seasonal fruits");
	    $dish->setType("Dessert");
	    $dish->setPrice(20);
	    $dish->setPhoto("image/plat-7.png");
	    $manager->persist($dish);
	    $manager->flush();
	
	    $dish = new dish();
	    $dish->setDishName("Tiramisu");
	    $dish->setDescription("1 portion");
	    $dish->setType("Dessert");
	    $dish->setPrice(17);
	    $dish->setPhoto("image/plat-8.png");
	    $manager->persist($dish);
	    $manager->flush();
	
	    $dish = new dish();
	    $dish->setDishName("Panettone Pandoro");
	    $dish->setDescription("1 portion");
	    $dish->setType("Dessert");
	    $dish->setPrice(15);
	    $dish->setPhoto("image/plat-9.png");
	    $manager->persist($dish);
	    $manager->flush();
		
		//ADMIN
		$user = new User();
		$user->setIdUser("gusto");
	    $user->setFirstName("Auguste");
	    $user->setLastName("Gusto");
	    $user->setGender("M");
	    $user->setAdress("Gusto HQ");
	    $user->setMail("gusto@gusto.com");
	    $user->setLevel(['ROLE_ADMIN']);
	    $user->setCreatedAt(new \DateTimeImmutable());
	    $user->setPwdUser($this->hasher->hashPassword($user, 'azerty'));
	    $manager->persist($user);
	    $manager->flush();
		
		//USERS
	    $user = new User();
	    $user->setIdUser("teya");
	    $user->setFirstName("Teya");
	    $user->setLastName("Didi");
	    $user->setGender("F");
	    $user->setAdress("92130");
	    $user->setMail("diditeya@gmail.com");
	    $user->setLevel(['ROLE_USER']);
	    $user->setCreatedAt(new \DateTimeImmutable());
	    $user->setPwdUser($this->hasher->hashPassword($user, 'teya123'));
	    $manager->persist($user);
	    $manager->flush();
	
	    $user = new User();
	    $user->setIdUser("katia");
	    $user->setFirstName("Katia");
	    $user->setLastName("Hammache");
	    $user->setGender("F");
	    $user->setAdress("75013");
	    $user->setMail("hkatia@gmail.com");
	    $user->setLevel(['ROLE_USER']);
	    $user->setCreatedAt(new \DateTimeImmutable());
	    $user->setPwdUser($this->hasher->hashPassword($user, 'kat123'));
	    $manager->persist($user);
	    $manager->flush();
	
	    $user = new User();
	    $user->setIdUser("manel");
	    $user->setFirstName("Manel");
	    $user->setLastName("Isselnane");
	    $user->setGender("F");
	    $user->setAdress("75000");
	    $user->setMail("maneliss@gmail.com");
	    $user->setLevel(['ROLE_USER']);
	    $user->setCreatedAt(new \DateTimeImmutable());
	    $user->setPwdUser($this->hasher->hashPassword($user, 'man123'));
	    $manager->persist($user);
	    $manager->flush();
	
	    $user = new User();
	    $user->setIdUser("haphuong");
	    $user->setFirstName("Ha Phuong");
	    $user->setLastName("Tran");
	    $user->setGender("F");
	    $user->setAdress("75000");
	    $user->setMail("tranhaphuong@gmail.com");
	    $user->setLevel(['ROLE_USER']);
	    $user->setCreatedAt(new \DateTimeImmutable());
	    $user->setPwdUser($this->hasher->hashPassword($user, 'tran123'));
	    $manager->persist($user);
	    $manager->flush();
		
    }
}
