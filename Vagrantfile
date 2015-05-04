# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.network "private_network", ip: "192.168.4.20"

  # Change this as your needs
  config.vm.hostname = 'wordpress.local'

  config.vm.synced_folder "./wordpress", "/vagrant"

  # Configure A Few VirtualBox Settings
  config.vm.provider "virtualbox" do |vb|
    vb.name = 'phalcon-box'
    vb.customize ["modifyvm", :id, "--memory", "512"]
    vb.customize ["modifyvm", :id, "--cpus", "1"]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--ostype", "Ubuntu_64"]
  end
  
  config.vm.provision :shell, :path => "provision/shell/install_init.sh"
  config.vm.provision :shell, :path => "provision/shell/install_apache.sh"
  config.vm.provision :shell, :path => "provision/shell/install_mysql.sh"
  config.vm.provision :shell, :path => "provision/shell/install_php.sh"
  config.vm.provision :shell, :path => "provision/shell/create_virtualhost.sh"
end
