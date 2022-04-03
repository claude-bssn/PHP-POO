drop DATABASE if EXISTS refuge;
create database refuge;

use refuge;

create table refuges(
  refuge_id int not null auto_increment,
  refuge_name varchar(100) not null,
  refuge_address varchar(255) DEFAULT NULL,
  refuge_phone varchar(18) not null,
  PRIMARY KEY(refuge_id)
) ENGINE=InnoDB;

create table specificities(
  specificity_id int not null auto_increment,
  specificity_label varchar(100) not null,
  PRIMARY KEY(specificity_id),
  unique key specificity_label (specificity_label)
) ENGINE=InnoDB;

create table cages(
  cage_id int not null auto_increment,
  cage_label varchar(100) not null,
  cage_capacity int not null,
  refuge_id int not null,
  specificity_id int not null,
  PRIMARY KEY(cage_id),
  unique key cage_label (cage_label),
  CONSTRAINT FK_cages_refuge_id FOREIGN KEY (refuge_id) REFERENCES refuges (refuge_id) ON DELETE CASCADE,
  CONSTRAINT FK_cages_specificity_id FOREIGN KEY (specificity_id) REFERENCES specificities (specificity_id) ON DELETE CASCADE
) ENGINE=InnoDB;

create table caregivers(
  caregiver_id int not null auto_increment,
  caregiver_name	varchar(100) not null,
  caregiver_firstname varchar(100) not null,		
  caregiver_check_in date not null,	
  caregiver_gender varchar(100) DEFAULT null,
  caregiver_phone	varchar(18) not null ,
  caregiver_mail varchar(255) not null,		
  caregiver_picture	varchar(255) DEFAULT null,
  caregiver_specialty varchar(100) not null,
  caregiver_treatment_per_day	int(5) not null ,
  caregiver_supervisor int DEFAULT null,
  caregiver_check_out date DEFAULT null,		
  caregiver_info text DEFAULT null,
  PRIMARY KEY(caregiver_id),
  unique key caregiver_mail (caregiver_mail),
  CONSTRAINT FK_caregivers_caregiver_id FOREIGN KEY (caregiver_supervisor) REFERENCES caregivers (caregiver_id) ON DELETE CASCADE
) ENGINE=InnoDB;

create table animals(
  animal_id	int not null auto_increment,
  animal_name	varchar(100) not null,
  animal_age int not null,
  animal_species varchar(255) not null,
  animal_check_in date not null,	
  animal_sex varchar(100) DEFAULT null,
  animal_chip	varchar(20) not null,
  animal_picture varchar(255) DEFAULT null,	
  animal_weight float DEFAULT null,  	
  animal_care	text DEFAULT null,
  caregiver_id int not null,
  animal_adoption_date date DEFAULT null,		
  animal_death date DEFAULT null,		
  animal_info text DEFAULT null,		
  PRIMARY KEY(animal_id),
  CONSTRAINT FK_animals_caregiver_id FOREIGN KEY (caregiver_id) REFERENCES caregivers (caregiver_id) ON DELETE CASCADE
) ENGINE=InnoDB;

create table caregiver_animals(
  animal_id	int not null,
  caregiver_id int not null,
  PRIMARY KEY(animal_id, caregiver_id),
  CONSTRAINT FK_CA_caregiver_id FOREIGN KEY (caregiver_id) REFERENCES caregivers (caregiver_id) ON DELETE CASCADE,
  CONSTRAINT FK_CA_animal_id FOREIGN KEY (animal_id) REFERENCES animals (animal_id) ON DELETE CASCADE
) ENGINE=InnoDB;

create table owners(
  owner_id int not null auto_increment,
  owner_name 	varchar(100) not null,
  owner_firstname varchar(200) not null,
  owner_inscription_date date not null,
  owner_address varchar(255) DEFAULT NULL,
  owner_phone varchar(18) not null,
  owner_mail varchar(255) DEFAULT null,
  owner_info text DEFAULT null,
  PRIMARY KEY(owner_id)
) ENGINE=InnoDB;

create table adoptions(
  adoption_id int not null auto_increment,
  animal_id int not null,
  owner_id int not null,
  adoption_date date not null,
  adoption_price float not null,
  adoption_info text DEFAULT null,
  PRIMARY KEY(adoption_id),
  CONSTRAINT FK_adoptions_animal_id FOREIGN KEY (animal_id) REFERENCES animals (animal_id) ON DELETE CASCADE,
  CONSTRAINT FK_adoptions_owner_id FOREIGN KEY (owner_id) REFERENCES owners (owner_id) ON DELETE CASCADE
) ENGINE=InnoDB;

