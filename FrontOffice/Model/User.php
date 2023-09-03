<?php
	class User
    {
        private $ID=null;
		private $name=null;
		private $email=null;
        private $pass=null;
		private $adresse=NULL;
		private $num=NULL;
		private $role=NULL;
     
        function __construct($name, $email, $pass, $adresse, $num, $role)
        {
		
			$this->name=$name;
			$this->email=$email;         
            $this->pass=$pass;
			$this->adresse=$adresse; 
			$this->num=$num;
			$this->role=$role;
		}

        function getID()
        {
			return $this->ID;
		}
		function getname()
        {
			return $this->name;
		}
		function getemail()
        {
			return $this->email;
		}
        function getpass()
        {
			return $this->pass;
		}
		function getadresse()
        {
			return $this->adresse;
		}
		function getnum()
        {
			return $this->num;
		}
		function getrole()
        {
			return $this->role;
		}
        function setID(int $ID)
        {
			$this->ID=$ID;
		}
		function setname(string $name)
        {
			$this->name=$name;
		}
		function setemail(string $email)
        {
			$this->email=$email;
		}
		function setpass(string $pass)
        {
			$this->pass=$pass;
		}
		function setadresse(string $adresse)
        {
			$this->adresse=$adresse;
		}
		function setnum(int $num)
        {
			$this->num=$num;
		}
		function setrole(string $role)
        {
			$this->role=$role;
		}
    }
?>       